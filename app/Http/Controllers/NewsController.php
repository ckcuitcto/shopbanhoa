<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\News;
use App\NewsImages;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getList()
    {
        $newsList = News::orderBy('news.id', 'DESC')->get();
        return view('admin.news.list', compact('newsList'));
    }

    public function getAdd()
    {
        $newsTitle = News::select('id', 'title', 'content')->get();
        return view('admin.news.add', compact('newsTitle'));
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'txtNewsTitle' => 'required|unique:news,title',
            'txtNewsContent' => 'required',
            'fImages' => 'required'
        ], [
            'txtNewsTitle.required' => 'Bạn nhập title',
            'txtNewsTitle.unique' => 'Title tin tức đã tồn tại',
            'txtNewsContent.required' => 'Bạn chưa nhập content',
            'fImages.required' => 'Bạn chưa đăng hình '
        ]);

        $news = new News();
        $news->title = $request->txtNewsTitle;
        $news->content = $request->txtNewsContent;

        if ($request->hasFile('fImages')) {
            $file = $request->file('fImages');

            $fileExtensions = $file->getClientOriginalExtension();
            if (!$this->checkExtension($fileExtensions)) {
                return redirect()->reload('admin.news.getAdd')->with('failed', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
            }

            $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            while (file_exists("template/image/news/" . $fileName)) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
            }
            $file->move('template/image/news/', $fileName);
            $news->image = $fileName;
        }
        $news->save();

        $newsId = $news->id;
        if ($request->hasFile('mutilFile')) {
            $arrFile = $request->file('mutilFile');
            foreach ($arrFile as $file) {
                if (!$this->checkExtension($file->getClientOriginalExtension())) {
                    return redirect()->route('admin.news.getAdd')->with('flash_message_fail', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
                }
            }
            foreach ($arrFile as $file) {
                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                while (file_exists("template/image/newsImages/" . $fileName)) {
                    $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                }
                $file->move('template/image/newsImages/', $fileName);
                $newsImages = new NewsImages();
                $newsImages->image = $fileName;
                $newsImages->id_news = $newsId;
                $newsImages->save();
            }
        }
        return redirect()->route('admin.news.list')->with(['flash_message' => 'Thêm thành công']);
    }

    public function getDelete($id)
    {
        $news = News::find($id);
        if (file_exists("template/image/news/" . $news->image)) {
            unlink("template/image/newsImage/" . $news->image);
        }
        $news->delete();
        return redirect()->route('admin.news.list')->with(['flash_message' => 'Xóa thành công']);
    }

    public function getEdit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }

    public function postEdit(Request $request, $id)
    {
        if ($request->has('submit')) {
            $this->validate($request, [
                'txtNewsTitle' => 'required',
                'txtNewsContent' => 'required',
            ], [
                'txtNewsTitle.required' => 'Bạn nhập title tin tức',
                'txtNewsContent.required' => 'Bạn chưa nhập content',
                'fImages.size' => "File quá lớn"

            ]);

            $news = News::find($id);
            $news->title = $request->txtNewsTitle;
            $news->content = $request->txtNewsContent;

            if ($request->hasFile('fImages')) {
                $file = $request->file('fImages');

                $fileExtensions = $file->getClientOriginalExtension();
                if (!$this->checkExtension($fileExtensions)) {
                    return redirect()->reload('admin.news.getEdit')->with('failed', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
                }

                $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                while (file_exists("template/image/news/" . $fileName)) {
                    $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                }
                $file->move('template/image/news/', $fileName); // lưu ảnh mới
                if (file_exists("template/image/news/" . $news->image)) {
                    unlink("template/image/news/" . $news->image); // xóa ảnh cũ
                }
                $news->image = $fileName;
            }
            $news->save();

            $newsId = $news->id;
            if ($request->hasFile('mutilFile')) {
                $arrFile = $request->file('mutilFile');
                foreach ($arrFile as $file) {
                    if (!$this->checkExtension($file->getClientOriginalExtension())) {
                        return redirect()->route('admin.news.getAdd')->with('flash_message_fail', 'Chỉ được chọn file có đuôi jpg,png,jpeg');
                    }
                }
                foreach ($arrFile as $file) {
                    $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                    while (file_exists("template/image/newsImages/" . $fileName)) {
                        $fileName = str_random(8) . "_" . $file->getClientOriginalName();
                    }
                    $file->move('template/image/newsImagesnewsImages/', $fileName);
                    $newsImages = new NewsImages();
                    $newsImages->image = $fileName;
                    $newsImages->id_news = $newsId;
                    $newsImages->save();
                }
            }
            return redirect()->back()->with(['flash_message' => 'Sửa thành công']);
        } elseif ($request->has('cancel')) {
            return redirect()->back();
        }
    }

    private function checkExtension($fileExtensions)
    {
        $arr = array('jpg', 'png', 'jpeg');
        if (in_array($fileExtensions, $arr)) {
            return true;
        }
        return false;
    }

}
