<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stationnement extends Model
{
    use HasFactory;
    protected $fillable = [
        'tentree',
        'tsortie',
    ];
    public function voiture(){
        return $this->belongsTo(Voiture::class);
}
public function place(){
    return $this->belongsTo(Place::class);
}


}
