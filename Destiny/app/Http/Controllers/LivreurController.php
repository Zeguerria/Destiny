<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Livreur;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Http\Requests\StoreLivreurRequest;
use App\Http\Requests\UpdateLivreurRequest;


class LivreurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data['livreurs']= Livreur::where('supprimer','=',0)->orderBy('domicile')->paginate(10);
        $data['users']= User::where('supprimer','=',0)->orderBy('name')->get();
        return view('MaDashBord.livreurs.livreur')->with($data);


    }
    public function indexCor()
    {
        //
        $data['users']= User::where('supprimer','=',0)->orderBy('name')->get();

        $data['livreurs']= Livreur::where('supprimer','=',1)->orderBy('domicile')->paginate(10);
        return view('MaDashBord.livreurs.livreurcorbeille')->with($data);


    }


    public function indexTrieDomAdc(Request $request){
        $data['livreurs']= Livreur::where('supprimer','=',0)->orderBy('domicile')->get();
        return view('MaDashBord.livreurs.search')->with($data);
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
        $livreur['livreurs']= Livreur::where('supprimer','=',0)->orderBy('domicile')->get();
        $user['users']= User::where('supprimer','=',0)->orderBy('name')->get();


        $domicile = $request->domicile;
        $numeroPermis = $request->numeroPermis;
        $phone = $request->phone;
        $user_id=$request->user_id;
        try{

            foreach($livreur as $value){

            }
            Livreur::create([
                'domicile'=>$domicile,
                'numeroPermis' => $numeroPermis,
                'phone' => $phone,
                'user_id'=>$user_id
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
    public function show(Livreur $livreur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livreur $livreur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        // $domicile = $request->domicile;
        // $numeroPermis = $request->numeroPermis;
        // $phone = $request->phone;
        // $user_id=$request->user_id;
        $livreur = Livreur::findOrFail($request->id);
        $domicile= isset($request->domicile)?$request->domicile:$livreur->domicile;
        $numeroPermis= isset($request->numeroPermis)?$request->numeroPermis:$livreur->numeroPermis;
        $phone= isset($request->phone)?$request->phone:$livreur->phone;
        $user_id= isset($request->user_id)?$request->user_id:$livreur->user_id;

        try{
            $livreur->update([
                'domicile'=>$domicile,
                'numeroPermis' => $numeroPermis,
                'phone' => $phone,
                'user_id'=>$user_id
            ]);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }


    public function corbeille(Request $request)
    {
        //
        $livreur = Livreur::findOrFail($request->id);
        try{
            $livreur->update([
                'supprimer' =>1
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
        $livreur = livreur::findOrFail($request->id);
        try{
            $livreur->delete();
        }
        catch(Exception $e){
            die($e->getMessage());

        }
        return back();
    }

    public function search(Request $request){
         $search_text =$_GET['cherche'];
         $data['users']= User::where('supprimer','=',0)->orderBy('name')->get();
         $data['livreurs']=Livreur::where('domicile', 'LIKE', '%'.$search_text.'%')->orWhere('phone', 'LIKE', '%'.$search_text.'%')->orWhere('numeroPermis', 'LIKE', '%'.$search_text.'%')->paginate(10);
         return view('MaDashBord.livreurs.search',)->with($data);

     }
     public function searchCorbeille(Request $request){
        $search_text =$_GET['cherche'];
        $data['users']= User::where('supprimer','=',0)->orderBy('name')->get();
        $data['livreurs']=Livreur::where('domicile', 'LIKE', '%'.$search_text.'%')->orWhere('phone', 'LIKE', '%'.$search_text.'%')->orWhere('numeroPermis', 'LIKE', '%'.$search_text.'%')->paginate(10);
        return view('MaDashBord.livreurs.searchCorbeille',)->with($data);

    }




     public function indexCorbeille()
    {
        //
        $data['users']= User::where('supprimer','=',1)->orderBy('name')->get();
        return view('MaDashBord.users.corbeilleuser')->with($data);


    }

      //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $livreurs = Livreur::where('supprimer', 0)->orderBy('user_id')->get();
        try{
            foreach($livreurs as $value){
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
        $livreurs = Livreur::findOrFail($request->id);
        try{
            $livreurs->Update([
                'supprimer' =>0,
            ]);
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $livreurs = Livreur::where('supprimer', 1)->orderBy('user_id')->get();
        try{
            foreach($livreurs as $value){
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
        $livreurs = Livreur::where('supprimer', 1)->orderBy('user_id')->get();
        try{
            foreach($livreurs as $value){
                $value->delete();
            }
        }
        catch(Exception $e){
            die($e->getMessage());
        }
        return back();
    }

    //mettre en pdf la liste des livreurs
    public  function alllivpdf() {

        $data['users']= User::where('supprimer','=',0)->get();
        $data['livreurs'] = Livreur::where('supprimer','=',0)->get();
        $data['users']= User::where('supprimer','=',0)->where('id','=',Auth::user()->id)->get();
        //echo $data;
 
        $pdf= Pdf::loadView('MaDashBord.livreurs.alllivreur',$data);
        return $pdf->download('liste_de_livreurs.pdf');
    }

}
