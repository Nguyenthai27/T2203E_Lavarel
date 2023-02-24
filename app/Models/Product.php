<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        "name",
        "price",
        "thumbnail",
        "description",
        "qty",
        "status",
        "category_id",
    ];
    public function Category(){
        return $this->belongsTo(Categories::class);
    }
    public function Order(){
        return $this->belongsToMany(Orders::class,"order_products");
    }
}
