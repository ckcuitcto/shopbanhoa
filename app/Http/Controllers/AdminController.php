<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Contacts;
use App\ContactUs;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {

        $qtyContact = ContactUs::where('confirm', '0')->count();
        $qtyBill = Bill::where('confirm', '0')->count();
        $date = date('Y-m-d');
        $date =substr($date, 5, 5);
        $qtyBirthday = DB::select("SELECT count(*) as qty FROM users where SUBSTRING(birthday,6,5) like :date",['date' => $date]);
        return view('admin.dashboard', compact('qtyContact', 'qtyBill', 'date', 'qtyBirthday'));
    }

    public function getIntroduce()
    {

        return view('admin.introduce.introduce');
    }

    public function postIntroduce()
    {
        
    }
}
