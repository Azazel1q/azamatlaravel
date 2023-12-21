<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'files',
        'client_id',
        'categories',
        'status_id',
        'price',
        'date',
    ];

    public function category() {
        return $this->hasOne(Category::class);
    }

    public function statusId() {
        return $this->hasOne(Status::class);
    }
    public function orderUser()
    {
        return $this->hasOne(OrderUser::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
