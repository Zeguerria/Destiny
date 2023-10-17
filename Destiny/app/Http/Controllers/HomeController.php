<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        //client totats
        $role=Auth::user()->role_id;

        if($role=='9'){
            //role super Admin
            return redirect()->route('Acceuil DashBord');

        }elseif($role=='7'){
            //role Admin
            return redirect()->route('Acceuil DashBord');

        }elseif($role=='10'){
            //role Operateur
            return redirect()->route('Acceuil DashBord');

        }elseif($role=='8'){
            //role Admin
            return redirect()->route('Acceuil livreurDashBord');
            // return view('Operateur.acceuildashbord');
        }elseif($role=='21'){
            return redirect()->route('Acceuil livreurDashBord');
            // return view('Operateur.acceuildashbord');
        }else{
            return redirect()->route('Acceuil livreurDashBord');
            // return view('LivreursDashBord.livAcceuilDashBord');
        }
    }
}
