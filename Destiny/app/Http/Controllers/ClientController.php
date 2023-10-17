<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Client;
use App\Models\Livraison;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['clients']= Client::where('supprimer','=',0)->orderBy('nom')->paginate(10);
        //$data['users']= User::where('supprimer','=',0)->orderBy('name')->get();
        return view('MaDashBord.clients.client')->with($data);
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
            Client::create([
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
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
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
        $client=Client::findOrFail($request->id);
        try{
            $client->Update([
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

        $client=Client::findOrFail($request->id);
        try{
            $client->Update([
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
        $client=Client::findOrFail($request->id);
        try{
            $client->Delete();
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }
    public function indexCorbeille()
    {
        //
        $data['clients']= Client::where('supprimer','=',1)->orderBy('nom')->paginate(8);
        return view('MaDashBord.clients.corbeilleclient')->with($data);


    }

    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $client = Client::where('supprimer', 0)->orderBy('nom')->get();
        try{
            foreach($client as $value){
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
        $client = Client::findOrFail($request->id);
        try{
            $client->update([
                'supprimer' =>0
            ]);
        }
        catch(Exception $e){}
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $client = Client::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($client as $value){
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
        $client = Client::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($client as $value){
                $value->delete();
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }

    //recherche
    public function search(Request $request){
        /*  $listelivre = ListeLivre::search('star trek')->get();
         return back(); */
         $search_text =$_GET['cherche'];
         $data['clients']=Client::where('supprimer','=',0)->where('nom', 'LIKE', '%'.$search_text.'%')->orWhere('prenom', 'LIKE', '%'.$search_text.'%')->orWhere('prenom', 'LIKE', '%'.$search_text.'%')->orWhere('prenom', 'LIKE', '%'.$search_text.'%')->orWhere('contact', 'LIKE', '%'.$search_text.'%')->paginate(10);
         return view('MaDashBord.clients.search')->with($data);

     }
     public function searchCorbeille(Request $request){
        /*  $listelivre = ListeLivre::search('star trek')->get();
         return back(); */
         $search_text =$_GET['cherche'];
         $data['clients']=Client::Where('prenom', 'LIKE', '%'.$search_text.'%')->orWhere('prenom', 'LIKE', '%'.$search_text.'%')->orWhere('nom', 'LIKE', '%'.$search_text.'%')->orWhere('prenom', 'LIKE', '%'.$search_text.'%')->orWhere('contact', 'LIKE', '%'.$search_text.'%')->paginate(10);
         return view('MaDashBord.clients.searchCorbeille')->with($data);

     }





}
