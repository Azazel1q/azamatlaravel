<?php

namespace App\Models;

use Illuminate\Contracts\Support\CanBeEscapedWhenCastToString;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function user(): belongsTo {
        return $this->belongsTo(User::class);
    }
    // public function categories(): hasOne {
    //     return $this->hasOne(Category::class);
    // }
}
