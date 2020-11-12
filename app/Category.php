<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['id', 'name', 'photo', 'slug'];

    protected $hidden = [];

    //dibaca nya kategori mempunyai banyak produk
    public function products(){
        return $this->hasMany(Product::class, 'id');
    }
}
