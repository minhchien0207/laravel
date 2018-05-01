<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $table = 'product_images';

    protected $fillble = ['image', 'product_id'];

    public $timestamps = false;

    public function product() {
        return $this->belongTo('App\Product');
    }
}
