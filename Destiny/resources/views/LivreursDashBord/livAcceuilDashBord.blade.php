





@extends('LivreursDashBord.livMenuDashBord')
@section('corps')

















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
                            </ol>
                        </nav>
                    </div>

                </div>


            </div>
            <div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-2">
						<img src="{{asset(Auth::user()->le_profil)}}" alt="{{asset(Auth::user()->le_profil)}}" class="img img-fluid" width="200">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue">{{Auth::user()->name}} {{Auth::user()->prenom}} !</div>
						</h4>
						<p class="font-18 max-width-600">Vous etes connecté en tant {{Auth::user()->role_id}} , consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
					</div>
				</div>


			</div>
            </div>
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="row align-items-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, inventore.</p>
				</div>
			</div>





			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>


@endsection
