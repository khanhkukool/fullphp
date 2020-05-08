<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $table = 'news';

  public function insert($arr_params)
  {

    $this->title = $arr_params['title'];
    $this->status = $arr_params['status'];
    $this->avatar = $arr_params['avatar'];

    return $this->save();
  }


  public function getById($id) {
    $news = News::find($id);

    return $news;
  }
}
