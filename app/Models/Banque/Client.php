<?php

namespace App\Models\Banque;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $connection = 'banque';

    public function account()
    {
        return $this->hasOne(Account::class);
    }
}
