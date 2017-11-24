<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\ContactUs;
use Illuminate\Http\Request;

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
}
