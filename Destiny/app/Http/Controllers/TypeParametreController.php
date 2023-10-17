<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\TypeParametre;
use App\Http\Requests\StoreTypeParametreRequest;
use App\Http\Requests\UpdateTypeParametreRequest;

class TypeParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         //afficher le tableau
        // $data ['TYPEPARAMETRE'] = TypeParametre::All();
        $data ['typeparametres'] = TypeParametre::where('supprimer','=',0)->orderBy('code')->paginate(10);
       // $data ['TYPEPARAMETRE'] = TypeParametre::where('code')->orderBy('code')->get();
        return view('MaDashBord.parametrages.typeparametre')->with($data);
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
            TypeParametre::create([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
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
    public function show(TypeParametre $typeParametre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeParametre $typeParametre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $typeParametre = TypeParametre::findOrFail($request->id);
        $code= $request->code;
        $libelle= $request->libelle;
        $description= $request->description;
        try {
           $typeParametre->update([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
            ]);
        }
        catch(Exception $e) {

        }
        return back();
    }
    public function corbeille(Request $request)
    {
        //aller faire la modification de l'element
        $typeParametre = TypeParametre::findOrFail($request->id);

        try {
           $typeParametre->update([
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
        $typeParametre = TypeParametre::findOrFail($request->id);

        try {
           $typeParametre->delete();
        }
        catch(Exception $e) {

        }
        return back();
    }


    public function indexCorbeille()
    {
        //
        $data['typeParametres']= Typeparametre::where('supprimer','=',1)->orderBy('code')->paginate(8);
        return view('MaDashBord.parametrages.corbeilletypeParametre')->with($data);


    }

    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $typeParametre = TypeParametre::where('supprimer', 0)->orderBy('code')->get();
        try{
            foreach($typeParametre as $value){
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
        $typeParametre = TypeParametre::findOrFail($request->id);
        try{
            $typeParametre->update([
                'supprimer' =>0
            ]);
        }
        catch(Exception $e){}
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $typeParametre = TypeParametre::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($typeParametre as $value){
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
        $typeParametre = TypeParametre::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($typeParametre as $value){
                $value->delete();
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }
}
