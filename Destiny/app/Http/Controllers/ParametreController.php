<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Parametre;
use Illuminate\Http\Request;
use App\Models\TypeParametre;
use App\Http\Requests\StoreParametreRequest;
use App\Http\Requests\UpdateParametreRequest;

class ParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->paginate(10);
        $data['type_parametres']= TypeParametre::where('supprimer','=',0)->orderBy('code')->get();
        return view('MaDashBord.parametrages.parametre')->with($data);
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
        $code = $request->code;
        $libelle = $request->libelle;
        $description = $request->description;
        $type_parametre_id=$request->type_parametre_id;
        try{
            Parametre::create([
                'code'=>$code,
                'libelle' => $libelle,
                'description' => $description,
                'type_parametre_id'=>$type_parametre_id
            ]);
        }
        catch(Exception $e){}
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Parametre $parametre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parametre $parametre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $code = $request->code;
        $libelle = $request->libelle;
        $description = $request->description;
        $type_parametre_id=$request->type_parametre_id;
        $parametre = Parametre::findOrFail($request->id);
        try{
            $parametre->update([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description,
                'type_parametre_id'=>$type_parametre_id
            ]);
        }
        catch(Exception $e){}
        return back();
    }
    public function corbeille(Request $request){
        $parametre = Parametre::findOrFail($request->id);
        try{
            $parametre->update([
                'supprimer' =>1
            ]);
        }
        catch(Exception $e){}
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $parametre = Parametre::findOrFail($request->id);
        try{
            $parametre->delete();
        }
        catch(Exception $e){}
        return back();
    }


    public function indexCorbeille()
    {
        //
        $data['parametres']= Parametre::where('supprimer','=',1)->orderBy('code')->paginate(8);
        return view('MaDashBord.parametrages.corbeilleparametre')->with($data);


    }

    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $parametre = Parametre::where('supprimer', 0)->orderBy('code')->get();
        try{
            foreach($parametre as $value){
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
        $parametre = Parametre::findOrFail($request->id);
        try{
            $parametre->update([
                'supprimer' =>0
            ]);
        }
        catch(Exception $e){}
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $parametre = Parametre::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($parametre as $value){
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
        $parametre = Parametre::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($parametre as $value){
                $value->delete();
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }
}
