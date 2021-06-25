<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = [
        'codeplace',
        'etat',
    ];

    public function parking(){
        return $this->belongsTo(Parking::class);
}

public function stationnements(){
    return $this->hasMany(Stationnement::class);
    
        }
}