<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $table = 'news';

  public function getAll()
  {
    $news = News::whereHas('categories')->with([
      'categories' => function ($categories) {
        $categories->select(['id', 'title']);
      }])->get();
//    $news = News::has('categories')->get();


    return $news;
  }

  public function categories()
  {
    return $this->hasOne(Category::class, 'id', 'category_id');
  }

}
