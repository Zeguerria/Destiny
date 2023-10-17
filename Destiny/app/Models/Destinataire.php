<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinataire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'contact',
        'supprimer',
        'created_at',
        'updated_at',

    ];
     //function pour les destinataire debut
     public function livraison(){
        return $this->hasMany(Livraison::class, 'destinataire_id','id');
    }
    //function pour les destinataire fin
}
