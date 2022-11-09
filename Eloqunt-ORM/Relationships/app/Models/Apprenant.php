<?php

namespace App\Models;
use App\Models\Promotion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;
    protected $table='apprenants';
    protected $fillable=[
        'id',
        'Prenom',
        'Nom',
        'Email'
    ];

    //one to many
    public function OnePromotion(){
        return $this->belongsTo(Promotion::class);
    }
    //many to many

    public function promotions(){
        return $this->belongsToMany(promotion::class);
    }
}
