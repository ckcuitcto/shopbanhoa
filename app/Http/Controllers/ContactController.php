<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\ContactUs;
use App\Mail\ContactsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function getContact()
    {
        $contact = Contacts::first();
        return view('admin.contact.contact', compact('contact'));
    }

    public function postContact(Request $request)
    {
        if($request->has('save')) {
            $this->validate($request, [
                'txtAddress' => 'required',
                'txtEmail' => 'required|email',
                'txtPhoneNumber' => 'required|numeric',
                'txtWebsite' => 'required|url',
                'txtMap' => 'required'
            ], [
                'txtAddress.required' => 'Bạn chưa nhập địa chỉ',
                'txtEmail.required' => 'Bạn chưa nhập email',
                'txtEmail.email' => 'Bạn phải nhập đúng định dạng email',
                'txtPhoneNumber.required' => 'Bạn chưa nhập số điện thoại',
                'txtPhoneNumber.numeric' => 'Số điện thoại chỉ được phép nhập số',
                'txtWebsite.required' => 'Bạn chưa nhập website',
                'txtWebsite.url' => 'Url không đúng định dạng. Ví dụ : http://shopbanhoa/ ',
                'txtMap.required' => 'Bạn chưa nhập bản đồ',
            ]);

            $contact = Contacts::first();
            $contact->address = $request->txtAddress;
            $contact->email = $request->txtEmail;
            $contact->phone_number = $request->txtPhoneNumber;
            $contact->website = $request->txtWebsite;
            $contact->map = $request->txtMap;

            $contact->save();

            return redirect()->back()->with(['flash_message' => 'Sửa thành công']);
        }elseif($request->has('cancel'))
        {
            return redirect()->back();
        }
    }

    public function getContactUs($confirm)
    {
        if ($confirm == 2) {
            $contacts = ContactUs::orderBy('id')->get();
        } else {
            $contacts = ContactUs::where('confirm', $confirm)->orderBy('id')->get();
        }
        return view('admin.contact.contactUs', compact('contacts'));
    }

    public function postContactUs(Request $request)
    {
        $this->validate($request, [
            'txtAddress' => 'required',
            'txtEmail' => 'required|email',
            'txtPhoneNumber' => 'required|numeric',
            'txtWebsite' => 'required|url',
            'txtMap' => 'required'
        ], [
            'txtAddress.required' => 'Bạn chưa nhập địa chỉ',
            'txtEmail.required' => 'Bạn chưa nhập email',
            'txtEmail.email' => 'Bạn phải nhập đúng định dạng email',
            'txtPhoneNumber.required' => 'Bạn chưa nhập số điện thoại',
            'txtPhoneNumber.numeric' => 'Số điện thoại chỉ được phép nhập số',
            'txtWebsite.required' => 'Bạn chưa nhập website',
            'txtWebsite.url' => 'Bạn phải nhập vào url của website',
            'txtMap.required' => 'Bạn chưa nhập bản đồ',
        ]);

        $contact = Contacts::first();
        $contact->address = $request->txtAddress;
        $contact->email = $request->txtEmail;
        $contact->phone_number = $request->txtPhoneNumber;
        $contact->website = $request->txtWebsite;
        $contact->map = $request->txtMap;

        $contact->save();

        return redirect()->back()->with(['flash_message' => 'Sửa thành công']);
    }

    public function getDetailContact($id)
    {
        $contact = ContactUs::find($id);
        return view('admin.contact.detailContactUs', compact('contact'));
    }

    public function postDetailContact(Request $request, $id)
    {

        $this->validate($request, [
            'txtBody' => 'required',
//            'mutilFile' => 'mimetypes:image/gif,
//                            image/png,
//                            image/jpeg,
//                            image/bmp,
//                            image/webp,
//                            application/octet-stream, application/pkcs12,
//                            application/vnd.mspowerpoint,
//                            application/xhtml+xml,
//                            application/xml,
//                            application/pdf',
//            'mutilFile' => 'max:2048'
        ], [
            'txtBody.required' => 'Bạn chưa nhập nội dung email',
//            'mutilFile.max:' => 'File quá lớn',
//            'mutilFile.mimetypes' => 'File này không được phép',
        ]);
        $contact = ContactUs::find($id);

        $body = $request->txtBody;

        if($request->hasFile('mutilFile')){
            $arrFile = array();
            $files = $request->file('mutilFile');

            foreach ($files as $file) {
                if (!$this->checkExtension($file->getClientOriginalExtension())) {
                    return redirect()->back()->with('flash_message_fail', 'Chỉ được chọn file có đuôi doc,docx,pdf,txt');
                }

                if ($file->getSize() > 1000000) {
                    return redirect()->back()->with('flash_message_fail', 'File quá kích thước cho phép');
                }
            }

            foreach ($files as $file) {
                $fileName = str_random(8) . "_" .$this->convert_vi_to_en($file->getClientOriginalName());
                while (file_exists("template/files/" . $fileName)) {
                    $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                }
                $file->move('template/files/', $fileName);
                $arrFile[] = 'template/files/'. $fileName;
            }
            Mail::to($contact->email)->send(new ContactsMail($contact,$body,$arrFile));

            foreach ($arrFile as $file)
            {
                unlink($file);
            }

        }else {

            Mail::to($contact->email)->send(new ContactsMail($contact, $body));
        }

        $contact->confirm = 1;
        $contact->save();

        return redirect()->back()->with(['flash_message' => 'Gửi thành công']);
    }

    private function convert_vi_to_en($str)
    {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
        $str = preg_replace("/(Đ)/", 'd', $str);
        //$str = str_replace(” “, “-”, str_replace(“&*#39;”,”",$str));
        return $str;
    }

    private function checkExtension($fileExtensions)
    {
        $arr = array('doc', 'DOC', 'docx', 'DOCX', 'txt', 'TXT','pdf','PDF','jpeg','JPEG','png','PNG','bmp','BMP');
        //$fileExtensions = $this->convert_vi_to_en($fileExtensions);
        if (in_array($fileExtensions, $arr)) {
            return true;
        }
        return false;
    }

}
