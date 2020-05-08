<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Hiển thị form thêm mới
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('categories/create');
    }

    public function store(Request $request)
    {
        //validate
        //ko đc để trống title, title ko đc nhỏ hơn 3 ký tự
        //để biết các rules validate trong Laravel
//        tham khảo link: https://laravel.com/docs/6.x/validation
        $rules = [
            'title' => ['required', 'min:3']
        ];
        $messages = [
            'title.required' => 'Title không được để trống',
            'title.min' => 'Title ko đc nhỏ hơn 3 ký tự'
        ];

        //gọi validate
        $request->validate($rules, $messages);
        //khi validate thất bại, Laravel tự động sinh ra 1 biến
//        toàn cục có tên là $errors

        //lưu vào bảng categories
//        sử dụng phương thức save của Model trong laravel
        $category_model = new Category();
        //mọi dữ liệu trong form đều sử dụng biến $request
//        để thao tác
        $category_model->title = $request->get('title');
        $category_model->status = $request->get('status');
        $is_insert = $category_model->save();

        if ($is_insert) {
            //sử dụng session kiểu flash để hiển thị duy nhất 1 lần
            session()->flash('success', 'Thêm danh mục thành công');
        } else {
            session()->flash('error', 'Thêm danh mục thất bại');
        }

        return redirect('/category');
    }

    public function index()
    {
        //gọi model lấy thông tin tất cả trong bảng categories
//        Trong Laravel có 2 cơ chế thao tác với DB
//        1 - Query Builder: cú pháp kiểu như query thuần
//        $categories = DB::table('categories')->get();
//        echo "<pre>";
//        print_r($categories);
//        echo "</pre>";
//        2- Eloquent ORM: cú pháp theo kiểu hướng đối tượng
        //tuy nhiên tốc độ sẽ chậm hơn so với Query Builder
//        $categories = Category::all();
        //demo cơ chế phân trang trong Laravel, truyền vào số bản ghi
//        mong muốn hiển thị trên 1 trang
        $categories = Category::paginate(1);
//        $categories = Category::where('status', 1)->paginate(1);
        return view('categories/index', [
            'categories' => $categories
        ]);
    }

    public function show(Request $request, $id) {
        $category = Category::find($id);
        echo "<pre>";
        print_r($category);
        echo "</pre>";

        //tự xử lý hiển thị kết quả ra view
        return view('categories/show', [
            'category' => $category
        ]);
    }

    public function delete(Request $request, $id) {
        //lấy ra đối tượng muốn xóa
        $category = Category::find($id);
        $is_delete = $category->delete();
        if ($is_delete) {
            session()->flash('success', "Xóa bản ghi $id thành công");
        } else {
            session()->flash('error', "Xóa bản ghi $id thất bại");
        }

        return redirect('/category');
    }
}
