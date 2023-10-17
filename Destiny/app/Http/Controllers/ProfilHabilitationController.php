<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Profil;
use App\Models\Habilitation;
use Illuminate\Http\Request;
use App\Models\ProfilHabilitation;
use App\Http\Requests\StoreProfilHabilitationRequest;
use App\Http\Requests\UpdateProfilHabilitationRequest;

class ProfilHabilitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['profilhabilitations']= ProfilHabilitation::where('supprimer','=',0)->paginate(10);
        $data['profil_habilitationP']= Profil::where('supprimer','=',0)->orderBy('code')->get();
        $data['profil_habilitationH']= Habilitation::where('supprimer','=',0)->orderBy('code')->get();
        return view('MaDashBord.gestions.profilhabilitation')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $habilitation_id= $request->habilitation_id;
        $profil_id= $request->profil_id;
        try {
            ProfilHabilitation::create([
                'habilitation_id'=>$habilitation_id,
                'profil_id'=>$profil_id,

            ]);
        }
        catch(Exception $e) {
            //echo 'Error: '.$e->getMessage;
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfilHabilitation $profilHabilitation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfilHabilitation $profilHabilitation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $habilitation_id= $request->habilitation_id;
        $profil_id= $request->profil_id;
        $profil_habilitation= Profil::findOrFail($request->id);
        try {
            $profil_habilitation->update([
                'habilitation_id'=>$habilitation_id,
                'profil_id'=>$profil_id,

            ]);
        }
        catch(Exception $e) {
            //echo 'Error: '.$e->getMessage;
        }
    }
    public function corbeille(Request $request){
        //aller faire la modification de l'element
        $profil_habilitation= Profil::findOrFail($request->id);

        try {
           $profil_habilitation->update([
                'supprimer'=>1

            ]);
        }
        catch(Exception $e) {

        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $profil_habilitation= Profil::findOrFail($request->id);
        try {
            $profil_habilitation->delete();
         }
         catch(Exception $e) {

         }
         return back();
    }


    public function indexCorbeille()
    {
        //
        $data['profil_habilitations']= Profil::where('supprimer','=',1)->orderBy('profil_id')->paginate(8);
        return view('MaDashBord.gestions.corbeilleprofil_habilitation')->with($data);


    }

    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $profil_habilitation = Profil::where('supprimer', 0)->orderBy('profil_id')->get();
        try{
            foreach($profil_habilitation as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }
     //recuper un element de la corbeille
     public function recup_corbeille(Request $request){
        $profil_habilitation = Profil::findOrFail($request->id);
        try{
            $profil_habilitation->update([
                'supprimer' =>0
            ]);
        }
        catch(Exception $e){}
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $profil_habilitation = Profil::where('supprimer', 1)->orderBy('profil_id')->get();
        try{
            foreach($profil_habilitation as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }
    //supprimer tous les elements de la corbeille
    public function delete_all(Request $request){
        $profil_habilitation = Profil::where('supprimer', 1)->orderBy('profil_id')->get();
        try{
            foreach($profil_habilitation as $value){
                $value->delete();
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }



    //probleme a regler
    public function searchNom(Request $request){
        $data['profil_habilitationP']= Profil::where('supprimer','=',0)->orderBy('code')->get();
        $data['profil_habilitationH']= Habilitation::where('supprimer','=',0)->orderBy('code')->get();
        $search_text =$_GET['cherche'];
        $profilhabilitations=ProfilHabilitation::where('supprimer','=',0)->where('habilitation_id', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.gestions.searchPH',compact('profilhabilitations'))->with($data);

    }
}
