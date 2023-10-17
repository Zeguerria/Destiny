<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Livreur;
use App\Models\Produit;
use App\Models\Parametre;
//ajout debut
use App\Models\Destinataire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
//ajout fin

class Livraison extends Model
{
    use HasFactory;
    protected $fillable = [
        'lieuLivraison',
        'lieuRecuperation',
        // 'natureColis',
        'prix',
        'produit_id',
        'statut_id',
        'livreur_id',
        'avisClient',
        'commentareLivreur',
        'client_id',
        'destinataire_id',
        'supprimer',
        'created_at',
        'updated_at',

    ];
    //photo du client debut
     public function clients(){
        return $this->belongsTo(Client::class, 'client_id','id');
    }
    //fonction pour recuperer le client debut
    //photo du client debut
     public function destinataires(){
        return $this->belongsTo(Destinataire::class, 'destinataire_id','id');
    }
    //fonction pour recuperer le client debut



    //

    public function statuts(){
        return $this->belongsTo(Parametre::class, 'satut_id','id');
    }

    //

    public function livreurs()
    {
        return $this->belongsTo(Livreur::class,'livreur_id','id');
    }
    // public function livraison()
    // {
    //     return $this->hasMany(Livraison::class,'livreur_id','id');
    // }



    public function produits(){
        return $this->belongsTo(Produit::class, 'produit_id','id');
    }

}
