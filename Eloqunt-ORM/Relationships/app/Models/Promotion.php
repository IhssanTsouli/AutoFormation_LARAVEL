<?php

namespace App\Models;
use App\Models\Apprenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    
    protected $table='promotions';

    //one to one 

    public function oneApprenant(){
        return $this->hasOne(Apprenant::class);
    }

    //one to many 
    public function hasManyApprenant(){
        return $this->hasMany(Apprenant::class);
    }

    // many to many
    public function apprenant(){
    return $this->belongsToMany(apprenant::class);
    }


}
