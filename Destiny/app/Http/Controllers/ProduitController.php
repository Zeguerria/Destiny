<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Produit;
use App\Models\Parametre;
use Illuminate\Http\Request;
use App\Models\TypeParametre;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data ['marques'] = TypeParametre::where('supprimer','=',0)->where('code','=','MARQUE')->orderBy('libelle')->first();
        $data ['types'] = TypeParametre::where('supprimer','=',0)->where('code','=','TYPE')->orderBy('libelle')->first();
        $data ['qualites'] = TypeParametre::where('supprimer','=',0)->where('code','=','QUALITE')->orderBy('libelle')->first();

        //
        $data['produits']= Produit::where('supprimer','=',0)->orderBy('nom')->paginate(10);
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        $data['type_parametres']= TypeParametre::where('supprimer','=',0)->orderBy('code')->get();
        return view('MaDashBord.produits.produit')->with($data);
    }
    public function indexCorbeille()
    {
        //
        $data['users']= Produit::where('supprimer','=',1)->orderBy('nom')->paginate(10);
        return view('MaDashBord.produits.corbeilleproduits')->with($data);


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
        if(isset($request->photo) and !empty($request->photo)){

            $photo = Storage::putFile('public/images/produits', $request->file('photo'));
        }else{
            $photo = "storage/images/produits/profil.jpg";
        }
        $nom = $request->nom;
        $poids = $request->poids;
        $taille = $request->taille;
        $qualite_id = $request->qualite_id;
        $marque_id = $request->marque_id;
        $typeP_id = $request->typeP_id;
        try{
            Produit::create([
                'nom'=>$nom,
                'poids' => $poids,
                'taille' => $taille,
                'qualite_id'=>$qualite_id,
                'marque_id'=>$marque_id,
                'typeP_id'=>$typeP_id,
                'photo'=>$photo,
            ]);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $produit= Produit::findOrFail($request->id);
        if(isset($request->photo) and !empty($request->photo)){
            $photo = Storage::putFile('public/images/produits', $request->file('photo'));
        }else{
            $photo = $produit->photo;
        }
        $nom= isset($request->nom)?$request->nom:$produit->nom;
        $poids= isset($request->poids)?$request->poids:$produit->poids;
        $taille= isset($request->taille)?$request->taille:$produit->taille;
        $qualite_id= isset($request->qualite_id)?$request->qualite_id:$produit->qualite_id;
        $marque_id= isset($request->marque_id)?$request->marque_id:$produit->marque_id;
        $typeP_id= isset($request->typeP_id)?$request->typeP_id:$produit->typeP_id;

        try{
            $produit->update([
                'nom'=>$nom,
                'poids' => $poids,
                'taille' => $taille,
                'qualite_id' => $qualite_id,
                'marque_id' => $marque_id,
                'photo'=>$photo,
                // 'role'=>$role,
                'typeP_id'=>$typeP_id,
            ]);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();

    }
    public function corbeille(Request $request){
        $produit= Produit::findOrFail($request->id);
        try{
            $produit->update([
                'supprimer'=>1,
            ]);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $produit= Produit::findOrFail($request->id);
        try{
            $produit->delete();
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }

    public function corbeille_all(Request $request){
        $produit = Produit::where('supprimer', 0)->orderBy('nom')->get();
        try{
            foreach($produit as $value){
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
    public function recup_corbeille(Request $request){
        $produit = Produit::findOrFail($request->id);
        try{
            $produit->update([
                'supprimer' =>0
            ]);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }
    public function recup_all(Request $request){
        $produit = Produit::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($produit as $value){
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
        $produit = Produit::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($produit as $value){
                $value->delete();
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }
    
}
