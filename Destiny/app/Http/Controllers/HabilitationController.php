<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Habilitation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHabilitationRequest;
use App\Http\Requests\UpdateHabilitationRequest;

class HabilitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data ['habilitations'] = Habilitation::where('supprimer','=',0)->orderBy('code')->paginate(10);
         return view('MaDashBord.gestions.habilitation')->with($data);
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
        $code= $request->code;
        $libelle= $request->libelle;
        $description= $request->description;
        try {
            Habilitation::create([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
            ]);
        }
        catch(Exception $e) {
           // $e->getMessage();
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Habilitation $habilitation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habilitation $habilitation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $habilitation = Habilitation::findOrFail($request->id);
        $code= $request->code;
        $libelle= $request->libelle;
        $description= $request->description;
        try {
           $habilitation->update([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
            ]);
        }
        catch(Exception $e) {

        }
        return back();
    }
    public function corbeille(Request $request){
        //aller faire la modification de l'element
        $habilitation = Habilitation::findOrFail($request->id);

        try {
           $habilitation->update([
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
        //
        $habilitation = Habilitation::findOrFail($request->id);
        try {
            $habilitation->delete();
         }
         catch(Exception $e) {

         }
         return back();
    }


    public function indexCorbeille()
    {
        //
        $data['habilitations']= Habilitation::where('supprimer','=',1)->orderBy('code')->paginate(8);
        return view('MaDashBord.gestions.corbeillehabilitation')->with($data);


    }
    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $habilitation = Habilitation::where('supprimer', 0)->orderBy('code')->get();
        try{
            foreach($habilitation as $value){
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
        $habilitation = Habilitation::findOrFail($request->id);
        try{
            $habilitation->update([
                'supprimer' =>0
            ]);
        }
        catch(Exception $e){}
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $habilitation = Habilitation::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($habilitation as $value){
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
        $habilitation = Habilitation::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($habilitation as $value){
                $value->delete();
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }




    public function searchNom(Request $request){
        $search_text =$_GET['cherche'];
        $habilitations=Habilitation::where('supprimer','=',0)->where('libelle', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.gestions.searchH',compact('habilitations'));

    }
}
