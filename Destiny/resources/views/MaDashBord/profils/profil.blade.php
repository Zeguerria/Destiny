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

  <!--corps du modal fin -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper lebody masection pb-5">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Content Header (Page header) -->
    <div class="content-header pb-5">
        <div class="col-md-6 col-md-12 bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
            <div class="title">
                <h4 class="mb-0 bread"><i class="fas fa-users msicons"></i>&ensp;Profil</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"  style="color: rgb(0, 191, 255);">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page" >Profils</li>
                    <li class="breadcrumb-item active" aria-current="page" >Profil</li>
                </ol>
            </nav>
        </div>

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">








        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">

                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{asset(Auth::user()->le_profil)}}" alt="User profile picture">
                      </div>

                      <h3 class="profile-username text-center">{{Auth::user()->name}}&ensp;{{Auth::user()->prenom}}</h3>

                      <p class="text-muted text-center">{{Auth::user()->pseudo}}</p>

                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Profil :</b> <a class="float-right">{{Auth::user()->profil->libelle}}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Adresse :</b> <a class="float-right">{{Auth::user()->email}}</a>
                        </li>
                        {{-- <li class="list-group-item">
                          <b>Friends</b> <a class="float-right">13,287</a>
                        </li> --}}
                      </ul>
                        <form action="{{route('logout')}}" method="POST">@csrf
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="nav-icon fas fa-power-off msicons">&ensp;<b>Se deconnecter</b></i>
                            </button>
                        </form>

                      {{-- <button href="#" class="btn btn-primary btn-block"><b>Se deconnecter</b></button> --}}
                    </div>
                  </div>

                  {{-- <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <strong><i class="fas fa-book mr-1"></i> Education</strong>

                      <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                      </p>

                      <hr>

                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                      <p class="text-muted">Malibu, California</p>

                      <hr>

                      <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                      <p class="text-muted">
                        <span class="tag tag-danger">UI Design</span>
                        <span class="tag tag-success">Coding</span>
                        <span class="tag tag-info">Javascript</span>
                        <span class="tag tag-warning">PHP</span>
                        <span class="tag tag-primary">Node.js</span>
                      </p>

                      <hr>

                      <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div>
                    <!-- /.card-body -->
                  </div> --}}
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                  <div class="card">
                    <div class="card-header p-2">
                      <ul class="nav nav-pills">

                        <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Contacter Responsable</a></li>
                        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Help</a></li>
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content">

                        <div class="tab-pane active" id="activity">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                  <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                  <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                  <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                  <div class="col-sm-10">
                                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-2 col-sm-10">
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                  </div>
                                </div>
                              </form>
                        </div>

                        <div class="tab-pane" id="timeline">
                          <!-- The timeline -->
                          <div class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <div class="time-label">
                              <span class="bg-danger">
                                10 Feb. 2014
                              </span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                              <i class="fas fa-envelope bg-primary"></i>

                              <div class="timeline-item">
                                <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                <div class="timeline-body">
                                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                  quora plaxo ideeli hulu weebly balihoo...
                                </div>
                                <div class="timeline-footer">
                                  <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                  <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                              </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <div>
                              <i class="fas fa-user bg-info"></i>

                              <div class="timeline-item">
                                <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                                </h3>
                              </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <div>
                              <i class="fas fa-comments bg-warning"></i>

                              <div class="timeline-item">
                                <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                <div class="timeline-body">
                                  Take me to your leader!
                                  Switzerland is small and neutral!
                                  We are more like Germany, ambitious and misunderstood!
                                </div>
                                <div class="timeline-footer">
                                  <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                </div>
                              </div>
                            </div>
                            <!-- END timeline item -->
                            <!-- timeline time label -->
                            <div class="time-label">
                              <span class="bg-success">
                                3 Jan. 2014
                              </span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                              <i class="fas fa-camera bg-purple"></i>

                              <div class="timeline-item">
                                <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                <div class="timeline-body">
                                  <img src="https://placehold.it/150x100" alt="...">
                                  <img src="https://placehold.it/150x100" alt="...">
                                  <img src="https://placehold.it/150x100" alt="...">
                                  <img src="https://placehold.it/150x100" alt="...">
                                </div>
                              </div>
                            </div>
                            <!-- END timeline item -->
                            <div>
                              <i class="far fa-clock bg-gray"></i>
                            </div>
                          </div>
                        </div>


                        <div class="tab-pane" id="settings">
                          <form class="form-horizontal">
                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName2" placeholder="Name">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                              </div>
                            </div>
                          </form>
                        </div>

                      </div>
                      <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>


      </div>
    </section>
    <!-- /.content -->


  </div>

 @endsection
