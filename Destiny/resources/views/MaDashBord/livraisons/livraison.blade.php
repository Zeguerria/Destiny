@extends('MaDashBord.menudashbord')
@section('corps')

<style>
    :root {
        --body-color: rgb(245, 250, 250);
        --nav-color: #071885;
        --side-nav: #010718;
        --text-color: #fff;
        --text-color2: #02010ec3;
        /*  */
           --c-color2:#0a244d;
           --c-colorl7:#8cabd9;
           /*  deja utilisé debut*/
           --h4-colorl1:hsl(210, 21%, 87%);
           --mesicons-colorl5:hsl(210, 21%, 87%);
           --bd-colorl2:hsl(210, 100%, 99%);
           --body-colorl3:hsl(206, 41%, 97%);
           /* deja utilisé fin  */
           --card-colorl4:hsl(24, 71%, 99%);
       /*  */
    }

    .dark {
           /*  */
           --c-color2:#0d0d0d;
           --c-colorl7:#1a1a1a;
            /* deja utilisé debut */
           --h4-colorl1:hsl(232, 96%, 49%);
           --mesicons-colorl5: rgb(21, 0, 255);
           --body-colorl3:#013D48;
           --body-color: #071885;
           --text-colorl6:rgb(21, 0, 255);

            /*deja utilisé fin  */
           --bd-colorl2:hsl(240, 5%, 96%);
           --card-colorl4: rgb(0, 191, 255);
           /*  */


           --nav-color: #18191a;
           --side-nav: #242526;
           --text-color: #ccc;
           --text-color2: red;
       }
       .lebody{
            padding:0;
            margin:0;
           background-color: var(--c-colorl2);
       }
    h4{
        padding-top: 8px;
        color: var(--h4-colorl1);
        font-size:25px;
        font-weight:bold;
        font-family: system-ui;
       }
    .msicons{
        color: var(--mesicons-colorl5);
       }
    .masection{
        padding: 0px;
        margin: 0px;
        background-color:  var(--body-colorl3);
       }
    .cardt{
        background-color:  var(--card-colorl4);
       }
    th{
        color:var(--text-colorl6);
       }








       /* From uiverse.io by @satyamchaudharydev */
        /* this button is inspired by -- whatsapp input */
        /* == type to see fully interactive and click the close buttom to remove the text  == */

        .form {
        --input-bg: #ffffff8a;
        /*  background of input */
        --padding: 1.5em;
        --rotate: 80deg;
        /*  rotation degree of input*/
        --gap: 2em;
        /*  gap of items in input */
        --icon-change-color: #15A986;
        /*  when rotating changed icon color */
        --height: 40px;
        /*  height */
        width: 300px;
        padding-inline-end: 1em;
        /*  change this for padding in the end of input */
        background: var(--input-bg);
        position: relative;
        border-radius: 4px;
        }

        .form label {
        display: flex;
        align-items: center;
        width: 100%;
        height: var(--height);
        }

        .form input {
        width: 100%;
        padding-inline-start: calc(var(--padding) + var(--gap));
        outline: none;
        background: none;
        border: 0;
        }
        /* style for both icons -- search,close */
        .form svg {
        /* display: block; */
        color: #111;
        transition: 0.3s cubic-bezier(.4,0,.2,1);
        position: absolute;
        height: 15px;
        }
        /* search icon */
        .icon {
        position: absolute;
        left: var(--padding);
        transition: 0.3s cubic-bezier(.4,0,.2,1);
        display: flex;
        justify-content: center;
        align-items: center;
        }
        /* arrow-icon*/
        .swap-off {
        transform: rotate(-80deg);
        opacity: 0;
        visibility: hidden;
        }
        /* close button */
        .close-btn {
        /* removing default bg of button */
        background: none;
        border: none;
        right: calc(var(--padding) - var(--gap));
        box-sizing: border-box;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #111;
        padding: 0.1em;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        transition: 0.3s;
        opacity: 0;
        transform: scale(0);
        visibility: hidden;
        }

        .form input:focus ~ .icon {
        transform: rotate(var(--rotate)) scale(1.3);
        }

        .form input:focus ~ .icon .swap-off {
        opacity: 1;
        transform: rotate(-80deg);
        visibility: visible;
        color: var(--icon-change-color);
        }

        .form input:focus ~ .icon .swap-on {
        opacity: 0;
        visibility: visible;
        }

        .form input:valid ~ .icon {
        transform: scale(1.3) rotate(var(--rotate))
        }

        .form input:valid ~ .icon .swap-off {
        opacity: 1;
        visibility: visible;
        color: var(--icon-change-color);
        }

        .form input:valid ~ .icon .swap-on {
        opacity: 0;
        visibility: visible;
        }

        .form input:valid ~ .close-btn {
        opacity: 1;
        visibility: visible;
        transform: scale(1);
        transition: 0s;
        }


</style>
  <!--corps du modal debut il se declanche au clique-->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <h4 class="modal-title"><span><i class="fas fa-user-plus msicons"></i></span>&ensp;Ajouter une Livraison</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('ajouterLivraison')}}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <!--corp du formulaire debut-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-map-marker-alt"></i>&ensp;Lieu Recuperation</label>
                                    <input type="text" class="form-control" id="" name="lieuRecuperation" placeholder="Entrer le lieu de Recuperation">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-map-marked-alt"></i>&ensp;Lieu Livraison</label>
                                    <input type="text" class="form-control" id="" name="lieuLivraison" placeholder="Entrer le lieu de Livraison">
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-layer-group"></i>&ensp;Nature Colis :</label>
                                    <input type="text" class="form-control" id="" name="natureColis" placeholder="Entrer la nature">
                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-layer-group"></i>&ensp;Produit :</label>
                                    <select class="form-control"  id=""  name="produit_id">
                                        @foreach ($produits as $key => $produit)
                                        <option value="{{$produit->id}}" >{{$produit->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-hand-holding-usd"></i>&ensp;Prix</label>
                                    <input type="text" class="form-control" id="" name="prix" placeholder="Entrer le prix">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-stream"></i>&ensp;Statut</label>
                                    <select class="form-control" id="" name="statut_id">
                                        @foreach ($statuts->parametres as $key => $value)
                                        <option value="{{$value->id}}">{{$value->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-comments"></i>&ensp;Avis du Client</label>
                                    <input type="phone" class="form-control" id="" name="avisClient" placeholder="Entrer l'avis du Client'">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-comment-alt"></i>&ensp;Commentare Livreur</label>
                                    <input type="text" class="form-control" id="" name="commentareLivreur" placeholder="Entrer le commentare du Livreur">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-user-tie"></i>&ensp;Choisir le client</label>
                                    <select class="form-control" id=""  name="client_id">
                                        @foreach ($clients as $key => $client)
                                        <option value="{{$client->id}}" >{{$client->nom}} {{$client->prenom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-user"></i>&ensp;Choisir le destinataire</label>
                                    <select class="form-control" id=""  name="destinataire_id">
                                        @foreach ($destinataires as $key => $destinataire)
                                        <option value="{{$destinataire->id}}" >{{$destinataire->nom}} {{$destinataire->prenom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-user-plus"></i>&ensp;Assigner un Livreur</label>
                                    <select class="form-control" id=""  name="livreur_id">
                                        {{-- @foreach ($livreurs->$users as $key => $value)

                                        <option value="{{$value->id}}" >{{$value->prenom}}</option>
                                        @endforeach --}}
                                        @foreach ($livreurs as $key => $value)

                                        <option value="{{$value->id}}" >{{$value->user->name}} {{$value->user->prenom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                        <button type="submit" class="btn btn-primary"><i class="far fa-thumbs-up"></i>&ensp;Enregistrer</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  <!--corps du modal fin -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper lebody masection pb-5">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Content Header (Page header) -->
    <div class="content-header pb-5">
        <div class="col-6-md-12 bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
            <div class="title">
                <h4 class="mb-0 bread"><!--<i class="fas fa-users msicons"></i>--><img src="{{asset('mesImages/icon/truck.gif')}}" alt="" class="img img-circle" width="50" height="50">   &ensp;Livraisons</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"  style="color: rgb(0, 191, 255);">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page" >Livraisons</li>
                    <li class="breadcrumb-item active" aria-current="page" >Livraison</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content col-6-md-12">
      <div class="container-fluid">

        <div class="card cardt" style="background-image: url({{asset('mesImages/theme/')}}) ; background-position: center; background-size: cover; background-repeat: no-repeat;">
                <div class="card-header">

                    <!-- titre Formulaire debut, a l'interrieur y a le bouton du modal et le formulaire -->


                    <div class="container-fluid">
                        <div class="row">
                           
                            <div class="col-6 md-12 ">
                                <button class="btn" data-bs-toggle="tooltip" title="Ajouter" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus" style="font-size: 20px; color:#7bff00;"></i></button>
                            </div>


                            <div class="col-6 md-12  d-flex nav justify-content-end">
                                <form class="form me-2" role="search" action="{{url('/searchClient')}}">
                                    <label for="search">
                                        <input required="" autocomplete="off" placeholder="Rechercher un Client" name="cherche" id="search" type="text">
                                        <div class="icon">
                                            <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="swap-on">
                                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linejoin="round" stroke-linecap="round"></path>
                                            </svg>
                                            <svg stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="swap-off">
                                                <path d="M10 19l-7-7m0 0l7-7m-7 7h18" stroke-linejoin="round" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                        <button type="reset" class="close-btn">
                                            <svg viewBox="0 0 20 20" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                                                <path clip-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" fill-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </label>
                                </form>

                                {{-- <form class="d-flex" role="search" action="{{url('/search')}}">
                                    <input class="form-control me-2"  placeholder="Rechercher un cours" name="cherche" type="search" placeholder="Search" aria-label="search">
                                    <button class="btn " type="submit"><i class="fas fa-search"></i></button>
                                  </form> --}}
                                <!------------------------->
                                <a href="#" class="btn " id="A" data-bs-toggle="tooltip" title="Option"><i class="fa fa-ellipsis-v" style="font-size: 20px; color:#006affb4;"></i></a>
                            </div>
                        </div>
                    </div>
                <!-- titre Formulaire fin -->
              </div>
              <!-- /.card-header -->
              <div class="card-body " >
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-responsive-md ">
                        <thead class="text-center col-6 md-12 sm-12">
                            <tr class="form-group">
                                <th scope="col">N</th>
                                <th scope="col">Nom du Produit</th>
                                <th scope="col">Immage du Produit</th>
                                <th scope="col">Lieu de Livraison</th>
                                <th scope="col">Lieu de Recuperation</th>
                                {{-- <th>Nature du colis :</th> --}}
                                <th scope="col">Prix</th>
                                <th scope="col">Statut </th>
                                <th scope="col">Avis du Client </th>
                                <th scope="col">Nom(s) & Prénom(s) Livreur</th>
                                <th scope="col">Commentaire du Livreur</th>
                                <th scope="col">Nom(s) & Prénom(s) Clients </th>
                                <th scope="col">Nom(s) & Prénom(s) Destinataire</th>
                                <th scope="col"><i class="fas fa-list"> Action :</i></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($livraisons as $key => $value)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$value->produits->nom}}</td>
                                    <td>
                                        <center>
                                            <img src="{{asset($value->produits->le_profil)}}" alt="" class="img img-circle" width="50" height="50">
                                        </center>
                                    </td>
                                    <td>{{$value->lieuLivraison}}</td>
                                    <td>{{$value->lieuRecuperation}}</td>
    
                                    {{-- <td>{{$value->natureColis}}</td> --}}
                                    <td>{{$value->prix}}</td>
    
                                    <td>{{$value->statut_id}}</td>
                                    <td>{{$value->avisClient}}</td>
                                    <td>{{$value->livreurs->user->name}} {{$value->livreurs->user->prenom}}</td>
                                    <td>{{$value->commentareLivreur}}</td>
                                    <td>{{$value->clients->nom}} {{$value->clients->prenom}}</td>
                                    <td>{{$value->destinataires->nom}} {{$value->destinataires->prenom}}</td>
                                    <div>
                                        <div class="btn-group">
                                            <td style="">
                                                <div class="dropdown">
                                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow " href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h" style="font-size: 30px;"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Consulter" data-toggle="modal" data-target="#consulter{{$value->id}}"><i class="fas fa-eye" style="font-size: 20px; color:#0162fdfb;"></i>&ensp;Consulter</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Modifier" data-toggle="modal" data-target="#modifier{{$value->id}}"><i class="fas fa-edit" style="font-size: 20px; color:#a6a806b4;"></i>&ensp;Modifier</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Supprimer" data-toggle="modal" data-target="#corbeille{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#fc0303b4;"></i>&ensp;Supprimer</a>
                                                        <a class="dropdown-item" href="/livraisonpdf/{{$value->id}}" data-bs-toggle="tooltip" title="Supprimer" ><i class="fa fa-print" style="font-size: 20px; color:#024144b4;"></i>&ensp;Facturer</a>
                                                    </div>
                                                </div>
                                                <!--  Consultation-->
                                            <div class="modal fade" id="consulter{{$value->id}}">
                                                <div class="modal-dialog  modal-lg">
                                                    <div class="modal-content"><i class=""></i>
                                                        <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                            <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Consulter la Livraison</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                @csrf
                                                                <!--corp du formulaire debut-->
    
    
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-map-marked-alt"></i>&ensp;Lieu Livraison</label>
                                                                                <input type="text" class="form-control" value="{{$value->lieuRecuperation}}" readonly id="consulter{{$value->id}}" name="lieuRecuperation" placeholder="Entrer le code">
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-layer-group"></i>&ensp;Nature Colis :</label>
                                                                                <input type="text" class="form-control" value="{{$value->natureColis}}" readonly id="consulter{{$value->id}}" name="natureColis" placeholder="Entrer la nature du Colis">
                                                                            </div>
                                                                        </div> --}}
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-layer-group"></i>&ensp;Produit :</label>
                                                                                <select class="form-control" disabled id=""  name="produit_id">
                                                                                    @foreach ($produits as $key => $produit)
                                                                                    <option value="{{$produit->id}}"{{($produit->id==$value->produit_id)?"selected":""}} >{{$produit->nom}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
    
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-hand-holding-usd"></i>&ensp;Prix</label>
                                                                                <input type="number" class="form-control" value="{{$value->prix}}" readonly id="consulter{{$value->id}}" name="prix" placeholder="Entrer le prix">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-stream"></i>&ensp;Statut</label>
                                                                                <select class="form-control" disabled id="" name="statut_id">
                                                                                    @foreach ($statuts->parametres as $key => $statut)
                                                                                    <option value="{{$statut->id}}" {{($statut->id==$statut->satut_id)?"selected":""}} >{{$statut->libelle}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-comments"></i>&ensp;Avis du Client</label>
                                                                                <input type="text" class="form-control" value="{{$value->avisClient}}" readonly id="consulter{{$value->id}}" name="avisClient" placeholder="Entrer le avisClient">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-comment-alt"></i>&ensp;Commentare Livreur</label>
                                                                                <input type="text" class="form-control" value="{{$value->commentareLivreur}}" readonly id="consulter{{$value->id}}" name="commentareLivreur" placeholder="Entrer le commentare du Livreur">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-user-tie"></i>&ensp;Client choisi</label>
                                                                                <select class="form-control" disabled id=""  name="client_id">
                                                                                    @foreach ($clients as $key => $client)
                                                                                        <option value="{{$client->id}}"{{($client->id==$value->client_id)?"selected":""}} >{{$client->nom}} {{$client->prenom}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-user"></i>&ensp;Destinataire Choisi</label>
                                                                                <select class="form-control" disabled id=""  name="destinataire_id">
                                                                                    @foreach ($destinataires as $key => $destinataire)
                                                                                        <option value="{{$destinataire->id}}"{{($destinataire->id==$value->destinataire_id)?"selected":""}} >{{$destinataire->nom}} {{$destinataire->prenom}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-user-plus"></i>&ensp;Assigner un Livreur</label>
                                                                                {{-- <select class="form-control" id=""  disabled name="livreur_id"> --}}
    
                                                                                    {{-- @foreach ($livreurs->$users as $key => $value)
    
                                                                                    <option value="{{$value->id}}" >{{$value->prenom}}</option>
                                                                                    @endforeach --}}
                                                                                    {{-- @foreach ($livreurs as $key => $value) --}}
    
                                                                                    {{-- <option value="{{$value->id}}">{{$value->user_id}}</option> --}}
                                                                                    {{-- @endforeach --}}
                                                                                {{-- </select> --}}
                                                                                <select class="form-control" disabled id=""  name="livreur_id">
                                                                                    {{-- @foreach ($livreurs->$users as $key => $value)
    
                                                                                    <option value="{{$value->id}}" >{{$value->prenom}}</option>
                                                                                    @endforeach --}}
                                                                                    @foreach ($livreurs as $key => $livreur)
    
                                                                                    <option value="{{$livreur->id}}" {{($livreur->id==$value->livreur_id)?"selected":""}} >{{$livreur->user->name}} {{$livreur->user->prenom}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-map-marker-alt"></i>&ensp;Lieu Recuperation</label>
                                                                                <input type="text" class="form-control" readonly value="{{$value->lieuRecuperation}}" id="" name="lieuRecuperation" placeholder="Entrer le lieu de Recuperation">
                                                                            </div>
                                                                        </div>
    
                                                                    </div>
    
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modification-->
                                            <div class="modal fade" id="modifier{{$value->id}}">
                                                <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                        <h4 class="modal-title"><span><i class="fas fa-user-plus msicons"></i></span>&ensp;Modifier  la livraison </h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route('modifierLivraison')}}">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$value->id}}">
                                                                <!--corp du formulaire debut-->
                                                                <div>
                                                                    <!--corp du formulaire debut-->
                                                                    <div class="row">
                                                                        <div class="col-md-6">
    
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-map-marked-alt"></i>&ensp;Lieu Livraison</label>
                                                                                <input type="text" class="form-control" value="{{$value->lieuLivraison}}"  id="consulter{{$value->id}}" name="lieuLivraison" placeholder="Entrer le code">
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-layer-group"></i>&ensp;Nature Colis :</label>
                                                                                <input type="text" class="form-control" value="{{$value->natureColis}}"  id="consulter{{$value->id}}" name="natureColis" placeholder="Entrer la nature du Colis">
                                                                            </div>
                                                                        </div> --}}
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-layer-group"></i>&ensp;Produit :</label>
                                                                                <select class="form-control"  id=""  name="produit_id">
                                                                                    @foreach ($produits as $key => $produit)
                                                                                    <option value="{{$produit->id}}"{{($produit->id==$value->produit_id)?"selected":""}} >{{$produit->nom}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
    
    
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-hand-holding-usd"></i>&ensp;Prix</label>
                                                                                <input type="number" class="form-control" value="{{$value->prix}}"  id="consulter{{$value->id}}" name="prix" placeholder="Entrer le prix">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-stream"></i>&ensp;Statut</label>
                                                                                <select class="form-control"  id="" name="statut_id">
                                                                                    @foreach ($statuts->parametres as $key => $statut)
                                                                                    <option value="{{$statut->id}}" {{($statut->id==$value->satut_id)?"selected":""}} >{{$statut->libelle}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-comments"></i>&ensp;Avis du Client</label>
                                                                                <input type="text" class="form-control" value="{{$value->avisClient}}"  id="consulter{{$value->id}}" name="avisClient" placeholder="Entrer le avisClient">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-comment-alt"></i>&ensp;Commentare Livreur</label>
                                                                                <input type="text" class="form-control" value="{{$value->commentareLivreur}}"  id="consulter{{$value->id}}" name="commentareLivreur" placeholder="Entrer le commentare du Livreur">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-user-tie"></i>&ensp;Choisir le client</label>
                                                                                <select class="form-control"  id=""  name="client_id">
                                                                                    @foreach ($clients as $key => $client)
                                                                                    <option value="{{$client->id}}"{{($client->id==$value->client_id)?"selected":""}} >{{$client->nom}} {{$client->prenom}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-user"></i>&ensp;Choisir le destinataire</label>
                                                                                <select class="form-control"  id=""  name="destinataire_id">
                                                                                    @foreach ($destinataires as $key => $destinataire)
                                                                                    <option value="{{$destinataire->id}}"{{($destinataire->id==$value->destinataire_id)?"selected":""}} >{{$destinataire->nom}} {{$destinataire->prenom}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-user-plus"></i>&ensp;Assigner un Livreur</label>
                                                                                {{-- <select class="form-control" id=""  name="livreur_id"> --}}
                                                                                    {{-- @foreach ($livreurs->$users as $key => $value)
    
                                                                                    <option value="{{$value->id}}" >{{$value->prenom}}</option>
                                                                                    @endforeach --}}
                                                                                    {{-- @foreach ($livreurs as $key => $value)
    
                                                                                    <option value="{{$value->id}}">{{$value->user_id}}</option>
                                                                                    @endforeach
                                                                                </select> --}}
    
                                                                                <select class="form-control"  id=""  name="livreur_id">
                                                                                    {{-- @foreach ($livreurs->$users as $key => $value)
    
                                                                                    <option value="{{$value->id}}" >{{$value->prenom}}</option>
                                                                                    @endforeach --}}
                                                                                    @foreach ($livreurs as $key => $livreur)
    
                                                                                    <option value="{{$livreur->id}}" {{($livreur->id==$value->livreur_id)?"selected":""}} >{{$livreur->user->name}} {{$livreur->user->prenom}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-map-marker-alt"></i>&ensp;Lieu Recuperation</label>
                                                                                <input type="text" class="form-control" value="{{$value->lieuRecuperation}}" id="" name="lieuRecuperation" placeholder="Entrer le lieu de Recuperation">
                                                                            </div>
                                                                        </div>
    
                                                                    </div>
    
    
                                                                </div>
                                                                <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                                                    <button type="submit" class="btn btn-primary"><i class="far fa-thumbs-up"></i>&ensp;Modifier et Fermer</button>
    
                                                                </div>
                                                        </form>
                                                    </div>
    
                                                </div>
                                                </div>
                                            </div>
                                            <!-- Corbeille-->
                                            <div class="modal fade" id="corbeille{{$value->id}}">
                                                <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                        <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Supprimer l'utilisateur : {{$value->name}} {{$value->prenom}}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route('corbeilleLivraison')}}">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$value->id}}">
                                                                <!--corp du formulaire debut-->
    
                                                                <div class="">
                                                                    <div class="row">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
    
                                                                                <div class="form-group">
                                                                                    <label><i class="fas fa-map-marked-alt"></i>&ensp;Lieu Livraison</label>
                                                                                    <input type="text" class="form-control" value="{{$value->lieuLivraison}}" readonly id="consulter{{$value->id}}" name="lieuLivraison" placeholder="Entrer le code">
                                                                                </div>
                                                                            </div>
                                                                            {{-- <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label><i class="fas fa-layer-group"></i>&ensp;Nature Colis :</label>
                                                                                    <input type="text" class="form-control" value="{{$value->natureColis}}" readonly id="consulter{{$value->id}}" name="natureColis" placeholder="Entrer la nature du Colis">
                                                                                </div>
                                                                            </div> --}}
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label><i class="fas fa-layer-group"></i>&ensp;Produit :</label>
                                                                                    <select class="form-control" disabled id=""  name="produit_id">
                                                                                        @foreach ($produits as $key => $produit)
                                                                                        <option value="{{$produit->id}}"{{($produit->id==$value->produit_id)?"selected":""}} >{{$produit->nom}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label><i class="fas fa-hand-holding-usd"></i>&ensp;Prix</label>
                                                                                    <input type="number" class="form-control" value="{{$value->prix}}" readonly id="consulter{{$value->id}}" name="prix" placeholder="Entrer le prix">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label><i class="fas fa-stream"></i>&ensp;Statut</label>
                                                                                    <select class="form-control" disabled id="" name="statut_id">
                                                                                        @foreach ($statuts->parametres as $key => $statut)
                                                                                        <option value="{{$statut->id}}" {{($statut->id==$value->satut_id)?"selected":""}} >{{$statut->libelle}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label><i class="fas fa-comments"></i>&ensp;Avis du Client</label>
                                                                                    <input type="text" class="form-control" value="{{$value->avisClient}}" readonly id="consulter{{$value->id}}" name="avisClient" placeholder="Entrer le avisClient">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label><i class="fas fa-comment-alt"></i>&ensp;Commentare Livreur</label>
                                                                                    <input type="text" class="form-control" value="{{$value->commentareLivreur}}" readonly id="consulter{{$value->id}}" name="commentareLivreur" placeholder="Entrer le commentare du Livreur">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label><i class="fas fa-user-tie"></i>&ensp;Client Choisi</label>
                                                                                    <select class="form-control" disabled id=""  name="client_id">
                                                                                        @foreach ($clients as $key => $client)
                                                                                        <option value="{{$client->id}}"{{($client->id==$value->client_id)?"selected":""}} >{{$client->nom}} {{$client->prenom}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label><i class="fas fa-user"></i>&ensp;Destinataire Choisi</label>
                                                                                    <select class="form-control" disabled id=""  name="destinataire_id">
                                                                                        @foreach ($destinataires as $key => $destinataire)
                                                                                        <option value="{{$destinataire->id}}"{{($destinataire->id==$value->destinataire_id)?"selected":""}} >{{$destinataire->nom}} {{$destinataire->prenom}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                              <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-user-plus"></i>&ensp;Assigner un Livreur</label>
                                                                                <select class="form-control" disabled id=""  name="livreur_id">
                                                                                    {{-- @foreach ($livreurs->$users as $key => $value)
    
                                                                                    <option value="{{$value->id}}" >{{$value->prenom}}</option>
                                                                                    @endforeach --}}
                                                                                    @foreach ($livreurs as $key => $livreur)
    
                                                                                    <option value="{{$livreur->id}}" {{($livreur->id==$value->livreur_id)?"selected":""}} >{{$livreur->user->name}} {{$livreur->user->prenom}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-map-marker-alt"></i>&ensp;Lieu Recuperation</label>
                                                                                <input type="text" class="form-control" readonly value="{{$value->lieuRecuperation}}" id="" name="lieuRecuperation" placeholder="Entrer le lieu de Recuperation">
                                                                            </div>
                                                                        </div>
    
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                                                        <button type="submit" class="btn btn-primary"><i class="fas fa-trash"></i>&ensp; Supprimer et Fermer</button>
                                                                    </div>
                                                                </div>
                                                        </form>
                                                    </div>
    
    
                                                </div>
                                                </div>
                                            </div>
                                            <!----Supprimer----->
                                            <div class="modal fade" id="supprimer{{$value->id}}">
                                                <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                        <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Supper la livraison</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{route('supprimerLivraison')}}">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$value->id}}">
                                                                <!--corp du formulaire debut-->
                                                                <div class="">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
    
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-map-marked-alt"></i>&ensp;Lieu Livraison</label>
                                                                                <input type="text" class="form-control" value="{{$value->lieuLivraison}}" readonly id="consulter{{$value->id}}" name="lieuLivraison" placeholder="Entrer le code">
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-layer-group"></i>&ensp;Nature Colis :</label>
                                                                                <input type="text" class="form-control" value="{{$value->natureColis}}" readonly id="consulter{{$value->id}}" name="natureColis" placeholder="Entrer la nature du Colis">
                                                                            </div>
                                                                        </div> --}}
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-hand-holding-usd"></i>&ensp;Prix</label>
                                                                                <input type="number" class="form-control" value="{{$value->prix}}" readonly id="consulter{{$value->id}}" name="prix" placeholder="Entrer le prix">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-stream"></i>&ensp;Statut</label>
                                                                                <select class="form-control" disabled id="" name="statut_id">
                                                                                    @foreach ($statuts->parametres as $key => $value)
                                                                                    <option value="{{$value->id}}" {{($value->id==$value->satut_id)?"selected":""}} >{{$value->libelle}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-comments"></i>&ensp;Avis du Client</label>
                                                                                <input type="text" class="form-control" value="{{$value->avisClient}}" readonly id="consulter{{$value->id}}" name="avisClient" placeholder="Entrer le avisClient">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-comment-alt"></i>&ensp;Commentare Livreur</label>
                                                                                <input type="text" class="form-control" value="{{$value->commentareLivreur}}" readonly id="consulter{{$value->id}}" name="commentareLivreur" placeholder="Entrer le commentare du Livreur">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-user-tie"></i>&ensp;Client Choisi</label>
                                                                                <select class="form-control" disabled id=""  name="client_id">
                                                                                    @foreach ($clients as $key => $client)
                                                                                    <option value="{{$client->id}}"{{($client->id==$value->client_id)?"selected":""}} >{{$client->nom}} {{$client->prenom}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-user"></i>&ensp;Destinataire Choisi</label>
                                                                                <select class="form-control" disabled id=""  name="destinataire_id">
                                                                                    @foreach ($destinataires as $key => $destinataire)
                                                                                    <option value="{{$destinataire->id}}"{{($destinataire->id==$value->destinataire_id)?"selected":""}} >{{$destinataire->nom}} {{$destinataire->prenom}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-user-plus"></i>&ensp;Assigner un Livreur</label>
                                                                                <select class="form-control" id=""  disabled name="livreur_id">
                                                                                    {{-- @foreach ($livreurs->$users as $key => $value)
    
                                                                                    <option value="{{$value->id}}" >{{$value->prenom}}</option>
                                                                                    @endforeach --}}
                                                                                    @foreach ($livreurs as $key => $value)
    
                                                                                    <option value="{{$value->id}}">{{$value->user_id}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label><i class="fas fa-map-marker-alt"></i>&ensp;Lieu Recuperation</label>
                                                                                <input type="text" class="form-control" readonly value="{{$value->lieuRecuperation}}" id="" name="lieuRecuperation" placeholder="Entrer le lieu de Recuperation">
                                                                            </div>
                                                                        </div>
    
                                                                    </div>
    
    
                                                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                                                        <button type="submit" class="btn btn-primary">Supprimer et Fermer</button>
                                                                    </div>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </td>
                                            
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
    
    
                        </tbody>
    
                    </table>
                    <div class="d-flex justify-content-center pt-2">
                        {!! $livraisons->links() !!}
                    </div>

                </div>
               
                <div class="sumenu card-footer" id="">
                    <hr>
                    <div class="code-box">
                        <div class="clearfix p-1">
                            <div class="container-fluid pt-2">
                                <div class="row">
                                    <div class="col" >
                                        <a href="corbeilleAll" data-bs-toggle="tooltip" title="Tout Supprimer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-trash" style="font-size: 20px; color:#ff0000;"></i></a>&emsp;
                                        <a href="javascript:;" data-bs-toggle="tooltip" title="Cards" class="btn   btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-id-card" style="font-size: 20px; color:#56ff02b4;"></i></a>&emsp;
                                        <a href="livraisonspdf" data-bs-toggle="tooltip" title="Imprimer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-print" style="font-size: 20px; color:#0682dab4;"></i></a>
                                    </div>
                                    <div class="col d-flex nav justify-content-end">
                                        <a href="#basic-table" data-bs-toggle="tooltip" title="fermer" id="T" class="btn btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash" style="font-size: 20px; color:#006affb4;"></i></a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
             <!-- /.card-body -->
        </div>


      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script>
        $('.sumenu').fadeToggle()
    $('#A').on('click', function (){
        $(".sumenu").fadeToggle();
    });
    $('#T').on('click', function (){
        $(".sumenu").fadeToggle();
    });

    </script>

  </div>
  <!-- /.content-wrapper -->

 @endsection






















 {{-- ajouter --}}

{{-- modifier --}}

{{-- supprimer  --}}

{{-- afficher  --}}

{{-- corbeille  --}}

{{-- tableu  --}}


