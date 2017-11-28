<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }


// Slide
    public function getSlide(){
        $slide = Slide::orderBy('slide.id', 'DESC')->get();
        return view('admin.slide.slide',compact('slide'));
    }

    public function getEdit($id){
        $slide = Slide::find($id);
        return view('admin.slide.edit',compact('slide'));
    }

    public function postEdit(Request $request, $id){
        $slide = Slide::find($id);
        if ($request->hasFile('fImages')) {
            $file = $request->file('fImages');

            $fileExtensions = $file->getClientOriginalExtension();
            if (!$this->checkExtension($fileExtensions)) {
                return redirect()->reload('admin.slide.getEdit')->with('failed', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
            }

            $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            while (file_exists("template/image/slide/" . $fileName)) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            }
            $file->move('template/image/slide/', $fileName);
            unlink("template/image/slide/" . $slide->image);
            $slide->image = $fileName;
        }
        $slide->save();

        
        return redirect()->route('admin.slide.list')->with(['flash_message' => 'Sửa thành công']);
    }

    private function checkExtension($fileExtensions)
    {
        $arr = array('jpg', 'png', 'jpeg');
        if (in_array($fileExtensions, $arr)) {
            return true;
        }
        return false;
    }
//end Slide
}
