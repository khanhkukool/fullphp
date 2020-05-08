<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCategoryIdTableNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //viết code để thêm cột category_id vào bảng news
        //nhớ phải sử dụng phương thức tĩnh table để thay
//        đổi cấu trúc bảng đã tồn tại
        //còn nếu mà dùng phương thức tĩnh create, thì sẽ là
//        tạo mới bảng
        //phương thức after sẽ thêm cột vào sau cột chỉ định
        Schema::table('news', function(Blueprint $table) {
            $table->integer('category_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        phương thức down thường sẽ ngược lại với phương thức up
        //sẽ được chạy khi thực thi lệnh php artisan migrate:rollback
        Schema::table('news', function (Blueprint $table) {
           $table->dropColumn('category_id');
        });
    }
}
