<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $guarded = [];

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }

    public function payments()
    {
        return $this->hasOne(Payment::class, 'order_number', 'order_number');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
