<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;

protected $fillable=[
    'association_id',
    'libelle',
    'date_limit_inscription',
    'description',
    'date_de_l_evenement',
    'image',
    'statut'
];

// public function Association() : HasMany

// {
//     return $this->HasMany(Association::class)->latest();
// }

// public function Reservation() : HasMany

// {
//     return $this->HasMany(Reservation::class)->latest();
// }

public function association()
{
    return $this->belongsTo(Association::class);
}
public function reservations()
{
    return $this->hasMany(Reservation::class);
}
}
