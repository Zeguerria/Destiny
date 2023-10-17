<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Client;
use App\Models\Livreur;
use App\Models\Produit;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Livraison;
use App\Models\Parametre;
use App\Models\Destinataire;
use Illuminate\Http\Request;
use App\Models\TypeParametre;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use App\Http\Requests\StoreLivraisonRequest;
use App\Http\Requests\UpdateLivraisonRequest;


class LivraisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        //user
        $data['users']= User::where('supprimer','=',0)->orderBy('name')->get();
        //liste statut
        $data ['statuts'] = TypeParametre::where('supprimer','=',0)->where('code','=','STATUT')->orderBy('libelle')->first();
        //liste destinataire
        $data['destinataires']= Destinataire::where('supprimer','=',0)->orderBy('nom')->get();
         //liste des livreurs
         $data['livreurs'] =Livreur::where('supprimer','=',0)->orderBy('user_id')->get();
        //liste clients
        $data['clients']= Client::where('supprimer','=',0)->orderBy('nom')->get();
        $data['produits']= Produit::where('supprimer','=',0)->orderBy('nom')->get();
        //envoyer les livraisons
        $data['livraisons']= Livraison::where('supprimer','=',0)->orderBy('client_id')->paginate(10);
        //$data['users']= User::where('supprimer','=',0)->orderBy('name')->get();
        return view('MaDashBord.livraisons.livraison')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /** 'lieuLivraison',
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $lieuRecuperation = $request->lieuRecuperation;
        $lieuLivraison = $request->lieuLivraison;
        // $natureColis = $request->natureColis;
        $prix = $request->prix;
        $statut_id = $request->statut_id;
        $avisClient = $request->avisClient;
        $commentareLivreur = $request->commentareLivreur;
        $client_id = $request->client_id;
        $destinataire_id = $request->destinataire_id;
        $livreur_id = $request->livreur_id;
        $produit_id = $request->produit_id;
        try{
            Livraison::create([
                'lieuRecuperation'=>$lieuRecuperation,
                'lieuLivraison'=>$lieuLivraison,
                // 'natureColis' => $natureColis,
                'prix' => $prix,
                 'statut_id'=>$statut_id,
                'avisClient' => $avisClient,
                'commentareLivreur' => $commentareLivreur,
                'client_id'=>$client_id,
                'destinataire_id' => $destinataire_id,
                'livreur_id' => $livreur_id,
                'produit_id' => $produit_id,

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
    public function show(Livraison $livraison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livraison $livraison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        // $lieuRecuperation = $request->lieuRecuperation;
        // $natureColis = $request->natureColis;
        // $prix = $request->prix;
        // $statut_id = $request->statut_id;
        // $avisClient = $request->avisClient;
        // $commentareLivreur = $request->commentareLivreur;
        // $client_id = $request->client_id;
        // $destinataire_id = $request->destinataire_id;
        // $livreur_id = $request->livreur_id;

        $livraison=Livraison::findOrFail($request->id);

        $lieuRecuperation= isset($request->lieuRecuperation)?$request->lieuRecuperation:$livraison->lieuRecuperation;
        // $natureColis= isset($request->natureColis)?$request->natureColis:$livraison->natureColis;
        $prix= isset($request->prix)?$request->prix:$livraison->prix;
        $statut_id= isset($request->statut_id)?$request->statut_id:$livraison->statut_id;
        $avisClient= isset($request->avisClient)?$request->avisClient:$livraison->avisClient;
        $commentareLivreur= isset($request->commentareLivreur)?$request->commentareLivreur:$livraison->commentareLivreur;
        $client_id= isset($request->client_id)?$request->client_id:$livraison->client_id;
        $destinataire_id= isset($request->destinataire_id)?$request->destinataire_id:$livraison->destinataire_id;
        $livreur_id= isset($request->livreur_id)?$request->livreur_id:$livraison->livreur_id;
        $produit_id= isset($request->produit_id)?$request->produit_id:$livraison->produit_id;

        try{
            $livraison->Update([
                'lieuRecuperation'=>$lieuRecuperation,
                // 'natureColis' => $natureColis,
                'prix' => $prix,
                 'statut_id'=>$statut_id,
                'avisClient' => $avisClient,
                'commentareLivreur' => $commentareLivreur,
                'client_id'=>$client_id,
                'destinataire_id' => $destinataire_id,
                'livreur_id' => $livreur_id,
                'profil_id' => $produit_id,


            ]);
        }
        catch(Exception $e){
            die($e->getMessage());

        }
        return back();
    }
    public function corbeille(Request $request){
        $livraison=Livraison::findOrFail($request->id);
        try{
            $livraison->Update([
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
        $livraison=Livraison::findOrFail($request->id);
        try{
            $livraison->Delete();
        }
        catch(Exception $e){
            die($e->getMessage());

        }
        return back();
    }
    public function indexCorbeille()
    {
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        //user
        $data['users']= User::where('supprimer','=',0)->orderBy('name')->get();
        //liste statut
        $data ['statuts'] = TypeParametre::where('supprimer','=',0)->where('code','=','STATUT')->orderBy('libelle')->first();
        //liste destinataire
        $data['destinataires']= Destinataire::where('supprimer','=',0)->orderBy('nom')->get();
         //liste des livreurs
         $data['livreurs'] =Livreur::where('supprimer','=',0)->orderBy('user_id')->get();
        //liste clients
        $data['clients']= Client::where('supprimer','=',0)->orderBy('nom')->get();
        $data['produits']= Produit::where('supprimer','=',0)->orderBy('nom')->get();
        //
        $data['livraisons']= Livraison::where('supprimer','=',1)->orderBy('produit_id')->paginate(8);
        return view('MaDashBord.livraisons.corbeillelivraison')->with($data);


    }
    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $livraison = Livraison::where('supprimer', 0)->orderBy('produit_id')->get();
        try{
            foreach($livraison as $value){
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
        $livraison = Livraison::findOrFail($request->id);
        try{
            $livraison->update([
                'supprimer' =>0
            ]);
        }
        catch(Exception $e){}
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $livraison = Livraison::where('supprimer', 1)->orderBy('produit_id')->get();
        try{
            foreach($livraison as $value){
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
        $livraison = Livraison::where('supprimer', 1)->orderBy('produit_id')->get();
        try{
            foreach($livraison as $value){
                $value->delete();
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }







    public function indexLivreur()
    {
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        //user
        $data['users']= User::where('supprimer','=',0)->orderBy('name')->get();
        //liste statut
        $data ['statuts'] = TypeParametre::where('supprimer','=',0)->where('code','=','STATUT')->orderBy('libelle')->first();
        //liste destinataire
        $data['destinataires']= Destinataire::where('supprimer','=',0)->orderBy('nom')->get();
         //liste des livreurs
         $data['livreurs'] =Livreur::where('supprimer','=',0)->orderBy('user_id')->get();
        //liste clients
        $data['clients']= Client::where('supprimer','=',0)->orderBy('nom')->get();
        //envoyer les livraisons
        $data['livraisons']= Livraison::where('supprimer','=',0)->where('livreur_id','=',Auth::user()->id)->orderBy('client_id')->paginate(10);
        //$data['users']= User::where('supprimer','=',0)->orderBy('name')->get();
        return view('LivreursDashBord.livraisons.livraison')->with($data);
    }






    public  function alllivpdf() {

        $data['users']= User::where('supprimer','=',0)->where('id','=',Auth::user()->id)->get();
        $data['livraisons'] = Livraison::all();
        //echo $data;
        // les sommes debut
        $data['sommes']= Livraison::where('supprimer','=',0)->where('statut_id',6)->orderBy('client_id')->sum('prix');
        $data['sommesAt']= Livraison::where('supprimer','=',0)->where('statut_id',2)->orderBy('client_id')->sum('prix');
        $data['sommesEc']= Livraison::where('supprimer','=',0)->where('statut_id',3)->orderBy('client_id')->sum('prix');
        $data['sommesRe']= Livraison::where('supprimer','=',0)->where('statut_id',5)->orderBy('client_id')->sum('prix');
        $data['sommesAn']= Livraison::where('supprimer','=',0)->where('statut_id',4)->orderBy('client_id')->sum('prix');
        // les sommes fin

        // les nombres debut
        $data['livraisonReporter']= Livraison::where('supprimer','=',0)->where('statut_id',5)->orderBy('client_id')->count();
        $data['livraisonAttente']= Livraison::where('supprimer','=',0)->where('statut_id',2)->orderBy('client_id')->count();
        $data['livraisonCours']= Livraison::where('supprimer','=',0)->where('statut_id',3)->orderBy('client_id')->count();
        $data['livraisonEffectuer']= Livraison::where('supprimer','=',0)->where('statut_id',6)->orderBy('client_id')->count();
        $data['livraisonAnnuler']= Livraison::where('supprimer','=',0)->where('statut_id',4)->orderBy('client_id')->count();
        // les nombres fin



        $pdf= Pdf::loadView('MaDashBord.livraisons.alllivraison',$data);
        return $pdf->download('livraison.pdf');
    }


    public static function onelivraison($id){

        $data['livraisons'] = Livraison::findOrFail($id);
       
        //echo $data;
          
        $pdf = PDF::loadView('MaDashBord.livraisons.onelivraison',$data);
        return $pdf->download('livraison.pdf');

    }


}
