<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'poids',
        'taille',
        'supprimer',
        'photo',
        'marque_id',
        'qualite_id',
        'typeP_id',
        'created_at',
        'updated_at'
    ];
    //photo du produit debut
    public function getLeProfilAttribute(){
        //recupper la photo
        return Storage::url($this->attributes['photo']);
    }

    //recupper la qualite du produit debut
    // public function qualite(){
    //     return $this->hasMany(Parametre::class, 'qualite_id','id');
    // }

    public function qualites(){
        return $this->belongsTo(Parametre::class, 'qualite_id','id');
    }
    //recupper la qualite du produit fin
    //recupper la marque du produit debut
    // public function marque(){
    //     return $this->hasMany(Parametre::class, 'marque_id','id');
    // }
    public function marques(){
        return $this->belongsTo(Parametre::class, 'marque_id','id');
    }
    //recupper la marque du produit fin
     //recupper le typeP du produit debut
    //  public function types(){
    //     return $this->hasMany(Parametre::class, 'typeP_id','id');
    // }
    public function types(){
        return $this->belongsTo(Parametre::class, 'typeP_id','id');
    }
    //recupper le typeP du produit fin

    public function livraison(){
        return $this->hasMany(Livraison::class, 'produit_id','id');
    }
}
