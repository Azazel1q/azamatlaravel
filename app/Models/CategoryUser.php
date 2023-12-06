<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CategoryUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title'
    ];

    // protected static function boot() {
    //     parent::boot();

    //     static::creating(function (CategoryUser $categoryUser){
    //         $categoryUser->slug = $categoryUser->slug ?? str($categoryUser->title)->slug();
    //     });
    // }

    public function user() {
        return $this->BelongsToMany(User::class);
    }
}
