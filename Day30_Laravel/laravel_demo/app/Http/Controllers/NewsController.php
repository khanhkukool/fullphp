<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\NewsRequest;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function create(){
        //lấy ra tất cả danh mục đang có trên hệ thống
        //lấy theo kiểu Eloquent ORM
        $categories = Category::all();
        //lấy theo QueryBuilder
//        $categories = DB::table('categories')->get();

        return view('news/create', [
            'categories' => $categories
        ]);
    }

    /**
     * Sử dụng class NewsRequest tự tạo để validate, thay vì class
     * Request mặc định của Laravel
     * @param NewsRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(NewsRequest $request){
//        echo"<pre>";
//        print_r($request->all());
//        echo"</pre>";
//        die;
//        $rules = [
//            'title' => ['required','min:6'],
////            'avatar' => ['image','size:100000']
//        ];
//        $messages = [
//            'title.required' => "Title không được để trống",
//            'title.min' => "Title không được nhỏ hơn 6 ký tự",
//            'avatar.image' => 'Avatar phải có định dạng ảnh',
////            'avatar.size' => 'Avatar upload dung lượng không được vượt quá 100000Kb'
//        ];

//        $request->validate($rules,$messages);
        $file_name='';
        if(!empty($request->avatar)){
            $avatar = $request->avatar;
            $file_name = 'news-' . time() . '-' . $avatar->getClientOriginalName();

            $dir_uploads = public_path() . '/uploads';
//            print_r($dir_uploads);
            $avatar->move($dir_uploads,$file_name);
        }
//        xử lý lưu data vào bảng news
        $title = $request->get('title');
        $status = $request->get('status');
        //thêm dòng này
        $category_id = $request->get('category_id');
        $avatar= $file_name;

        $news_model = new News();
        $news_model->title = $title;
        //thêm dòng này
        $news_model->category_id = $category_id;
        $news_model->status = $status;
        $news_model->avatar = $avatar;
        $is_insert = $news_model->save();
        if($is_insert){
            session(['success' => 'INSERT thành công']);
        }
        else{
            session(['error' => 'INSERT thất bại']);
        }

        return redirect('/news/index');
    }

    public function index(){
        //thực hiện lấy tất cả tin tức đang có trên hệ thống
//        sử dụng join để lấy cả thông tin của bảng categories
        $news_model = new News();
        $news = $news_model->getAllPagination();
//        echo "<pre>";
//        print_r($news);
//        echo "</pre>";
//        session()->forget('abc');
        return view('news/index', [
            'news' => $news
        ]);
    }

    public function show(Request $request, $id) {
//        $id = $request
        //lấy ra đối tượng tin tức theo id bắt được
        $news_model = new News();
        $new = $news_model->getById($id);
        echo "<pre>";
        print_r($new);
        echo "</pre>";
        //hiển thị ra view, tự viết
    }

    public function edit(Request $request, $id) {
        //hiển thị ra cái form cập nhật
        //lấy ra tin tức theo id
        $news_model = new News();
        $new = $news_model->getById($id);
        //lấy ra tất cả danh mục
        $categories = Category::all();

        //truyền ra view, kèm theo biến $new và $categories vừa lấy đc
        return view('news.edit', [
            'new' => $new,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id){
//        echo"<pre>";
//        print_r($request->all());
//        echo"</pre>";
//        die;
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

        //lấy đối tượng news theo id
        $news_model = new News();
        $new = $news_model->getById($id);

        $request->validate($rules,$messages);
        //với trường hợp update, thì file_name sẽ được gán giá trị
//        mặc định là trường avatar của đối tượng new vừa lấy được
        $file_name = $new->avatar;
        //có hành động upload đè ảnh cũ
        if(!empty($request->avatar)){

            $avatar = $request->avatar;
            $file_name = 'news-' . time() . '-' . $avatar->getClientOriginalName();

            $dir_uploads = public_path() . '/uploads';
            //xóa ảnh đã tồn tại trên hệ thống
            @unlink($dir_uploads . '/' . $new->avatar);
//            print_r($dir_uploads);
            $avatar->move($dir_uploads,$file_name);
        }
//        xử lý lưu data vào bảng news
        $title = $request->get('title');
        $status = $request->get('status');
        //thêm dòng này
        $category_id = $request->get('category_id');
        $avatar= $file_name;

//        $news_model = new News();
        //khi cập nhật vào CSDL, cần sử dụng đối tượng news đã tìm được
//        để update
        $new->title = $title;
        //thêm dòng này
        $new->category_id = $category_id;
        $new->status = $status;
        $new->avatar = $avatar;
        $is_update = $new->save();
        if($is_update){
            session(['success' => 'UPDATE thành công']);
        }
        else{
            session(['error' => 'UPDATE thất bại']);
        }

        return redirect('/news/index');
    }

    public function delete(Request $request, $id) {
        //lấy ra đối tượng news theo id muốn xóa
        $news_model = new News();
        $new = $news_model->getById($id);
        $is_delete = $new->delete();

        if($is_delete){
            session(['success' => 'Xóa thành công']);
        }
        else{
            session(['error' => 'Xóa thất bại']);
        }

        return redirect('/news/index');
    }
}
