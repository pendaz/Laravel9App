<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>YESSAL</title>

    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="{{asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{asset ('assets/css/mdb.min.css')}}" rel="stylesheet">
    <style>

    </style>
</head>

<body class="homepage-v1 hidden-sn white-skin animated">

    <!--Navigation-->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light">
                    <a href="#">
                        <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center">
                    </a>
                </div>
            </li>
            <!--/. Logo -->
            <!--Social-->
            <li>
                <ul class="social">
                    <li>
                        <a class="fb-ic">
                            <i class="fab fa-facebook-f"> </i>
                        </a>
                    </li>
                    <li>
                        <a class="pin-ic">
                            <i class="fab fa-pinterest"> </i>
                        </a>
                    </li>
                    <li>
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g"> </i>
                        </a>
                    </li>
                    <li>
                        <a class="tw-ic">
                            <i class="fab fa-twitter"> </i>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/Social-->
            <!--Search Form-->
            <li>
                <form class="search-form" role="search">
                    <div class="form-group md-form mt-0 pt-1 waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="fas fa-shopping-cart"></i> Cart page
                            <i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="../cart/cart-v1.html" class="waves-effect">Cart V.1</a>
                                </li>
                                <li>
                                    <a href="../cart/cart-v2.html" class="waves-effect">Cart V.2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="far fa-hand-pointer"></i> Category page
                            <i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="../category/category-v1.html" class="waves-effect">Category V.1</a>
                                </li>
                                <li>
                                    <a href="../category/category-v2.html" class="waves-effect">Category V.2</a>
                                </li>
                                <li>
                                    <a href="../category/category-v3.html" class="waves-effect">Category V.3</a>
                                </li>
                                <li>
                                    <a href="../category/category-v4.html" class="waves-effect">Category V.4</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="far fa-bookmark"></i> Homepage
                            <i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="../homepage/homepage-v1.html" class="waves-effect">Homepage V.1</a>
                                </li>
                                <li>
                                    <a href="../homepage/homepage-v2.html" class="waves-effect">Homepage V.2</a>
                                </li>
                                <li>
                                    <a href="../homepage/homepage-v3.html" class="waves-effect">Homepage V.3</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="collapsible-header waves-effect arrow-r">
                            <i class="fas fa-camera-retro"></i> Product page
                            <i class="fas fa-angle-down rotate-icon"></i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a href="../product/product-v1.html" class="waves-effect">Product V.1</a>
                                </li>
                                <li>
                                    <a href="../product/product-v2.html" class="waves-effect">Product V.2</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="../contact/contact.html" class="collapsible-header waves-effect">
                            <i class="fas fa-envelope"></i> Contact</a>
                    </li>

                </ul>
            </li>
            <!--/. Side navigation links -->
            <div class="sidenav-bg mask-strong"></div>
        </ul>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar white">
            <div class="container">
                <!-- SideNav slide-out button -->
                <div class="float-left mr-2">
                    <a href="#" data-activates="slide-out" class="button-collapse">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <a class="navbar-brand font-weight-bold " href="#">
                    <strong class="green-text">ACCUEIL</strong>
                </a>



                           <div class="text-center">
                             <a href="" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modalContactForm">ALERTER<i class="far fa-eye ml-1"></i></a>
                           </div>

                           <div class="text-center">
                             <a href="" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modalContactFormDemande">DEMANDER<i class="far fa-eye ml-1"></i></a>
                           </div>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="#">
                                <i class="fas fa-envelope green-text"></i> Contact
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="#">
                                <i class="fas fa-cog green-text"></i> Paramétres</a>
                        </li>
                        <li class="nav-item dropdown ml-3">
                            <a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user green-text"></i> Profile </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item waves-effect waves-light" href="#">Mon compte</a>
                                <a class="dropdown-item waves-effect waves-light" href="#">Déconnexion</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.Navbar -->

    </header>
    <!-- /.Navigation -->

    <!--Intro-->
    <section>

        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce4.jpg" alt="First slide">
                        <div class="mask">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-10 list-unstyled">
                                    <li>
                                        <p class="h1 green-text mb-4 mt-5">
                                            <strong>Les Déchets, de l'or!</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h4 class="h4-responsive dark-grey-text font-weight-bold mb-5">Pour une Planete plus Saine</h4>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" class="btn btn-green btn-rounded" rel="nofollow">Voir plus!</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item h-100">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce2.jpg" alt="Second slide">
                        <div class="mask">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-10 list-unstyled">
                                    <li>
                                        <p class="h1 dark-grey-text mb-4">
                                            <strong>Les déchets, de l'or!</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h4 class="h4-responsive dark-grey-text font-weight-bold mb-5">Pour une Planéte plus Saine</h4>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-green btn-rounded" rel="nofollow">Voir plus</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <div class="view h-100">
                        <img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce3.jpg" alt="Third slide">
                        <div class="mask">
                            <!-- Caption -->
                            <div class="full-bg-img flex-center white-text">
                                <ul class="animated fadeIn col-md-10 text-center text-md-right list-unstyled">
                                    <li>
                                        <p class="h1 green-text mb-4 mt-5 pr-lg-5">
                                            <strong>Les Déchets, de l'or!</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <h4 class="h4-responsive dark-grey-text font-weight-bold mb-5 pr-lg-5">Pour une plante plus Saine</h4>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Caption -->
                        </div>
                    </div>
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précedent</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">suivant</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

        <div class="container-fluid mx-0 px-0">

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark green mb-5">
                <div class="container">

                    <!-- Navbar brand -->
                    <a class="font-weight-bold white-text mr-4" href="#">Categories</a>

                    <!-- Collapse button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Collapsible content -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                        <!-- Links -->
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item dropdown mega-dropdown active">
                                <a class="nav-link dropdown-toggle  no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Plastiques</a>
                                <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="navbarDropdownMenuLink1">
                                    <div class="row mx-md-4 mx-1">
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Trés léger</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item mb-0" href="">sachets d'eau</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">sachets de lait</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">sachets commercial</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">emballages plastiques</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">plateaux à emporter</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Léger</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item" href="">bouteilles jetables </a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">bouteilles lessives</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">pots plastiques</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">sacs plastiques</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">chaussures plastiques</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Moyen</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                <a class="menu-item" href="">bassines</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">chaises</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">sceaux</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">jouets</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">venyle</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Dur</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item" href="">pneus</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">barriques</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href=""> couvertures électroniques</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">bouteilles de grande taille</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">thermiques</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mega-dropdown">
                                <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Organiques</a>
                                <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="navbarDropdownMenuLink1">
                                    <div class="row mx-md-4 mx-1">
                                        <div class="col-md-12 col-lg-4 sub-menu my-lg-5 mt-5 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">aliments pourris</h6>
                                            <!--Featured image-->
                                            <div class="view overlay mb-3 z-depth-1">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid" alt="First sample image">
                                                <div class="mask flex-center rgba-white-slight">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <h4 class="mb-2">
                                                <a class="news-title-2 pl-0" href="">Lorem ipsum dolor sit</a>
                                            </h4>
                                        </div>
                                        <div class="col-md-6 col-lg-4 sub-menu my-lg-5 my-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Pattes</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item" href="">gateaux</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">pains</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">pain2</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">pains3</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">pains4</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-4 sub-menu my-lg-5 my-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Fruits</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item" href="">bananes</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">mangues</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">anacardes</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">oranges</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">papaye</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mega-dropdown">
                                <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">objects métaliques</a>
                                <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="navbarDropdownMenuLink1">
                                    <div class="row mx-md-4 mx-1">
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Legers</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item mb-0" href="">Mouse</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Printer</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Laptop bags</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Software</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Headphones</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Related</h6>
                                            <!--Featured image-->
                                            <div class="view overlay mb-3 z-depth-1">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(43).jpg" class="img-fluid" alt="First sample image">
                                                <div class="mask flex-center rgba-white-slight">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <h4 class="mb-2">
                                                <a class="news-title-2 pl-0" href="">Lorem ipsum dolor sit</a>
                                            </h4>
                                            <p class="font-small text-uppercase dark-grey-text">
                                                <i class="far fa-clock-o pr-2" aria-hidden="true"></i>July 17, 2017 /
                                                <i class="far fa-comments px-1" aria-hidden="true"></i> 20</p>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">Bestseller</h6>
                                            <!--Featured image-->
                                            <div class="view overlay mb-3 z-depth-1">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" class="img-fluid" alt="First sample image">
                                                <div class="mask flex-center rgba-white-slight">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <h4 class="mb-2">
                                                <a class="news-title-2 pl-0" href="">Ut labore et dolore magna</a>
                                            </h4>
                                            <p class="font-small text-uppercase dark-grey-text">
                                                <i class="far fa-clock-o pr-2" aria-hidden="true"></i>July 16, 2017 /
                                                <i class="far fa-comments px-1" aria-hidden="true"></i> 25</p>
                                        </div>
                                        <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                            <h6 class="sub-title text-uppercase font-weight-bold blue-text">
                                                Lourds</h6>
                                            <ul class="caret-style pl-0">
                                                <li class="">
                                                    <a class="menu-item" href="">Totam rem aperiam eaque</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Beatae vitae dicta sun</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Quae ab illo inventore</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Nemo enim ipsam</a>
                                                </li>
                                                <li class="">
                                                    <a class="menu-item" href="">Neque porro quisquam est</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <!-- Links -->

                        <form class="search-form" role="search">
                            <div class="form-group md-form my-0 waves-light">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                    </div>
                    <!-- Collapsible content -->
                </div>
            </nav>
            <!--/.Navbar-->

        </div>

    </section>
    <!--/Intro-->

    <!-- Main Container -->
    <div class="container">
        <!-- Grid row -->
        <div class="row pt-4">

            <!-- Content -->
            <div class="col-lg-12">

                <!-- Categories & Adv -->
                <section class="section pt-2">

                    <!-- Grid row -->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!-- Section: Categories -->
                            <section class="section">

                                <ul class="list-group z-depth-1">

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fas fa-laptop dark-grey-text mr-2" aria-hidden="true"></i> pneus</a>
                                        <a href=""></a>
                                        <span class="badge badge-danger badge-pill">43</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fas fa-mobile-alt dark-grey-text mr-3" aria-hidden="true"></i> bassines</a>
                                        <span class="badge badge-danger badge-pill">32</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fas fa-tablet-alt dark-grey-text mr-3" aria-hidden="true"></i> chaises</a>
                                        <span class="badge badge-danger badge-pill">18</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fas fa-headphones-alt dark-grey-text mr-3" aria-hidden="true"></i>couvertures électroniques</a>
                                        <span class="badge badge-danger badge-pill">37</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fas fa-camera-retro dark-grey-text mr-3" aria-hidden="true"></i>bouteilles jetables</a>
                                        <span class="badge badge-danger badge-pill">15</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fas fa-suitcase dark-grey-text mr-3" aria-hidden="true"></i>barriques</a>
                                        <span class="badge badge-danger badge-pill">64</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">
                                            <i class="fas fa-tv dark-grey-text mr-3" aria-hidden="true"></i>Jouets</a>
                                        <span class="badge badge-danger badge-pill">2</span>
                                    </li>
                                </ul>
                            </section>
                            <!-- Section: Categories -->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-8 col-md-12 pb-lg-5 mb-4">
                            <!--Image -->
                            <div class="view zoom z-depth-1">

                                <img src="https://mdbootstrap.com/img/Photos/Others/product1.jpg" class="img-fluid" alt="sample image">
                                <div class="mask rgba-white-light">
                                    <div class="dark-grey-text  pt-4 ml-3 pl-3">
                                        <div>
                                            <a>
                                                <span class="badge badge-green">Promotion</span>
                                            </a>
                                            <h2 class="card-title font-weight-bold pt-2">
                                                <strong>LES DECHETS, DE L'OR</strong>
                                            </h2>
                                            <p class="">MAINTENEZ VOTRE CADRE DE VIE SAINE EN TRIANT VOS DECHETS</p>
                                            <a class="btn btn-green btn-sm btn-rounded clearfix d-none d-md-inline-block">voir plus</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Image -->
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </section>
                <!-- Categories & Adv -->

                <!--Section: Bestsellers & offers-->
                <section>

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-12">

                            <!-- Nav tabs -->
                            <ul class="nav md-tabs nav-justified green lighten-3 mx-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active dark-grey-text font-weight-bold" data-toggle="tab" href="#panel5" role="tab">
                                      LES OBJETS LES PLUS DEMANDES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dark-grey-text font-weight-bold" data-toggle="tab" href="#panel6" role="tab">
                                      LES OBJETS LES PLUS PRESENTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dark-grey-text font-weight-bold" data-toggle="tab" href="#panel7" role="tab">
                                    </i>LES OBJETS LES PLUS RARES</a>
                                </li>
                            </ul>
                            <!-- Tab panels -->
                            <div class="tab-content px-0">
                                <!--Panel 1-->
                                <div class="tab-pane fade in show active " id="panel5" role="tabpanel">
                                    <br>
                                    <!-- Grid row -->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-12 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Asus CT-567</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fas fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">plastiques dur</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-danger mb-2">promo</span>
                                                    <span class="badge badge-success mb-2 ml-2">SALE</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star grey-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <h5 class="mb-0 pb-0 mt-1 font-weight-bold">
                                                                <span class="red-text">
                                                                    <strong>$699</strong>
                                                                </span>
                                                                <span class="grey-text">
                                                                    <small>
                                                                        <s>$920</s>
                                                                    </small>
                                                                </span>
                                                            </h5>

                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fas fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Dell V-964i</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <span class="badge badge-info mb-2 ml-2">new</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fas fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->
                                </div>
                                <!--/.Panel 1-->

                                <!--Panel 2-->
                                <div class="tab-pane fade" id="panel6" role="tabpanel">
                                    <br>

                                    <!-- Grid row -->
                                    <div class="row mb-3">

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-12 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Samsung V54</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge grey mb-2">best rated</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fas fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Dell 786i</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-info mb-2">new</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star grey-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fas fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Canon 675-D</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-info mb-2">new</span>
                                                    <span class="badge badge-success mb-2 ml-2">SALE</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <h5 class="mb-0 pb-0 mt-1 font-weight-bold">
                                                                <span class="red-text">
                                                                    <strong>$1199</strong>
                                                                </span>
                                                                <span class="grey-text">
                                                                    <small>
                                                                        <s>$1520</s>
                                                                    </small>
                                                                </span>
                                                            </h5>

                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fas fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->
                                </div>
                                <!--/.Panel 2-->

                                <!--Panel 3-->
                                <div class="tab-pane fade" id="panel7" role="tabpanel">
                                    <br>
                                    <!-- Grid row -->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-12 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">Headphones</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-danger mb-2">bestseller</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fas fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">iPhone</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-info mb-2">nouveautés</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fas fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid" alt="sample image">
                                                    <a>
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--Card image-->

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <!--Category & Title-->

                                                    <h5 class="card-title mb-1">
                                                        <strong>
                                                            <a href="" class="dark-grey-text">iMac</a>
                                                        </strong>
                                                    </h5>
                                                    <span class="badge badge-danger mb-2">Promo</span>
                                                    <!-- Rating -->
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star blue-text"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star grey-text"></i>
                                                        </li>
                                                    </ul>

                                                    <!--Card footer-->
                                                    <div class="card-footer pb-0">
                                                        <div class="row mb-0">
                                                            <span class="float-left">
                                                                <strong>1439$</strong>
                                                            </span>
                                                            <span class="float-right">
                                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                                    <i class="fas fa-shopping-cart ml-3"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--Card content-->

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                </div>
                                <!--/.Panel 3-->
                            </div>

                        </div>

                    </div>
                    <!--Grid row-->

                </section>
                <!--Section: Bestsellers & offers-->


            </div>
            <!-- /.Content -->

        </div>
        <!-- /Grid row -->
        <!-- Modal: Contact form alerte-->
        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog cascading-modal" role="document">
            <!-- Content -->
            <div class="modal-content">

              <!-- Header -->
              <div class="modal-header light-blue darken-3 white-text">
                <h4 class=""><i class="fas fa-pencil-alt"></i> Contact form</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!-- Body -->
              <div class="modal-body mb-0">
                <div class="md-form form-sm">
                  <i class="fas fa-user prefix"></i>
                  <input type="text" id="form19" class="form-control form-control-sm">
                  <label for="form19">Your name</label>
                </div>

                <div class="md-form form-sm">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="password" id="form20" class="form-control form-control-sm">
                  <label for="form20">Your email</label>
                </div>

                <div class="md-form form-sm">
                  <i class="fas fa-tag prefix"></i>
                  <input type="text" id="form21" class="form-control form-control-sm">
                  <label for="form21">Subject</label>
                </div>

                <div class="md-form form-sm">
                  <i class="fas fa-pencil-alt prefix"></i>
                  <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="3"></textarea>
                  <label for="form8">Your message</label>
                </div>

                <div class="text-center mt-1-half">
                  <button class="btn btn-info mb-2">Send <i class="fas fa-paper-plane ml-1"></i></button>
                </div>

              </div>
            </div>
            <!-- Content -->
          </div>
        </div>
        <!-- Modal: Contact form -->

        <!-- Modal: Contact form demande-->
        <div class="modal fade" id="modalContactFormDemande" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog cascading-modal" role="document">
            <!-- Content -->
            <div class="modal-content">

              <!-- Header -->
              <div class="modal-header light-blue darken-3 white-text">
                <h4 class=""><i class="fas fa-pencil-alt"></i> Contact form</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!-- Body -->
              <div class="modal-body mb-0">
                <div class="md-form form-sm">
                  <i class="fas fa-user prefix"></i>
                  <input type="text" id="form19" class="form-control form-control-sm">
                  <label for="form19">Your name</label>
                </div>

                <div class="md-form form-sm">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="password" id="form20" class="form-control form-control-sm">
                  <label for="form20">Your email</label>
                </div>

                <div class="md-form form-sm">
                  <i class="fas fa-tag prefix"></i>
                  <input type="text" id="form21" class="form-control form-control-sm">
                  <label for="form21">Subject</label>
                </div>

                <div class="md-form form-sm">
                  <i class="fas fa-pencil-alt prefix"></i>
                  <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="3"></textarea>
                  <label for="form8">Your message</label>
                </div>

                <div class="text-center mt-1-half">
                  <button class="btn btn-info mb-2">Send <i class="fas fa-paper-plane ml-1"></i></button>
                </div>

              </div>
            </div>
            <!-- Content -->
          </div>
        </div>
        <!-- Modal: Contact form -->
    </div>
    <!-- /.Main Container -->


    <!--Footer-->
    <footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

        <div style="background-color: #4285f4;">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">nous suivre via les réseaux sociaux!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="fb-ic ml-0 px-2">
                            <i class="fab fa-facebook-f white-text"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic px-2">
                            <i class="fab fa-twitter white-text"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic px-2">
                            <i class="fab fa-google-plus-g white-text"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="li-ic px-2">
                            <i class="fab fa-linkedin-in white-text"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic px-2">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
        </div>

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>YESSAL</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Le numerique de la planéte et de ces occupants!</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Nos Outils</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">template bootstrap frontend</a>
                    </p>
                    <p>
                        <a href="#!">Framework laravel backend</a>
                    </p>
                    <p>
                        <a href="#!">HTML5</a>
                    </p>
                    <p>
                        <a href="#!">CSS3</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>liens utiles</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">vos accomptes</a>
                    </p>
                    <p>
                        <a href="#!">devenir un de nos filiales</a>
                    </p>
                    <p>
                        <a href="#!">Echanges</a>
                    </p>
                    <p>
                        <a href="#!">Aides</a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Nous joindre</strong>
                    </h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> quartier 10ieme,Thiés, SN</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@yesssal.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 221 234 56 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 221 234 56 89</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2022 Copyright:yessal.com <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> Yessal </a>
            </div>
        </div>
        <!--/.Copyright -->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="{{asset ('assets/js/jquery-3.3.1.min.js')}}"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset ('assets/js/popper.min.js')}}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset ('assets/js/bootstrap.min.js')}}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.min.js')}}"></script>


  <script type="text/javascript" src="{{asset ('js/popper.min.js')}}"></script>

    <script type="text/javascript">
        /* WOW.js init */
        new WOW().init();

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <script>
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });
    </script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
    </script>
</body>

</html>
