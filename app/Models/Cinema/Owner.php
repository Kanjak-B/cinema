<?php

namespace App\Models\Cinema;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    public function billet()
    {
        return $this->hasMany(Billet::class);
    }
}
