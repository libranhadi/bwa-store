<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['name' , 'users_id', 'categories_id' , 'slug', 'price' , 'description'];

    protected $hidden = [

    ];

    //banyak produk mempunyai 1 category
    public function category(){
        return $this->belongsTo(Category::class, 'categories_id' , 'id');
    }

    public function user(){
        return $this->hasOne(User::class , 'id' , 'users_id');
    }

    
    public function product_gallery(){
        return $this->hasMany(Product_Gallery::class);
    }

}
