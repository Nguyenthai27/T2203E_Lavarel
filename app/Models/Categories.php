<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = "categories";
    //protected $primaryKey = "id";//neu la id thi khong quan tam
    protected $fillable=[
      "name",
      "image",
      "status"
    ];
    public function Products(){
        return $this->hasMany(Product::class,"category_id","id");
    }

}
