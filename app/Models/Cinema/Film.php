<?php

namespace App\Models\Cinema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'date_heure_diffusion',
        'ticket_price',
    ];

    // Getters
    public function getDateEtHeureAttribute()
    {
        $date = Carbon::parse($this->date_heure_diffusion)->format('d/m/Y');
        $heure = Carbon::parse($this->date_heure_diffusion)->format('H:i');
        return 'Le '.$date.' à '.$heure;
    }

    // Relationship
    public function billets()
    {
        return $this->hasMany(Billet::class);
    }
}
