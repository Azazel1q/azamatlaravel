<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'price',
        'description',
        'thumb',
        'category_id',
        'user_id'
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function (Product $product){
            $product->slug = $product->slug ?? str($product->title)->slug();
        });
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function categories() {
        return $this->hasOne(Category::class);
    }
    public function orderUser() {
        return $this->hasOne(OrderUser::class);
    }
}
