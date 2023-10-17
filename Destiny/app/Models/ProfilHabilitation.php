<?php

namespace App\Models;

use App\Models\Profil;
use App\Models\Habilitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfilHabilitation extends Model
{
    use HasFactory;
    protected $fillable = [
        'habilitation_id',
        'profil_id',
        'supprimer',
        'created_at',
        'updated_at'
    ];
    public function profil(){
        return $this->belongsTo(Profil::class, 'profil_id','id');
    }
    public function habilitation(){
        return $this->belongsTo(Habilitation::class, 'habilitation_id','id');
    }


}
