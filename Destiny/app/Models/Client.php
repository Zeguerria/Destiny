<?php

namespace App\Models;

use App\Models\Livraison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
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
        //function pour les client debut
        public function livraison(){
            return $this->hasMany(Livraison::class, 'client_id','id');
        }
        //function pour les client fin
}
