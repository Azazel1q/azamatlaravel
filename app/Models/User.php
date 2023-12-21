<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'description',
        'thumb',
        'category_user'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function product() {
        return $this->hasMany(Product::class);
    }

    public function categoryUser() {
        return $this->hasMany(CategoryUser::class);
    }

    public function orderUser()
    {
        return $this->hasOne(OrderUser::class);
    }

    public function order()
    {
        return $this->hasOneThrough(Order::class, OrderUser::class);
    }
}
