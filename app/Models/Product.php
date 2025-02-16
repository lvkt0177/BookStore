<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';

    protected $fillable = ['title', 'author', 'price', 'category_id'];

    public $timestamps = true;

    //Khóa ngoại
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
