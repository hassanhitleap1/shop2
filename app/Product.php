<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    const IN_HOME=1;
    const OUT_HOME=0;

    public function infoCategory(){
        return $this->hasOne(Category::class, 'id','category');
    }

    public function isSaved(){
        if (Auth::user()) {
            $query =  $this->hasOne(SavedProduct::class, 'product_id', 'id');
            return $query->where('user_id', Auth::user()->id);
        }
        return $this->belongsTo(SavedProduct::class, 'product_id', 'id'); ;

    }
}


