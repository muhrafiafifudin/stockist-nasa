<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'category'
    ];

    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class, 'categories_id');
    }
}
