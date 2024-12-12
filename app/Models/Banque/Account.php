<?php

namespace App\Models\Banque;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $connection = 'banque';

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
