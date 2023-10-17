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
                <form method="post" action="{{route('ajouterProduit')}}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <!--corp du formulaire debut-->
                        <div>
                            <div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fas fa-map-marker-alt"></i>&ensp;Nom du Produit</label>
                                            <input type="text" class="form-control" id="" name="nom" placeholder="Entrez le nom du produit">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fas fa-map-marked-alt"></i>&ensp;Poids du Produit</label>
                                            <input type="text" class="form-control" id="" name="poids" placeholder="Entrez le poids du produit">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fas fa-layer-group"></i>&ensp;Taille du Produit :</label>
                                            <input type="text" class="form-control" id="" name="taille" placeholder="Entrez le nom du produit">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fas fa-stream"></i>&ensp;Type de Produit</label>
                                            <select class="form-control" id="" name="typeP_id">
                                                @foreach ($types->parametres as $key => $value)
                                                <option value="{{$value->id}}">{{$value->libelle}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fas fa-stream"></i>&ensp;Qualité du Produit</label>
                                            <select class="form-control" id="" name="qualite_id">
                                                @foreach ($qualites->parametres as $key => $value)
                                                <option value="{{$value->id}}">{{$value->libelle}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fas fa-stream"></i>&ensp;Marque du Produit</label>
                                            <select class="form-control" id="" name="marque_id">
                                                @foreach ($marques->parametres as $key => $value)
                                                <option value="{{$value->id}}">{{$value->libelle}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fas fa-stream"></i>&ensp;Selectionnez une photo</label>
                                            <input type="file" class="form-control"  id="" name="photo" placeholder="Entrez le nom du produit">
                                        </div>
                                    </div>
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
        <div class="col-md-6 col-md-12 bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
            <div class="title">
                <h4 class="mb-0 bread"><!--<i class="fas fa-users msicons"></i>--><img src="{{asset('mesImages/icon/shopping-bag.gif')}}" alt="" class="img img-circle" width="50" height="50">&ensp;Produits</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"  style="color: rgb(0, 191, 255);">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page" >Produits</li>
                    <li class="breadcrumb-item active" aria-current="page" >Produit</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card cardt" style="background-image: url({{asset('mesImages/theme/')}}) ; background-position: center; background-size: cover; background-repeat: no-repeat;">
                <div class="card-header">

                    <!-- titre Formulaire debut, a l'interrieur y a le bouton du modal et le formulaire -->


                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <button class="btn" data-bs-toggle="tooltip" title="Ajouter" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus" style="font-size: 20px; color:#7bff00;"></i></button>
                            </div>


                            <div class="col  d-flex nav justify-content-end">
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
              <div class="card-body" >
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr class="form-group">
                            <th>N</th>
                            <th>Nom</th>
                            <th>Poids</th>
                            <th>Taille</th>
                            <th>Type de Produit</th>
                            <th>Marque </th>
                            <th>Qualité </th>
                            <th>Image du Produit</th>
                            <th><i class="fas fa-list"> Action :</i></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($produits as $key => $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->nom}}</td>
                                <td>{{$value->poids}}</td>
                                <td>{{$value->taille}}</td>
                                <td>{{$value->types->libelle}}</td>
                                <td>{{$value->marques->libelle}}</td>
                                <td>{{$value->qualites->libelle}}</td>
                                <td>
                                    <center>
                                        <img src="{{asset($value->le_profil)}}" alt="" class="img img-circle" width="50" height="50">
                                    </center>
                                </td>
                                <td style="">
                                    <div class="btn-group">
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow " href="#" role="button" data-toggle="dropdown" aria-expanded="false">

                                                <i class="fas fa-ellipsis-h" style="font-size: 30px;"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                                                <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Consulter" data-toggle="modal" data-target="#consulter{{$value->id}}"><i class="fas fa-eye" style="font-size: 20px; color:#0162fdfb;"></i>&ensp;Consulter</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Modifier" data-toggle="modal" data-target="#modifier{{$value->id}}"><i class="fas fa-edit" style="font-size: 20px; color:#a6a806b4;"></i>&ensp;Modifier</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Supprimer" data-toggle="modal" data-target="#corbeille{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#fc0303b4;"></i>&ensp;Supprimer</a>
                                            </div>
                                        </div>


                                    </div>
                                      {{-- <button class="btn" data-bs-toggle="tooltip" title="Consulter" data-toggle="modal" data-target="#consulter{{$value->id}}"><i class="fas fa-eye" style="font-size: 20px; color:#0162fdfb;"></i></button>&ensp; --}}
                                        <div class="modal fade" id="consulter{{$value->id}}">
                                            <div class="modal-dialog  modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                    <h4 class="modal-title"><i class="fas fa-cart-arrow-down"></i> &ensp;Consulter le Produit : {{$value->nom}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form>
                                                    @csrf

                                                    <div>
                                                        <div class="div">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex "><i class="fas fa-archive"></i>&ensp;Nom du Produit</label>
                                                                                    <input type="text" class="form-control" value="{{$value->nom}}"  readonly id="" name="nom" placeholder="Entrer le nom">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex "><i class="fas fa-balance-scale"></i>&ensp;Poids </label>
                                                                                    <input type="text" class="form-control" id="" value="{{$value->poids}}"  name="poids" readonly placeholder="Entrer le Prenom">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex "><i class="fas fa-text-width"></i>&ensp;Taille</label>
                                                                                    <input type="text" class="form-control" id="" value="{{$value->taille}}"  name="taille" readonly placeholder="Entrer la marque">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex"><i class="fas fa-tag"></i>&ensp;Type du Produit</label>
                                                                                    <select class="form-control" disabled id="" name="typeP_id">
                                                                                        @foreach ($types->parametres as $key => $type)
                                                                                        <option value="{{$type->id}}" {{($type->id==$value->typeP_id)?"selected":""}}>{{$type->libelle}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex"><i class="fab fa-markdown"></i>&ensp;Marque du Produit</label>
                                                                                    <select class="form-control" disabled id="" name="marque_id">
                                                                                        @foreach ($marques->parametres as $key => $marque)
                                                                                        <option value="{{$marque->id}}" {{($marque->id==$value->marque_id)?"selected":""}}>{{$marque->libelle}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex"><i class="fab fa-meetup"></i>&ensp;Qualité du Produit</label>
                                                                                    <select class="form-control" disabled id="" name="qualite_id">
                                                                                        @foreach ($qualites->parametres as $key => $qualite)
                                                                                        <option value="{{$qualite->id}}" {{($qualite->id==$value->qualite_id)?"selected":""}}>{{$qualite->libelle}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col m-3" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                        <button type="button" class="btn bg-black" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                                    </div>
                                                </div>


                                            </div>
                                            </div>
                                        </div>
                                        <!-- Modification-->
                                        {{-- <button class="btn" data-bs-toggle="tooltip" title="Modifier" data-toggle="modal" data-target="#modifier{{$value->id}}"><i class="fas fa-edit" style="font-size: 20px; color:#a6a806b4;"></i></button>&ensp; --}}
                                        <div class="modal fade" id="modifier{{$value->id}}">
                                            <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                    <h4 class="modal-title">Modifier le Produit : {{$value->nom}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{route('modifierProduit')}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$value->id}}">

                                                        <div>
                                                            <div class="div">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex "><i class="fas fa-archive"></i>&ensp;Nom du Produit</label>
                                                                                        <input type="text" class="form-control" value="{{$value->nom}}" id="" name="nom" placeholder="Entrer le nom">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex "><i class="fas fa-balance-scale"></i>&ensp;Poids </label>
                                                                                        <input type="text" class="form-control" id="" value="{{$value->poids}}" name="poids"  placeholder="Entrer le Prenom">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex "><i class="fas fa-text-width"></i>&ensp;Taille</label>
                                                                                        <input type="text" class="form-control" id="" value="{{$value->taille}}"  name="taille"  placeholder="Entrer la marque">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex"><i class="fas fa-tag"></i>&ensp;Type du Produit</label>
                                                                                        <select class="form-control"  id="" name="typeP_id">
                                                                                            @foreach ($types->parametres as $key => $type)
                                                                                            <option value="{{$type->id}}" {{($type->id==$value->typeP_id)?"selected":""}}>{{$type->libelle}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex"><i class="fab fa-markdown"></i>&ensp;Marque du Produit</label>
                                                                                        <select class="form-control"  id="" name="marque_id">
                                                                                            @foreach ($marques->parametres as $key => $marque)
                                                                                            <option value="{{$marque->id}}" {{($marque->id==$value->marque_id)?"selected":""}}>{{$marque->libelle}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col m-3" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="d-flex"><i class="fab fa-meetup"></i>&ensp;Qualité du Produit</label>
                                                                            <select class="form-control"  id="" name="qualite_id">
                                                                                @foreach ($qualites->parametres as $key => $qualite)
                                                                                <option value="{{$qualite->id}}" {{($qualite->id==$value->qualite_id)?"selected":""}}>{{$qualite->libelle}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="d-flex"><i class="far fa-image"></i>&ensp;Selectionnez une photo</label>
                                                                            <input type="file" class="form-control"  id="" name="photo" placeholder="Entrez le nom du produit">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                                            <button type="submit" class="btn btn-warning">Modifier et Fermer</button>

                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                            </div>
                                        </div>
                                        <!-- Suppression-->
                                        {{-- <button class="btn " data-bs-toggle="tooltip" title="Corbeille" data-toggle="modal" data-target="#corbeille{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#e84b07a6;"></i></button>&ensp; --}}
                                        <div class="modal fade" id="corbeille{{$value->id}}">
                                            <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                    <h4 class="modal-title">Supprimer le Produit : {{$value->nom}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{route('corbeilleProduit')}}">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$value->id}}">
                                                            <!--corp du formulaire debut-->
                                                            <div>
                                                                <div class="div">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex "><i class="fas fa-archive"></i>&ensp;Nom du Produit</label>
                                                                                            <input type="text" class="form-control" value="{{$value->nom}}"  readonly id="" name="nom" placeholder="Entrer le nom">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex "><i class="fas fa-balance-scale"></i>&ensp;Poids </label>
                                                                                            <input type="text" class="form-control" id="" value="{{$value->poids}}"  name="poids" readonly placeholder="Entrer le Prenom">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex "><i class="fas fa-text-width"></i>&ensp;Taille</label>
                                                                                            <input type="text" class="form-control" id="" value="{{$value->taille}}"  name="taille" readonly placeholder="Entrer la marque">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex"><i class="fas fa-tag"></i>&ensp;Type du Produit</label>
                                                                                            <select class="form-control" disabled id="" name="typeP_id">
                                                                                                @foreach ($types->parametres as $key => $type)
                                                                                                <option value="{{$type->id}}" {{($type->id==$value->typeP_id)?"selected":""}}>{{$type->libelle}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex"><i class="fab fa-markdown"></i>&ensp;Marque du Produit</label>
                                                                                            <select class="form-control" disabled id="" name="marque_id">
                                                                                                @foreach ($marques->parametres as $key => $marque)
                                                                                                <option value="{{$marque->id}}" {{($marque->id==$value->marque_id)?"selected":""}}>{{$marque->libelle}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex"><i class="fab fa-meetup"></i>&ensp;Qualité du Produit</label>
                                                                                            <select class="form-control" disabled id="" name="qualite_id">
                                                                                                @foreach ($qualites->parametres as $key => $qualite)
                                                                                                <option value="{{$qualite->id}}" {{($qualite->id==$value->qualite_id)?"selected":""}}>{{$qualite->libelle}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col m-3" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                                            </div>
                                                    </form>
                                                </div>

                                            </div>
                                            </div>
                                        </div>
                                        {{-- <button class="btn " data-bs-toggle="tooltip" title="Supprimer" data-toggle="modal" data-target="#supprimer{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#fc0303b4;"></i></button>&ensp; --}}
                                        <div class="modal fade" id="supprimer{{$value->id}}">
                                            <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                    <h4 class="modal-title">Supprimer le Produit : {{$value->nom}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{route('supprimerProduit')}}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$value->id}}">
                                                            <!--corp du formulaire debut-->
                                                            <div>
                                                                <div class="div">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex "><i class="fas fa-archive"></i>&ensp;Nom du Produit</label>
                                                                                            <input type="text" class="form-control" value="{{$value->nom}}"   id="" name="nom" placeholder="Entrer le nom">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex "><i class="fas fa-balance-scale"></i>&ensp;Poids </label>
                                                                                            <input type="text" class="form-control" id="" value="{{$value->poids}}"  name="poids"  placeholder="Entrer le Prenom">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex "><i class="fas fa-text-width"></i>&ensp;Taille</label>
                                                                                            <input type="text" class="form-control" id="" value="{{$value->taille}}"  name="taille"  placeholder="Entrer la marque">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex"><i class="fas fa-tag"></i>&ensp;Type du Produit</label>
                                                                                            <select class="form-control"  id="" name="typeP_id">
                                                                                                @foreach ($types->parametres as $key => $type)
                                                                                                <option value="{{$type->id}}" {{($type->id==$value->typeP_id)?"selected":""}}>{{$type->libelle}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex"><i class="fab fa-markdown"></i>&ensp;Marque du Produit</label>
                                                                                            <select class="form-control"  id="" name="marque_id">
                                                                                                @foreach ($marques->parametres as $key => $marque)
                                                                                                <option value="{{$marque->id}}" {{($marque->id==$value->marque_id)?"selected":""}}>{{$marque->libelle}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col m-3" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="d-flex"><i class="fab fa-meetup"></i>&ensp;Qualité du Produit</label>
                                                                                <select class="form-control"  id="" name="qualite_id">
                                                                                    @foreach ($qualites->parametres as $key => $qualite)
                                                                                    <option value="{{$qualite->id}}" {{($qualite->id==$value->qualite_id)?"selected":""}}>{{$qualite->libelle}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="d-flex"><i class="far fa-image"></i>&ensp;Selectionnez une photo</label>
                                                                                <input type="file" class="form-control"  id="" name="photo" placeholder="Entrez le nom du produit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                <button type="button" class="btn bg-black" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                                                <button type="submit" class="btn bg-black">Supprimer et Fermer</button>

                                                            </div>
                                                    </form>
                                                </div>

                                            </div>
                                            </div>
                                        </div>
                                </td>

                            </tr>
                        @endforeach


                    </tbody>

                </table>
                <div class="d-flex justify-content-center pt-2">
                    {!! $produits->links() !!}
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
                                        <a href="javascript:;" data-bs-toggle="tooltip" title="Imprimer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-print" style="font-size: 20px; color:#0682dab4;"></i></a>
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

 @endsection






















 {{-- ajouter --}}

{{-- modifier --}}

{{-- supprimer  --}}

{{-- afficher  --}}

{{-- corbeille  --}}

{{-- tableu  --}}



