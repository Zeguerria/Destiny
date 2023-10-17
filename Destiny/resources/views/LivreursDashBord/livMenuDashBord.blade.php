<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>@yield('titre')</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="livreurs/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="livreurs/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="livreurs/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="livreurs/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="livreurs/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="livreurs/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="livreurs/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="livreurs/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
    @yield('header')
</head>
<body>
        <div class="pre-loader">
            <div class="pre-loader-box">
                <div class="loader-logo"><img src="{{asset('mesImages/D2.png')}}" alt="" width="100" height="100"></div>
                <div class='loader-progress' id="progress_div">
                    <div class='bar' id='bar1'></div>
                </div>
                <div class='percent' id='percent1'>0%</div>
                <div class="loading-text">
                    Loading...
                </div>
            </div>
        </div>
        
        
        <div class="header">
            <div class="header-left">
                <div class="menu-icon dw dw-menu"></div>
                <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
                <div class="header-search">
                    <form>
                        <div class="form-group mb-0">
                            <i class="dw dw-search2 search-icon"></i>
                            <input type="text" class="form-control search-input" placeholder="Search Here">

                        </div>
                    </form>
                </div>
            </div>
            <div class="header-right">
                <div class="user-info-dropdown">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="{{--user-icon--}} " >
                                <img src="{{asset(Auth::user()->le_profil)}}" alt="{{asset(Auth::user()->le_profil)}}" class="img img-fluid" width="25" >
                            </span>
                            <span class="user-name">{{Auth::user()->name}} {{Auth::user()->prenom}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="./profilLivreur"><i class="dw dw-user1"></i> Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                            <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="btn dropdown-item" type="submit" ><i class="dw dw-logout"></i> Log Out</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <a href="/tableau-de-bord.ks" class="brand-link">
            <img src="{{asset('mesImages/D2.png')}}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><b><span><b>D</b><small>estiny</small></b></span>
          </a> --}}

        <div class="left-side-bar">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="{{asset('mesImages/Jym.png')}}" alt="" class="dark-logo" height="60" width="60">
                    <img src="{{asset('mesImages/Jym.png')}}" alt="" class="light-logo" height="60" width="60">&ensp;
                    <span class="brand-text font-weight-light"><b><span><b>D</b><small>estiny</small></b></span>
                </a>
                
                <div class="dropdown-divider"></div>
                <div class="close-sidebar" data-toggle="left-sidebar-close">
                    <i class="ion-close-round"></i>
                </div>
            </div>
            <div class="menu-block customscroll">
                <div class="sidebar-menu">
                    <ul id="accordion-menu">
                        <li>
                            <a href="./livdashacceuil" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-pin-2"></span><span class="mtext">Mes Livraisons</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="./livraisonLivreur">Livraison</a></li>
                                {{-- <li><a href="advanced-components.html">Advanced Components</a></li> --}}

                            </ul>
                        </li>
                        {{-- <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-library"></span><span class="mtext">Tables</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="basic-table.html">Basic Tables</a></li>
                                <li><a href="datatable.html">DataTables</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <div class="sidebar-small-cap">Autres</div>
                        </li>
                        <li>
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-invoice"></span><span class="mtext">Plus</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="./profilLivreur">Mon Profil</a></li>
                                <li><a href="#">Mode d'utilisation</a></li>
                                <li><a href="#">Contact Operateur</a></li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-paper-plane1"></span>
                                <span class="mtext">Landing Page <img src="vendors/images/coming-soon.png" alt="" width="25"></span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>
    @yield('corps')
	{{-- <div class="main-container">
		<div class="pd-ltr-20">


			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div> --}}
	<!-- js -->
	<script src="livreurs/vendors/scripts/core.js"></script>
	<script src="livreurs/vendors/scripts/script.min.js"></script>
	<script src="livreurs/vendors/scripts/process.js"></script>
	<script src="livreurs/vendors/scripts/layout-settings.js"></script>
	<script src="livreurs/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="livreurs/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="livreurs/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="livreurs/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="livreurs/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="livreurs/vendors/scripts/dashboard.js"></script>
</body>
</html>
