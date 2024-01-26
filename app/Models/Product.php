<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;

    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'image','barcode', 'title', 'description', 'buy_price', 'sell_price', 'category_id', 'stock'
    ];
//Di atas kita menambahkan properti $fillable properti tersebut digunakan untuk mass assignment yang tujuannya untuk mengizinkan attribute agar bisa melakukan manipulasi data

    /**
     * category
     * 
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
//Di atas kita menambahkan 1 method baru dengan nama category. Dimana method tersebut berisi belongto yang mereferensikan ke dalam model category. Dan digunakan agar kita dapat memanggil data category melalui data product

    /**
     * image
     * 
     * @return Attribute
     */
    protected function image():Attribute
    {
        return Attribute::make (
            get : fn ($value) => asset('/storage/products/' . $value),
        );
    }
}