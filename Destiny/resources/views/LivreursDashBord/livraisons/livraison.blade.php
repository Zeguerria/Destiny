@extends('LivreursDashBord.livMenuDashBord')
@section('corps')
  <!--corps du modal fin -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper lebody masection pb-5">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Main content -->
    <div class="main-container">
		<div class="pd-ltr-20">

            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Aceuil</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.html">Livraisons</a></li>
                                <li class="breadcrumb-item"><a href="index.html">Livraison</a></li>
                            </ol>
                        </nav>
                    </div>

                </div>


            </div>
            <section class="content">
                <div class="container-fluid">

                  <div class="card " >
                          <div class="card-header">

                              <!-- titre Formulaire debut, a l'interrieur y a le bouton du modal et le formulaire -->


                              <div class="container-fluid">
                                  <div class="row">

                                      <div class="col  d-flex nav justify-content-end">

                                          <form class="d-flex" role="search" action="{{url('/search')}}">
                                              <input class="form-control me-2"  placeholder="Rechercher un cours" name="cherche" type="search" placeholder="Search" aria-label="search">
                                              <button class="btn " type="submit"><i class="icon-copy fi-magnifying-glass"></i></button>
                                            </form>
                                          <!------------------------->
                                          <a href="#" class="btn " id="A" data-bs-toggle="tooltip" title="Option"><i class="fa fa-ellipsis-v" style="font-size: 20px; color:#006affb4;"></i></a>
                                      </div>
                                  </div>
                              </div>
                          <!-- titre Formulaire fin -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" >
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr class="form-group">
                                            <th>N</th>
                                            <th>Nom du Produit</th>
                                            <th>Immage du Produit</th>
                                            <th>Lieu de Livraison</th>
                                            <th>Lieu de Recuperation</th>
                                            {{-- <th>Nature du colis :</th> --}}
                                            <th>Prix</th>
                                            <th>Statut </th>
                                            <th>Avis du Client </th>
                                            <th>Nom(s) & Prénom(s) Livreur</th>
                                            <th>Commentaire du Livreur</th>
                                            <th>Nom(s) & Prénom(s) Clients </th>
                                            <th>Nom(s) & Prénom(s) Destinataire</th>
                                            <th><i class="fas fa-list"> Action :</i></th>
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
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!--  Consultation-->
                                                        {{-- <button class="btn" data-bs-toggle="tooltip" title="Consulter" data-toggle="modal" data-target="#consulter{{$value->id}}"><i class="fas fa-eye" style="font-size: 20px; color:#0162fdfb;"></i></button>&ensp; --}}
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
                                                        {{-- <button class="btn" data-bs-toggle="tooltip" title="Modifier" data-toggle="modal" data-target="#modifier{{$value->id}}"><i class="fas fa-edit" style="font-size: 20px; color:#a6a806b4;"></i></button>&ensp; --}}
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
                                                        {{-- <button class="btn " data-bs-toggle="tooltip" title="Corbeille" data-toggle="modal" data-target="#corbeille{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#ff1306a6;"></i></button>&ensp; --}}
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
                                                        {{-- <button class="btn " data-bs-toggle="tooltip" title="Supprimer" data-toggle="modal" data-target="#supprimer{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#fc0303b4;"></i></button>&ensp; --}}
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
                        </div>
                  </div>


                </div>
                <!-- /.container-fluid -->
              </section>

        </div>
    </div>
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



