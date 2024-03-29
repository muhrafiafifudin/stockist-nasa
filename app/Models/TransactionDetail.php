<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_details';

    protected $guarded = [];

    public function products()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }

    public function transactions()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id');
    }
}
