<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
  protected $table = 'news';

  //sử dụng SoftDeletes để thực hiện cơ chế xóa mềm
//    khi đó sẽ phải tạo thêm trường deleted_at trong bảng
//  use SoftDeletes;

  public function getAllPagination() {
      //gọi relation đã khai báo trong phương thức with
      //cơ chế giống left join
//      $news = News::with('categories')->get();
        //gọi relation và đảm bảo các tin tức
      // mà có category_id tồn tại thì mới lấy ra
      //cơ chế giống inner join
//      $news = News::whereHas('categories')
//          ->with('categories')
//          ->get();
      //sử dụng cơ chế join có select các trường trong relation
      $news = News::whereHas('categories')
          ->with([
              'categories' => function($categories) {
                $categories->select(['id', 'title', 'status']);
//                $categories->where('status', 1);
              }
          ])
          ->paginate(2);
      return $news;
  }

    /**
     * Lấy ra đối tuowngj news theo id
     * @param $id
     * @return mixed
     */
  public function getById($id) {
      $new = News::whereHas('categories')
          ->with('categories')
//          ->where('id', $id, '=')
          ->find($id);

      return $new;
  }

    /**
     * Trả về 1 đối tượng thể hiện cho quan hệ 1 - 1 giữa bảng
     * news và categories
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
  public function categories() {
    return
        $this->hasOne(Category::class,
            'id',
            'category_id');
  }
}
