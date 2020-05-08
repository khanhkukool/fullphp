<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create(){
        return view('news/create');
    }
    public function store(Request $request){
        echo"<pre>";
        print_r($request->all());
        echo"</pre>";

        $rules = [
            'title' => ['required','min:6'],
//            'avatar' => ['image','size:100000']
        ];
        $messages = [
            'title.required' => "Title không được để trống",
            'title.min' => "Title không được nhỏ hơn 6 ký tự",
            'avatar.image' => 'Avatar phải có định dạng ảnh',
//            'avatar.size' => 'Avatar upload dung lượng không được vượt quá 100000Kb'
        ];

        $request->validate($rules,$messages);
        $file_name='';
        if(!empty($request->avatar)){
            $avatar = $request->avatar;
            $file_name = 'news-' . time() . '-' . $avatar->getClientOriginalName();

            $dir_uploads = public_path() . '/uploads';
            print_r($dir_uploads);
            $avatar->move($dir_uploads,$file_name);
        }
//        xử lý lưu data vào bảng news
        $title = $request->get('title');
        $status = $request->get('status');
        $avatar= $file_name;

        $news_model = new News();
        $news_model->title = $title;
        $news_model->status = $status;
        $news_model->avatar = $avatar;
        $is_insert = $news_model->save();
        if($is_insert){
            session(['success' => 'INSERT thành công']);
        }
        else{
            session(['error' => 'INSERT thất bại']);
        }

        return redirect('/news');
    }

    public function index(){
      $news_model = new News();
      $news = $news_model->getAll();
      echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
      print_r($news);
      echo "</pre>";
      die;
//        session()->forget('abc');
        return view('news/index');
    }
}
