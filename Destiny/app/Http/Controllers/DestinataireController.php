<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Destinataire;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDestinataireRequest;
use App\Http\Requests\UpdateDestinataireRequest;

class DestinataireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['destinataires']= Destinataire::where('supprimer','=',0)->orderBy('nom')->paginate(10);
        //$data['users']= User::where('supprimer','=',0)->orderBy('name')->get();
        return view('MaDashBord.destinataires.destinataire')->with($data);
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
        $nom = $request->nom;
        $prenom = $request->prenom;
        $contact = $request->contact;
        try{
            Destinataire::create([
                'nom'=>$nom,
                'prenom' => $prenom,
                'contact' => $contact,
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
    public function show(Destinataire $destinataire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destinataire $destinataire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
         $nom = $request->nom;
        $prenom = $request->prenom;
        $contact = $request->contact;
        $destinataire=Destinataire::findOrFail($request->id);
        try{
            $destinataire->Update([
                'nom'=>$nom,
                'prenom' => $prenom,
                'contact' => $contact,
            ]);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }
    public function corbeille(Request $request){
        $destinataire=Destinataire::findOrFail($request->id);
        try{
            $destinataire->Update([
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
        $destinataire=Destinataire::findOrFail($request->id);
        try{
            $destinataire->Delete();
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();

    }
    public function indexCorbeille()
    {
        //
        $data['destinataires']= Destinataire::where('supprimer','=',1)->orderBy('nom')->paginate(8);
        return view('MaDashBord.destinataires.corbeilledestinataire')->with($data);


    }
    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $destinataire = Destinataire::where('supprimer', 0)->orderBy('nom')->get();
        try{
            foreach($destinataire as $value){
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
        $destinataire = Destinataire::findOrFail($request->id);
        try{
            $destinataire->update([
                'supprimer' =>0
            ]);
        }
        catch(Exception $e){}
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $destinataire = Destinataire::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($destinataire as $value){
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
        $destinataire = Destinataire::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($destinataire as $value){
                $value->delete();
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }

    //barre de recherche

    public function searchNom(Request $request){
         $search_text =$_GET['cherche'];
         $destinataires=Destinataire::where('supprimer','=',0)->where('nom', 'LIKE', '%'.$search_text.'%')->paginate(10);
         return view('MaDashBord.destinataires.search',compact('destinataires'));

     }
}
