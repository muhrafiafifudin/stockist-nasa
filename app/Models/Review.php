<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
}
