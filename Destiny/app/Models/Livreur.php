<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

//ajout debut
use App\Models\Livraison;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
//ajout fin

class Livreur extends Model
{
    use HasFactory;
    protected $fillable = [
        'domicile',
        'numeroPermis',
        'phone',
        'supprimer',
        'created_at',
        'updated_at',
        'user_id'
    ];
    //function pour la liste user debut
    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
    //function pour user fin
    //function pour les vehicule debut belongsTo
    public function vehicule(){
        return $this->hasOne(Vehicule::class, 'livreur_id','id');
    }
    //function pour les vehicule fin


    //
    // public function livraison()
    // {
    //     return $this->hasMany(Livraison::class,'livreur_id','id');
    // }
    public function livraison()
    {
        return $this->hasMany(Livraison::class,'livreur_id','id');
    }


}
