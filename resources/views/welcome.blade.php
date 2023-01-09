<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Believe</title>

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('assetshome/font-awesome/css/font-awesome.css')}}" rel='stylesheet' type='text/css'>
      
    <!-- Bootstrap -->
    <link href="{{asset('assetshome/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- main css -->
    <link href="{{asset('assetshome/style.css')}}" rel="stylesheet">
    <link href="{{asset('assetshome/responsive.css')}}" rel="stylesheet">
    
    <!-- Slider -->
    <link href="{{asset('assetshome/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assetshome/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('assetshome/css/owl.transitions.css')}}" rel="stylesheet"> 
      
    <!-- lightbox -->
    <link href="{{asset('assetshome/css/prettyPhoto.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <div id="wrapper" class="homepage-1"> <!-- wrapper -->
          <div id="header"> <!-- header -->
              <div class="top"> <!-- top -->
                  <div class="container">
                      
                     
                      <div class="top-control">
						
						@if (Route::has('login'))
							@auth
								<a href="{{ url('/app') }}">Connexion</a><span>•</span>
							@else
								<a href="{{ route('login') }}">Se connecter</a><span>•</span>@if (Route::has('register'))<a href="{{ route('register') }}">S'inscrire</a>@endif
							@endauth
						@endif
                      </div>
                      <div class="clearfix"></div>
                      <div class="top-offers show-mobile">
                          <div class="alert alert-warning alert-dismissible fade in offers" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                              Free Shipping <a href="">on All Orders Over</a> $75!
                          </div>
                      </div>
                  </div>
              </div> <!-- top -->
              
              <div id="believe-nav"> <!-- Nav -->
                  <div class="container">
                      <div class="min-marg">
                          <nav class="navbar navbar-default">
                              <!-- <div class="container-fluid"> -->
                                  <!-- Brand and toggle get grouped for better mobile display -->
                                  <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                          <span class="sr-only">Toggle navigation</span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                      </button>
                                      <a class="navbar-brand" href="index.html"><img src="{{asset('assetshome/images/logo.png')}}" alt=""></a>
                                  </div>

                                  <!-- Collect the nav links, forms, and other content for toggling -->
                                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                      <ul class="nav navbar-nav">
                                          <li class="active"><a href="{{url('/')}}">HOME <span class="sr-only">(current)</span></a></li>
                                          <li><a href="{{url('/renseignement')}}">RENSEIGNEMENT</a></li>
                                          <li><a href="blog-detail.html">REGLEMENT INTERIEUX DE L'ECOLE</a></li>
                                          <li><a href="contact.html">CONTACT</a></li>
                                          
                                      </ul>
                                     
                                     
                                  </div><!-- /.navbar-collapse -->
                              <!--</div> -->
                              
                          </nav>
                      </div>
                      <div class="srch-form">
                          <form class="side-search">
                              <div class="input-group">
                                  <input type="text" class="form-control search-wid" placeholder="Search Here" aria-describedby="basic-addon2">
                                  <a href="" class="input-group-addon btn-side-serach" id="basic-addon2"><i class="fa fa-search"></i></a>
                              </div>
                          </form>
                      </div>
                  </div>
              </div> <!-- Nav -->
             
              <div id="cat-nav">
              <div class="container">
                  <nav class="navbar navbar-default">
                      <!-- <div class="container-fluid"> -->
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#cat-nav-mega">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                      </div>

                    
                  </nav>
              </div>
              </div>      
          </div> <!-- header -->
          
          <div id="main-slider"> <!-- Slider -->
              <div id="home-slider" class="owl-carousel owl-theme">
                  <div class="item">
                      <img src="{{asset('assetshome/images/slider-1.jpg')}}" alt="slide-1" class="img-responsive">
                      <div class="slider-desc">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="slide-offers-left">
                                          <div class="slide-offers-title"><span>L’école</span><br/> => L’AVENIR</div>
                                          
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                       <div class="slide-offers-right">
                                          <div class="slide-offers-title"><span>La dicipline</span><br/> => LE SUCCES</div>
                                          
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                      <img src="{{asset('assetshome/images/slider-2.jpg')}}" alt="slide-2" class="img-responsive">
                      <div class="slider-desc">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="slide-offers-left">
                                          <div class="slide-offers-title"><span>NewSchool</span><br/>L'avenir est assuré</div>
                                          
                                          <a href="{{route('register')}}" class="btn btn-blue">S'INSCRIRE</a>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                       
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> <!-- Slider -->
          
        @yield('add')
          
          <div id="footer"><!-- Footer -->
              <div class="footer-widget">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-3">
                              <div class="text-widget">
                                  <div class="wid-title">Welcome to</div>
                                  <img src="{{asset('assetshome/images/logo-white.png')}}" alt="ft-logo">
                                  
                                  <ul class="ft-soc clearfix">
                                      <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                                      <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                      <li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
                                      <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                      <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                  </ul>
                                  <div class="clearfix"></div>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="quick-links">
                                  
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="term">
                                  <div class="wid-title">&nbsp;Info</div>
                                  <ul class="top-support"> 
                                    <li><i style="color: rgb(3, 141, 165)" class="fa fa-phone-square"></i><span>contact</span></li><br><br>
                                    <li><i style="color: rgb(3, 141, 165)" class="fa fa-envelope-square"></i><span>Email</span></li>
                                </ul>
                                  
                                </div>
                            </div>
                          <div class="col-md-2">
                              <div class="quick-links">
                                 
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="subscribe">
                                  <div class="wid-title">INSCRIPTION</div>
                                  <p>
                                      Inscrivez vous  chez nous pour assurer votre avenir !
                                  </p>
                                  <form>
                                      <div class="form-group">
                                          {{-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> --}}
                                      </div>
                                      <a href="{{route('register')}}" class="btn btn-default">Inscrivez-vous maintenant</a>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="footer-text">
                  <div class="container">
                      <p>Fait en 2023 sous tutelle de NewSchool. Auteur :  <a href="#">DEVELOPPEUR BALIABA </a></p>
                  </div>
              </div>
          </div><!-- Footer -->
      </div> <!-- wrapper -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('assetshome/js/library.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('assetshome/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assetshome/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assetshome/js/jquery.raty.js')}}"></script>
    <script src="{{asset('assetshome/js/ui.js')}}"></script>
    <script src="{{asset('assetshome/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('assetshome/js/jquery.selectbox-0.2.js')}}"></script>
    <script src="{{asset('assetshome/js/theme-script.js')}}"></script>
  </body>
</html>