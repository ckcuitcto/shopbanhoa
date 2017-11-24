<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\ContactUs;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public function getContact()
    {
        $contact = Contacts::first();
        return view('admin.contact.contact', compact('contact'));
    }

    public function postContact(Request $request)
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
            'txtBody' => 'required'
        ], [
            'txtBody.required' => 'Bạn chưa nhập nội dung email'
        ]);

        $contact = ContactUs::find($id);
        $mTo = $contact->email;
        $nTo = $contact->name;
        $subject = "Hoa Sài Gòn phản hồi ".$contact->title;
        $body = $request->txtBody;
        echo $this->sendMail($mTo, $nTo, $subject, $body);
//        return redirect()->back()->with(['flash_message' => 'Gửi thành công']);
    }

    private function sendMail($mTo, $nTo, $subject, $body, $arrFile = NULL)
    {

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            $nFrom = "Hoa Sài Gòn";    //mail duoc gui tu dau, thuong de ten cong ty ban
            $mFrom = 'huynhjduc2482@gmail.com';  //dia chi email cua ban
            $mPass = 'frankenstein2482';       //mat khau email cua ban
            //Server settings
            $mail->SMTPDebug = 2;                                  // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = $mFrom;                 // SMTP username
            $mail->Password = $mPass;                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom($mFrom, $nFrom);
            $mail->addAddress($mTo, $nTo);     // Add a recipient// Name is optional
            $mail->addReplyTo($mFrom, $nFrom);
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');

            //Attachments

//            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->setLanguage('vi', '/optional/path/to/language/directory/');
            $mail->send();
//            echo 'Message has been sent';
            return true;
        } catch (Exception $e) {
//            echo 'Message could not be sent.';
//            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        }
    }
}
