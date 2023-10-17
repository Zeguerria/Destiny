<?php

namespace App\Models;

use App\Models\ProfilHabilitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Habilitation extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'libelle',
        'description',
        'supprimer',
        'created_at',
        'updated_at'
    ];
    public function profil_habilitations(){
        return $this->hasMany(ProfilHabilitation::class,'habilitation_id','id');
    }
}
