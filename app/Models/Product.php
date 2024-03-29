<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'product_name',
        'product_image',
        'product_price'
    ];

    public function user(){
        return $this -> hasOne(User::class,'id','user_id');
    }
}
