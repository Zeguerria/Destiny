@extends('MaDashBord.menudashbord')
@section('corps')


    <div class="content-wrapper">
        <div class="content-header p-1">
            <div class="content-header pb-3">
                <div class="col-md-6 col-md-12  bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                    <div class="title">
                        <h4 class="mb-0 bread"><i class="fas fa-home msicons"></i>&ensp;Acceuil</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"  style="color: rgb(0, 191, 255);">Home</a></li>
                        </ol>
                    </nav>
                </div>

            </div>

        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="card pb p-1">
                    <div class="card-body">
                        <div class="">
                            <div class="card-box pd-10 height-100 mb-10" >
                                <div class="row align-items-center" >
                                    <div class="col-md-2">
                                        <img src="{{asset(Auth::user()->le_profil)}}" alt="{{asset(Auth::user()->le_profil)}}" class="img img-fluid" >
                                    </div>
                                    <div class="col-md-10">
                                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                                            Welcome back <div class="weight-600 font-30 text-blue">{{Auth::user()->name}} {{Auth::user()->prenom}}</div>
                                        </h4>
                                        <p class="font-18 max-width-600">Vous etes connecté en tant {{Auth::user()->profil->libelle}} , et en tant que {{Auth::user()->profil->libelle}}, vous dispossez des droits d'{{Auth::user()->role->libelle}} !<br> Alors Mr,Mdme {{Auth::user()->name}} {{Auth::user()->prenom}} ,Par quoi commencons-nous ?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                      <!-- Info boxes -->
                      <div class="row">
                        <div class="col-12 col-sm-6 col-md-2">
                            <div class="info-box mb-3">
                              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                              <div class="info-box-content">
                                <span class="info-box-text" _msttexthash="293956" _msthash="140">Clients Total</span>
                                <span class="info-box-number" _msttexthash="27846" _msthash="141">{{$clientstotal}}</span>
                              </div>

                            </div>

                        </div>
                        <div class="col-12 col-sm-6 col-md-2">
                            <div class="info-box">
                              <span class="info-box-icon bg-warning elevation-1"><i class="fab fa-teamspeak "></i></span>

                              <div class="info-box-content">
                                  <span class="info-box-text" _msttexthash="42718" _msthash="136">Livreurs Total</span>
                                  <span class="info-box-number" _msttexthash="36231" _msthash="137">{{$LivreurTotal}}</span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-2">
                          <div class="info-box">
                            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user-lock"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text" _msttexthash="42718" _msthash="136">Utilisateur Total</span>
                                <span class="info-box-number" _msttexthash="36231" _msthash="137">{{$UserTotal}}</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-2">
                          <div class="info-box mb-3">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-box-open"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text" _msttexthash="42718" _msthash="136">Livraisons Total</span>
                              <span class="info-box-number" _msttexthash="36231" _msthash="137">{{$livraisontotal}}</span>
                            </div>
                            <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>




                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-2">
                            <div class="info-box">
                              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-car"></i></span>

                              <div class="info-box-content">
                                  <span class="info-box-text" _msttexthash="42718" _msthash="136">Vehicules Total</span>
                                  <span class="info-box-number" _msttexthash="36231" _msthash="137">{{$VehiculeTotal}}</span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-2">
                            <div class="info-box mb-3">
                              <span class="info-box-icon  elevation-1"><i class="fas fa-dollar-sign"></i></span>

                              <div class="info-box-content">
                                <span class="info-box-text" _msttexthash="78663" _msthash="138">Montant Total</span>
                                <span class="info-box-number" _msttexthash="16237" _msthash="139">{{$sommes}}</span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                      </div>



                    </div><!--/. container-fluid -->
                  </section>


                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center pb-2"><span>M</span>eilleurs Livraisons</h4>
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
                                    <th>Nom(s) & Prénom(s) Client(s) </th>

                                    <th>Nom(s) & Prénom(s) estinataire(s) </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($meilleurslivraisons as $key => $value)
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
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <div class="d-flex justify-content-center pt-2">
                            {!! $meilleurslivraisons->links() !!}
                        </div>
                    </div>
                </div>

            </div>
            <div class="container-fluid">
                <div class="card pb p-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2"><ion-icon name=""></ion-icon>
                                <!-- small box -->
                                <div class="small-box ">
                                  <div class="inner">
                                    <h3>{{$livraisontotal}}</h3>
                                    <p>Livraisons en Total</p>
                                  </div>
                                  <div class="icon">
                                      <i class="ion ion-cube"></i>
                                  </div>
                                  <a href="/livraison" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                              </div>
                              <div class="col-md-2"><ion-icon name=""></ion-icon>
                                <!-- small box -->
                                <div class="small-box bg-dark">
                                  <div class="inner">
                                    <h3>{{$livraisonAttente}}</h3>
                                    <p>Livraisons en Attentes</p>
                                  </div>
                                  <div class="icon">
                                      <i class="ion ion-pause"></i>
                                  </div>
                                  <a href="/livraison" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                              </div>

                            <div class="col-md-2"><ion-icon name=""></ion-icon>
                              <!-- small box -->
                              <div class="small-box bg-info">
                                <div class="inner">
                                  <h3>{{$livraisonCours}}</h3>
                                  <p>Livraisons en Cours</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-play"></i>
                                </div>
                                <a href="/livraison" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <div class="col-md-2">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                  <div class="inner">
                                    <h3>{{$livraisonReporter}}</h3>

                                   <p>Livraisons Reportées</p> {{-- <i class="ion-cube"></i> --}}
                                  </div>
                                  <div class="icon">
                                     <i class="ion ion-arrow-return-left"></i>
                                  </div>
                                  <a href="/typesarametres" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                  <div class="inner">
                                    <h3>{{$livraisonEffectuer}}</h3>

                                    <p>Livraisons éffectuées</p>
                                  </div>
                                  <div class="icon">
                                    <i class="ion-checkmark-circled"></i>
                                  </div>
                                  <a href="/typesarametres" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                      <h3>{{$livraisonAnnuler}}</h3>

                                      <p>Livraisons Annulées</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion-alert-circled"></i>
                                    </div>
                                    <a href="/typesarametres" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                  </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-2">
                              <!-- small box -->
                              <div class="small-box bg-primary">
                                <div class="inner">
                                  <h3>{{$TypeParametretotal}}</h3>

                                  <p>Type parametres total</p>
                                </div>
                                <div class="icon">
                                   <i class="ion ion-briefcase"></i>
                                </div>
                                <a href="/typesarametres" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <div class="col-md-2">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                  <div class="inner">
                                    <h3>{{$TypeParametreCorbeille}}</h3>

                                    <p>Types Parametre Corbeille</p>
                                  </div>
                                  <div class="icon">
                                     <i class="ion ion-wrench"></i>
                                  </div>
                                  <a href="/typesarametres" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                  <div class="inner">
                                    <h3>{{$parametretotal}}</h3>

                                    <p>Parametres Total</p>
                                  </div>
                                  <div class="icon">
                                     <i class="ion ion-gear-b"></i>
                                  </div>
                                  <a href="/typesarametres" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                      <h3>{{$parametreCorbeille}}</h3>

                                      <p>Parametres en Corbeille</p>
                                    </div>
                                    <div class="icon">
                                       <i class="ion ion-settings"></i>
                                    </div>
                                    <a href="/typesarametres" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                  </div>
                            </div>
                            <div class="col-md-2">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                      <h3>{{$LivreurCorbeille}}</h3>

                                      <p>Livreurs en Corbeille</p>
                                    </div>
                                    <div class="icon">
                                       <i class="ion ion-sad"></i>
                                    </div>
                                    <a href="/typesarametres" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                  </div>
                            </div>
                            <div class="col-md-2">
                                <!-- small box -->
                                    <div class="small-box bg-secondary">
                                    <div class="inner">
                                      <h3>{{$UserCorbeille}}</h3>

                                      <p>Utilisateurs en Corbeille</p>
                                    </div>
                                    <div class="icon">
                                       <i class="ion ion-person"></i>
                                    </div>
                                    <a href="/typesarametres" class="small-box-footer">Consulter <i class="fas fa-arrow-circle-right"></i></a>
                                  </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div>
                {{-- <section class="pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="mb-3">Carousel cards title </h3>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">

                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Special title treatment</h4>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Special title treatment</h4>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Special title treatment</h4>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">

                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Special title treatment</h4>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Special title treatment</h4>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Special title treatment</h4>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">

                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Special title treatment</h4>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Special title treatment</h4>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Special title treatment</h4>
                                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
            </div>

        </section>




    </div>


@endsection










 {{-- @foreach($meilleursproduit as $key => $value)

                                                <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280" src="{{asset($value->produits->le_profil)}}">
                                                            <div class="card-body">
                                                                <h4 class="card-title pb-3">Nom du Produit{{$value->produits->nom}}</h4>
                                                                <p class="card-text ">Type de Produit : {{$value->produits->types->libelle}}</p>
                                                                <p class="card-text ">Marque de Produit : {{$value->produits->marques->libelle}}</p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach --}}
