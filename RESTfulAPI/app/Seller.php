<?php

namespace App;

class Seller extends User
{
    /*
    public $transformer = SellerTransformer::class;

    protected static function boot()
       {
           parent::boot();

           static::addGlobalScope(new SellerScope);
       }
    */

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
