<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomparking',
        'adresse',
        'nbrplaces',
        'tarification'
    ];

    public function places(){
        return $this->hasMany(Place::class);
        
            }
            public function users(){
                return $this->hasMany(User::class);
                
                    }


}
