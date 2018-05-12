<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable=[
        'title', 'content', 'price', 'category_id', 'featured', 'slug'
    ];


    public function getFeaturedAttribute($featured){
       ///asset method is used to generate a link for image
        return asset($featured);
    }

    protected $dates=['deleted_at'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

   
}
