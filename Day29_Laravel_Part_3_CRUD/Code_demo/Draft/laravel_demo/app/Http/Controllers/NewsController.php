<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('news/index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('news/create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //validate form
    $rules = [
      'title' => ['required', 'max:3'],
      'avatar' => ['image']
    ];
    $messages = [
      'title.required' => "Title không được để trống",
      'title.max' => "Title không được vượt quá 3 ký tự",
      'avatar.image' => "Avatar phải có định dạng ảnh",
    ];
    $request->validate($rules, $messages);

    $file_name = '';
    //xử lý upload file
    if (!empty($request->avatar)) {
      //xử lý upload
      $avatar = $request->avatar;
      $file_name = 'news-' . time() . '-' . $avatar->getClientOriginalName();
      $dir_uploads = public_path('uploads');
      $avatar->move($dir_uploads, $file_name);
    }

    //lấy data
    $title = $request->get('title');
    $status = $request->get('status');
    $avatar = $file_name;
    $news_model = new News();
    $arr_params = [
      'title' => $title,
      'status' => $status,
      'avatar' => $avatar,
    ];

    $is_insert = $news_model->insert($arr_params);
    if ($is_insert) {
      session(['success' => 'Thêm data thành công']);
    } else {
      session(['error' => 'Thêm data thất bại']);
    }

    return redirect('/news');
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $news_model = new News();
    $news = $news_model->getById($id);

    return view('news/show', [
      'news' => $news
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $news_model = new News();
    $news = $news_model->getById($id);

    return view('news/edit', [
      'news' => $news
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //validate form
    $rules = [
      'title' => ['required', 'max:3'],
      'avatar' => ['image']
    ];
    $messages = [
      'title.required' => "Title không được để trống",
      'title.max' => "Title không được vượt quá 3 ký tự",
      'avatar.image' => "Avatar phải có định dạng ảnh",
    ];
    $request->validate($rules, $messages);

    $news_model = new News();
    $news = $news_model->getById($id);

    $file_name = $news->avatar;
    //xử lý upload file
    if (!empty($request->avatar)) {
      //xử lý upload
      $avatar = $request->avatar;
      $file_name = 'news-' . time() . '-' . $avatar->getClientOriginalName();
      $dir_uploads = public_path('uploads');
      @unlink($dir_uploads . '/' . $file_name);
      $avatar->move($dir_uploads, $file_name);
    }

    //lấy data
    $title = $request->get('title');
    $status = $request->get('status');
    $avatar = $file_name;

    $news->title = $title;
    $news->status = $status;
    $news->avatar = $avatar;
    $is_update = $news->update();
    if ($is_update) {
      session(['success' => 'Update data thành công']);
    } else {
      session(['error' => 'Update data thất bại']);
    }

    return redirect('/news');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $news_model = new News();
    $news = $news_model->getById($id);
    if ($news->delete()) {
      session(['success' => 'Xóa data thành công']);
    } else {
      session(['error' => 'Xóa data thất bại']);
    }
    return redirect('/news');
  }
}
