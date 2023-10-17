<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Client;

use App\Models\Livreur;
use App\Models\Vehicule;
use App\Models\Livraison;
use App\Models\Parametre;
use Illuminate\Http\Request;
use App\Models\TypeParametre;
use App\Models\AcceuillDashbord;
use App\Http\Requests\StoreAcceuillDashbordRequest;
use App\Http\Requests\UpdateAcceuillDashbordRequest;

class AcceuillDashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        //meilleurs livraison
        $data['meilleurslivraisons']= Livraison::where('supprimer','=',0)->where('statut_id',6)->where('prix','>=',10000)->orderBy('client_id')->paginate(5);

        //livraison total
        $data['livraisontotal']= Livraison::where('supprimer','=',0)->orderBy('client_id')->count();
        //client totats
        $data['clientstotal']= Client::where('supprimer','=',0)->orderBy('client_id')->count();
        //sommes total des livraisons
        $data['sommes']= Livraison::where('supprimer','=',0)->where('statut_id',6)->orderBy('client_id')->sum('prix');
        //user total
        $data['UserTotal']= User::where('supprimer','=',0)->orderBy('name')->count();
        //livraison total
        $data['LivreurTotal']= Livreur::where('supprimer','=',0)->orderBy('domicile')->count();
        //vehicule total
        $data['VehiculeTotal']= Vehicule::where('supprimer','=',0)->orderBy('typeVehicule')->count();

        //user en corbeille
        $data['UserCorbeille']= User::where('supprimer','=',1)->orderBy('name')->count();
         //livraison en corbeille
         $data['LivreurCorbeille']= Livreur::where('supprimer','=',1)->orderBy('domicile')->count();

        //les differents statuts de livraisons debut
        $data['livraisonReporter']= Livraison::where('supprimer','=',0)->where('statut_id',5)->orderBy('client_id')->count();
        $data['livraisonAttente']= Livraison::where('supprimer','=',0)->where('statut_id',2)->orderBy('client_id')->count();
        $data['livraisonCours']= Livraison::where('supprimer','=',0)->where('statut_id',3)->orderBy('client_id')->count();
        $data['livraisonEffectuer']= Livraison::where('supprimer','=',0)->where('statut_id',6)->orderBy('client_id')->count();
        $data['livraisonAnnuler']= Livraison::where('supprimer','=',0)->where('statut_id',4)->orderBy('client_id')->count();
        //les differnts statuts de livraison fin
        $data['livraisonal']= Parametre::where('supprimer','=',0)->where('libelle',"=","Annulée")->orderBy('client_id')->count();
        //$data['livraisonat']= Livraison::where('supprimer','=',0)->where('satut_id',"=","Attente")->orderBy('client_id')->count();
        //parametre debut
        $data['parametretotal']= Parametre::where('supprimer','=',0)->count();
        $data['parametreCorbeille']= Parametre::where('supprimer','=',1)->count();
        //parametre fin
        //type parametre debut
        $data['TypeParametretotal']= TypeParametre::where('supprimer','=',0)->count();
        $data['TypeParametreCorbeille']= TypeParametre::where('supprimer','=',1)->count();




        //meilleurs produits
        $data['meilleursproduit']= Livraison::where('supprimer','=',0)->where('statut_id',6)->where('prix','>=',10000)->orderBy('client_id')->paginate(3);


        //type parametre fin

        $data['livraisonli']= Parametre::where('supprimer','=',0)->where('libelle',"=","Repporté")->orderBy('client_id')->count();
        return view('MadashBord.acceuildashbord')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function indexliv(){
        return view('LivreursDashBord.livAcceuilDashBord');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAcceuillDashbordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AcceuillDashbord $acceuillDashbord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AcceuillDashbord $acceuillDashbord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAcceuillDashbordRequest $request, AcceuillDashbord $acceuillDashbord)
    {
        //
    }

    /**zeguerria.themecloud.dev
HTTPS


     * Remove the specified resource from storage.
     */
    public function destroy(AcceuillDashbord $acceuillDashbord)
    {
        //
    }
    //  //recuper un element de la corbeille
    //  public function admin_recup_corbeille(Request $request){
    //     $cour = Cour::findOrFail($request->id);
    //     try{
    //         $cour->update([
    //             'supprimer' =>0
    //         ]);
    //     }
    //     catch(Exception $e){}
    //     return back();
    // }
    // //mettre tous les cours en corbeille
    // public function admin_corbeille_all(Request $request){
    //     $cours = Cour::where('supprimer', 0)->orderBy('code')->get();
    //     try{
    //         foreach($cours as $value){
    //             $value->update([
    //                 'supprimer' =>1
    //             ]);
    //         }
    //     }
    //     catch(Exception $e){
    //         die($e->getMessage());
    //     }
    //     return back();
    // }
    // //recuper tous les cours en corbeille
    // public function admin_recup_all(Request $request){
    //     $cours = Cour::where('supprimer', 1)->orderBy('code')->get();
    //     try{
    //         foreach($cours as $value){
    //             $value->update([
    //                 'supprimer' =>0
    //             ]);
    //         }
    //     }
    //     catch(Exception $e){
    //         die($e->getMessage());
    //     }
    //     return back();
    // }
    // //supprimer tous les cours en corbeille
    // public function admin_delete_all(Request $request){
    //     $cours = Cour::where('supprimer', 1)->orderBy('code')->get();
    //     try{
    //         foreach($cours as $value){
    //             $value->delete();
    //         }
    //     }
    //     catch(Exception $e){
    //         die($e->getMessage());
    //     }
    //     return back();
    // }
}
