<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function news() {
        return
            $this->hasMany(News::class,
                'category_id',
                'id');
    }
}
