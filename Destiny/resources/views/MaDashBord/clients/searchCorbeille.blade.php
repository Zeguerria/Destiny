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
                <h4 class="modal-title"><span><i class="fas fa-user-plus msicons"></i></span>&ensp;Ajouter un Utilisateur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('ajouterUser')}}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <!--corp du formulaire debut-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-signature"></i>&ensp;Nom </label>
                                    <input type="text" class="form-control" id="" name="name" placeholder="Entrer le nom">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label><i class="fas fa-user-edit"></i>&ensp;Prenom </label>
                                    <input type="text" class="form-control" id="" name="prenom" placeholder="Entrer le Prenom">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-user-ninja"></i>&ensp;Pseudo</label>
                                    <input type="text" class="form-control" id="" name="pseudo" placeholder="Entrer la marque">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-paper-plane"></i>&ensp;Email</label>
                                    <input type="email" class="form-control" id="" name="email" placeholder="Entrer l'email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="fas fa-user-shield"></i>&ensp;Password</label>
                                    <input type="password" class="form-control" id="" name="password" placeholder="Entrer le password">

                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label><i class="fas fa-camera-retro"></i>&ensp;Photo</label>
                                    <input type="file" class="form-control" id="" name="photo" placeholder="Entrer la photo">
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
                <h4 class="mb-0 bread"><!--<i class="fas fa-trash msicons"></i>--><img src="{{asset('mesImages/icon/bin-file.gif')}}" alt="" class="img img-circle" width="50" height="50">&ensp;Corbeille</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"  style="color: rgb(0, 191, 255);">Corbeilles</a></li>
                    <li class="breadcrumb-item active" aria-current="page" >Clients</li>
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
                            {{-- <div class="col">
                                <button class="btn" data-bs-toggle="tooltip" title="Ajouter" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus" style="font-size: 20px; color:#7bff00;"></i></button>
                            </div> --}}


                            <div class="col  d-flex nav justify-content-end">

                                <form class="form me-2" role="search" action="{{url('/searchClientCorbeille')}}">
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
                                <!------------------------->
                                <a href="#" class="btn " id="A" data-bs-toggle="tooltip" title="Option"><i class="fa fa-ellipsis-v" style="font-size: 20px; color:#006affb4;"></i></a>
                            </div>
                        </div>
                    </div>
                <!-- titre Formulaire fin -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                <table id="example1" class="table table-bordered table-striped table-responsive-md">
                    <thead class="text-center text-center col-md-6 col-md-sm-12">
                        <tr>
                            <th scope="col">N</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom :</th>
                            <th scope="col">Num Telephone </th>
                            <th scope="col"><i class="fas fa-list"> Action :</i></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($clients as $key => $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->nom}}</td>
                                <td>{{$value->prenom}}</td>
                                <td>{{$value->contact}}</td>
                                <div>
                                    <div class="btn-group">
                                        <td style="">
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow " href="#" role="button" data-toggle="dropdown" aria-expanded="false">

                                                    <i class="fas fa-ellipsis-h" style="font-size: 30px;"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Consulter" data-toggle="modal" data-target="#consulter{{$value->id}}"><i class="fas fa-eye" style="font-size: 20px; color:#0162fdfb;"></i>&ensp;Consulter</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Restorer" data-toggle="modal" data-target="#corbeille{{$value->id}}"><i class="fas fa-sync" style="font-size: 20px; color:#a6a806b4;"></i>&ensp;Restorer</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Supprimer" data-toggle="modal" data-target="#supprimer{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#fc0303b4;"></i>&ensp;Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                        <!--  Consultation-->
                                       
                                        <div class="modal fade" id="consulter{{$value->id}}">
                                            <div class="modal-dialog  modal-lg">
                                                <div class="modal-content"><i class=""></i>
                                                    <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                        <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Consulter le Client : {{$value->nom}} {{$value->prenom}}</h4>

                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            @csrf
                                                            <!--corp du formulaire debut-->


                                                            <div class="row">
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label class="d-flex" for="consulter{{$value->id}}"><i class="fas fa-signature"></i>&ensp;Nom :</label>
                                                                        <input type="text" class="form-control" value="{{$value->nom}}" readonly id="consulter{{$value->id}}" name="codes" placeholder="Entrer le code">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="d-flex" for="consulter{{$value->id}}"><i class="fas fa-signature"></i>&ensp;Prenom :</label>
                                                                        <input type="text" class="form-control" value="{{$value->prenom}}" readonly id="consulter{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="d-flex"><i class="fas fa-phone-alt"></i>&ensp;Num telephone</label>
                                                                        <input type="text" class="form-control" value="{{$value->contact}}" readonly id="consulter{{$value->id}}" name="Description" placeholder="Entrer la description">
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

                                        <!-- Corbeille-->

                                        <div class="modal fade" id="corbeille{{$value->id}}">
                                            <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                    <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Restorer le Client : {{$value->nom}} {{$value->prenom}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{route('recupClient')}}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$value->id}}">
                                                            <!--corp du formulaire debut-->

                                                            <div class="">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="d-flex" for="consulter{{$value->id}}"><i class="fas fa-signature"></i>&ensp;Nom </label>
                                                                            <input type="text" class="form-control" value="{{$value->nom}}" readonly id="" name="nom" placeholder="Entrer le domicile">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">

                                                                        <div class="form-group">
                                                                            <label class="d-flex" for="consulter{{$value->id}}"><i class="fas fa-signature"></i>&ensp;Prenom </label>
                                                                            <input type="text" class="form-control" value="{{$value->prenom}}" readonly id="" name="prenom" placeholder="Entrer le libellé">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="d-flex"><i class="fas fa-phone-alt"></i>&ensp;Num telephone</label>
                                                                            <input type="text" class="form-control" value="{{$value->contact}}" readonly id="contact" name="contact" placeholder="Entrer le numero">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-undo-alt"></i>&ensp;Restorer et Fermer</button>
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
                                                    <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Supper le Client : {{$value->nom}} {{$value->prenom}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{route('supprimerClient')}}">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$value->id}}">
                                                            <!--corp du formulaire debut-->

                                                            <div class="">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="d-flex" for="consulter{{$value->id}}"><i class="fas fa-signature"></i>&ensp;Nom </label>
                                                                            <input type="text" class="form-control" value="{{$value->nom}}" readonly id="" name="nom" placeholder="Entrer le domicile">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">

                                                                        <div class="form-group">
                                                                            <label class="d-flex" for="consulter{{$value->id}}"><i class="fas fa-signature"></i>&ensp;Prenom </label>
                                                                            <input type="text" class="form-control" value="{{$value->prenom}}" readonly id="" name="prenom" placeholder="Entrer le libellé">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="d-flex"><i class="fas fa-phone-alt"></i>&ensp;Num telephone</label>
                                                                            <input type="text" class="form-control" value="{{$value->contact}}" readonly id="contact" name="contact" placeholder="Entrer le numero">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle"></i>&ensp;Fermer</button>
                                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-trash"></i>&ensp;Supprimer et Fermer</button>
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
                    {!! $clients->links() !!}
                </div>
                <div class="sumenu card-footer" id="">
                    <hr>
                    <div class="code-box">
                        <div class="clearfix p-1">
                            <div class="container-fluid pt-2">
                                <div class="row">
                                    <div class="col" >
                                        <a href="deleteAll" data-bs-toggle="tooltip" title="Tout Vider" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-trash" style="font-size: 20px; color:#ff0000;"></i></a>&emsp;
                                        <a href="recupAll" data-bs-toggle="tooltip" title="Tout Restorer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fas fa-sync-alt" style="font-size: 20px; color:#3300ff;"></i></a>&emsp;
                                        <a href="javascript:;" data-bs-toggle="tooltip" title="Cards" class="btn   btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-id-card" style="font-size: 20px; color:#56ff02b4;"></i></a>&emsp;
                                        <a href="javascript:;" data-bs-toggle="tooltip" title="Imprimer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-print" style="font-size: 20px; color:#0682dab4;"></i></a>
                                    </div>
                                    <div class="col d-flex nav justify-content-end"><i class=""></i>
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
