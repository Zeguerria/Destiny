<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = [
        'modelVehicule',
        'marqueVehicule',
        'typeVehicule',
        'numeroMatricule',
        'supprimer',
        'created_at',
        'updated_at',
        'livreur_id'
    ];

    //photo du vehicule debut
    public function getLeProfilAttribute(){
        //recupper la photo
        return Storage::url($this->attributes['photo']);
    }
    //photo du vehicule debut hasOne
    public function livreur(){
        return $this->belongsTo(Livreur::class, 'livreur_id','id');
    }
    //fonction pour recuperer le livreur debut
    //fonction pour recuperer le livreur fin
}
