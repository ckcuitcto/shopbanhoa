<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
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
    public function getList(){
        $slide = Slide::orderBy('slide.id', 'DESC')->get();
        return view('admin.slide.slide',compact('slide'));
    }

    public function postList(Request $request){
        if ($request->hasFile('mutilFile')) {
            $arrFile = $request->file('mutilFile');
            foreach ($arrFile as $file) {

                if (!$this->checkExtension($file->getClientOriginalExtension())) {
                    return redirect()->back()->with('flash_message_fail', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
                }
            }

            foreach ($arrFile as $file) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                while (file_exists("template/image/slide/" . $fileName)) {
                    $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                }
                $file->move('template/image/slide/', $fileName);
                $slide = new Slide();
                $slide->image = $fileName;
                $slide->save();
            }
        }

        return redirect()->route('admin.slide.getList')->with(['flash_message' => 'Thêm thành công']);
    }

    private function checkExtension($fileExtensions)
    {
        $arr = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
        if (in_array($fileExtensions, $arr)) {
            return true;
        }
        return false;
    }

    public function getDeleteSlideImage($id)
    {
        $slide = Slide::find($id);
        unlink("template/image/slide/" . $slide->image);
        $slide->delete();
        echo "success";
    }
}
