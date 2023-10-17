<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produit;
use App\Models\Livraison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parametre extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'libelle',
        'description',
        'supprimer',
        'created_at',
        'updated_at',
        'type_parametre_id'
    ];
    public function type_parametre(){
        return $this->belongsTo(TypeParametre::class, 'type_parametre_id','id');
    }
    //function select pour les statuts en cours livré attentte hasMany
    public function livraisons(){
        return $this->hasMany(Livraison::class, 'statut_id','id');
    }
    public function users(){
        return $this->hasMany(User::class, 'role_id','id');
    }

    //produits dbut
    // public function marques(){
    //     return $this->belongsTo(Produit::class, 'marque_id','id');
    // }
    public function marques(){
        return $this->hasMany(Produit::class, 'marque_id','id');
    }
    // public function qualites(){
    //     return $this->belongsTo(Produit::class, 'qualite_id','id');
    // }
    public function qualites(){
        return $this->hasMany(Produit::class, 'qualite_id','id');
    }
    // public function types(){
    //     return $this->belongsTo(Produit::class, 'typeP_id','id');
    // }
    public function types(){
        return $this->hasMany(Produit::class, 'typeP_id','id');
    }
    //produits fin
}
