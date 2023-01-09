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
                      <ul class="top-support"> 
                          <li><i class="fa fa-phone-square"></i><span>(+800) 123 456 7890</span></li>
                          <li><a href=""><i class="fa fa-envelope-square"></i><span>info@bootstrapmart.com</span></a></li>
                      </ul>
                      <div class="top-offers">
                          <div class="alert alert-warning alert-dismissible fade in offers" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                              Free Shipping <a href="">on All Orders Over</a> $75!
                          </div>
                      </div>
                      <div class="top-control">
						
						@if (Route::has('login'))
							@auth
								<a href="{{ route('login') }}">Se connecter</a><span>•</span>
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
                                      <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                                  </div>

                                  <!-- Collect the nav links, forms, and other content for toggling -->
                                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                      <ul class="nav navbar-nav">
                                          <li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
                                          <li><a href="blog.html">Blog</a></li>
                                          <li><a href="blog-detail.html">Blog Post</a></li>
                                          <li><a href="contact.html">Contact</a></li>
                                         
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
                      <img src="images/slider-1.jpg" alt="slide-1" class="img-responsive">
                      <div class="slider-desc">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="slide-offers-left">
                                          <div class="slide-offers-title"><span>Men’s</span><br/>FASHION</div>
                                          <p>New & Fvhresh collection<br/>arraival in believe store</p>
                                          <a href="" class="btn btn-blue">Shop now</a>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                       <div class="slide-offers-right">
                                          <div class="slide-offers-title"><span>Women’s</span><br/>FASHION</div>
                                          <p>New & Fvhresh collection<br/>arraival in believe store</p>
                                          <a href="" class="btn btn-magenta">Shop now</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                      <img src="images/slider-2.jpg" alt="slide-2" class="img-responsive">
                      <div class="slider-desc">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="slide-offers-left">
                                          <div class="slide-offers-title"><span>50% Price cut</span><br/>for online order</div>
                                          <p>New & Fvhresh collection<br/>arraival in believe store</p>
                                          <a href="" class="btn btn-blue">Shop now</a>
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
          
          <div id="content"> <!-- Content -->
              <div class="container">
                  <div class="home-content">
                      <div class="cat-offers">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="cat-sec-1">
                                      <img src="images/cat-1.jpg" class="img-responsive" alt="">
                                      <div class="cat-desc">
                                          <div class="cat-inner">
                                              <div class="cat-title">man<span>Clothing</span></div>
                                              <a href="" class="btn btn-border">Buy Now</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="cat-sec-2">
                                      <img src="images/cat-2.jpg" class="img-responsive" alt="">
                                       <div class="cat-desc">
                                           <div class="cat-inner">
                                              <div class="cat-title">woman<span>Clothing</span></div>
                                              <a href="" class="btn btn-border">Buy Now</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="cat-sec-3">
                                      <img src="images/cat-3.jpg" class="img-responsive" alt="">
                                       <div class="cat-desc">
                                           <div class="cat-inner">
                                              <div class="cat-title">accessories<span>collections - 2014</span></div>
                                              <a href="" class="btn btn-border">shop Now</a>
                                           </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="newest">
                  <div class="container">
                      <div class="newest-content">
                          <div class="newest-tab">
                              <ul id="myTab" class="nav nav-tabs newest" role="tablist">
                                  <li role="presentation" class="active">
                                      <a href="#1" id="cat-1" role="tab" data-toggle="tab" aria-controls="1" aria-expanded="true">Featured</a>
                                  </li>
                                  <li role="presentation">
                                      <a href="#2" role="tab" id="cat-2" data-toggle="tab" aria-controls="2">New Arrivals</a>
                                  </li>
                                  <li role="presentation">
                                      <a href="#3" role="tab" id="cat-3" data-toggle="tab" aria-controls="3">Best Seller</a>
                                  </li>
                              </ul>
                              
                              
                              <div id="myTabContent" class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade in active" id="1" aria-labelledby="cat-1">
                                      <div class="row clearfix">
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                        <div id="product-image" class="owl-carousel owl-theme">
                                                            <div class="item"><img src="images/p-1.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-2.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-3.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-4.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-5.jpg" alt="" class="img-responsive"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""><i class="fa fa-heart"></i></a>
                                                                    <a href=""><i class="fa fa-retweet"></i></a>
                                                                    <a href=""><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <div class="to-right">
                                                                    <div id="product-control" class="owl-carousel owl-theme clearfix">
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                            
														</div>
													</div>
                                              </div>
                                              
                                              <div class="product-name">
                                                  <a href="">Adidas Striped Men's Round Neck T-Shirt</a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span>$19.00</span> $15.00
                                              </div>
                                          </div>
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                        <div id="product-image2" class="owl-carousel owl-theme">
                                                            <div class="item"><img src="images/p-2.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-3.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-4.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-5.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-1.jpg" alt="" class="img-responsive"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""><i class="fa fa-heart"></i></a>
                                                                    <a href=""><i class="fa fa-retweet"></i></a>
                                                                    <a href=""><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <div class="to-right">
                                                                    <div id="product-control2" class="owl-carousel owl-theme">
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                            
														</div>
													</div>
                                              </div>
                                              <div class="product-name">
                                                  <a href="">Women's Jeans</a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span>$19.00</span> $15.00
                                              </div>
                                          </div>
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                        <div id="product-image3" class="owl-carousel owl-theme">
                                                            <div class="item"><img src="images/p-3.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-4.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-5.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-1.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-2.jpg" alt="" class="img-responsive"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""><i class="fa fa-heart"></i></a>
                                                                    <a href=""><i class="fa fa-retweet"></i></a>
                                                                    <a href=""><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <div class="to-right">
                                                                    <div id="product-control3" class="owl-carousel owl-theme">
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                            
														</div>
													</div>
                                              </div>
                                              <div class="product-name">
                                                  <a href="">Running Shoes</a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span>$19.00</span> $15.00
                                              </div>
                                          </div>
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                        <div id="product-image4" class="owl-carousel owl-theme">
                                                            <div class="item"><img src="images/p-4.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-5.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-1.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-2.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-3.jpg" alt="" class="img-responsive"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""><i class="fa fa-heart"></i></a>
                                                                    <a href=""><i class="fa fa-retweet"></i></a>
                                                                    <a href=""><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <div class="to-right">
                                                                    <div id="product-control4" class="owl-carousel owl-theme">
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                            
														</div>
													</div>
                                              </div>
                                              <div class="product-name">
                                                  <a href="">men's Jeans</a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span>$19.00</span> $15.00
                                              </div>
                                          </div>
                                          
                                          <div class="clearfix"></div>
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                        <div id="product-image5" class="owl-carousel owl-theme">
                                                            <div class="item"><img src="images/p-5.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-1.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-2.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-3.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-4.jpg" alt="" class="img-responsive"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""><i class="fa fa-heart"></i></a>
                                                                    <a href=""><i class="fa fa-retweet"></i></a>
                                                                    <a href=""><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <div class="to-right">
                                                                    <div id="product-control5" class="owl-carousel owl-theme">
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                            
														</div>
													</div>
                                              </div>
                                              <div class="product-name">
                                                  <a href="">Striped Men's Round Neck T-Shirt</a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span>$19.00</span> $15.00
                                              </div>
                                          </div>
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                        <div id="product-image6" class="owl-carousel owl-theme">
                                                            <div class="item"><img src="images/p-6.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-7.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-8.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-5.jpg" alt="" class="img-responsive"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""><i class="fa fa-heart"></i></a>
                                                                    <a href=""><i class="fa fa-retweet"></i></a>
                                                                    <a href=""><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <div class="to-right">
                                                                    <div id="product-control6" class="owl-carousel owl-theme">
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                            
														</div>
													</div>
                                              </div>
                                              <div class="product-name">
                                                  <a href="">Women's Round Neck T-Shirt</a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span>$19.00</span> $15.00
                                              </div>
                                          </div>
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                        <div id="product-image7" class="owl-carousel owl-theme">
                                                            <div class="item"><img src="images/p-7.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-8.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-5.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-6.jpg" alt="" class="img-responsive"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""><i class="fa fa-heart"></i></a>
                                                                    <a href=""><i class="fa fa-retweet"></i></a>
                                                                    <a href=""><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <div class="to-right">
                                                                    <div id="product-control7" class="owl-carousel owl-theme">
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                            
														</div>
													</div>
                                              </div>
                                              <div class="product-name">
                                                  <a href="">men's Jeans</a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span>$19.00</span> $15.00
                                              </div>
                                          </div>
                                          <div class="col-md-3 prdct-grid">
                                              <div class="product-fade">
													<div class="product-fade-wrap">
                                                        <div id="product-image8" class="owl-carousel owl-theme">
                                                            <div class="item"><img src="images/p-8.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-5.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-6.jpg" alt="" class="img-responsive"></div>
                                                            <div class="item"><img src="images/p-7.jpg" alt="" class="img-responsive"></div>
                                                        </div>
														<div class="product-fade-ct">
                                                            <div class="product-fade-control">
                                                                <div class="to-left">
                                                                    <a href=""><i class="fa fa-heart"></i></a>
                                                                    <a href=""><i class="fa fa-retweet"></i></a>
                                                                    <a href=""><i class="fa fa-search"></i></a>
                                                                </div>
                                                                <div class="to-right">
                                                                    <div id="product-control8" class="owl-carousel owl-theme">
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        <div class="item"><div class="bullets"></div></div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <a href="" class="btn btn-to-cart"><span class="bag"></span><span>Add To cart</span><div class="clearfix"></div></a>
                                                            </div>
                                                            
														</div>
													</div>
                                              </div>
                                              <div class="product-name">
                                                  <a href="">Heels</a>
                                              </div>
                                              <div class="star-1"></div>
                                              <div class="product-price">
                                                  <span>$19.00</span> $15.00
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  
                                  <div role="tabpanel" class="tab-pane fade" id="2" aria-labelledby="cat-2">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <p>....</p>
                                          </div>
                                      </div>
                                  </div>
                                  
                                  <div role="tabpanel" class="tab-pane fade" id="3" aria-labelledby="cat-3">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <p>....</p>
                                          </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="content-offers">
                  <div class="container">
                      <div class="ct-offers">
                          <div class="ct-offers-title">Tommy Hilfiger<br/>Women’s</div>
                          <p>The generated Lorem Ipsum is therefore always free from repetition, injected humour</p>
                          <a href="" class="btn btn-blue">Discover more Product</a>
                      </div>
                  </div>
              </div>
              
              <div class="brands">
                  <div class="container">
                      <div class="brands-inner">
                          <div class="brand-title">
                              <span>Brands</span>
                          </div>
                          
                          <div id="slider-home"> <!-- Slider -->
                              <div id="brand-carousel" class="owl-carousel owl-theme">
                                  <div class="item">
                                      <img src="images/brand-2.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-3.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-4.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-1.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-5.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-2.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-3.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-4.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-1.png" alt="slide-1" class="img-responsive">
                                  </div>
                                  <div class="item">
                                      <img src="images/brand-5.png" alt="slide-1" class="img-responsive">
                                  </div>
                              </div>
                          </div> <!-- Slider -->
                          
                      </div>
                  </div>
              </div>
              
              
              <div class="rec-blog">
                  <div class="container">
                      <div class="rec-blog-inner">
                          <div class="blog-title">
                              <span>The Blog</span>
                          </div>
                          <div class="row">
                              <div class="col-md-4 blog-ct">
                                  <a href=""><img src="images/rec-1.jpg" alt="" class="img-responsive"></a>
                                  <div class="blog-ct-title">
                                      <a href="">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque !</a>
                                      <span>May 11,2014</span>
                                  </div>
                              </div>
                              <div class="col-md-4 blog-ct">
                                  <a href=""><img src="images/rec-2.jpg" alt="" class="img-responsive"></a>
                                  <div class="blog-ct-title">
                                      <a href="">Voluptatem accusantium doloremque</a>
                                      <span>May 11,2014</span>
                                  </div>
                              </div>
                              <div class="col-md-4 blog-ct">
                                  <a href=""><img src="images/rec-3.jpg" alt="" class="img-responsive"></a>
                                  <div class="blog-ct-title">
                                      <a href="">Voluptatem accusantium doloremque</a>
                                      <span>May 11,2014</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div> <!-- Content -->
          
          <div id="footer"><!-- Footer -->
              <div class="footer-widget">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-3">
                              <div class="text-widget">
                                  <div class="wid-title">Welcome to</div>
                                  <img src="images/logo-white.png" alt="ft-logo">
                                  <p>
                                      Believe isCommerce WordPress theme. It has<br/>everything you need to start selling today! <a href="">Get this theme on ThemeForest!</a>
                                  </p>
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
                                  <div class="wid-title">Quick Links</div>
                                  <ul>
                                      <li><a href="index.html">Home</a></li>
                                      <li><a href="#">About US</a></li>
                                      <li><a href="contact.html">contact US</a></li>
                                      <li><a href="#">deals</a></li>
                                      <li><a href="blog.html">blog</a></li>
                                      <li><a href="#">help</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="term">
                                  <div class="wid-title">&nbsp;</div>
                                  <p>
                                      <a href="#">Tearms & condition</a><br/>
                                      <a href="#">FAQs</a><br/>
                                      <a href="#">Privacy Policy</a><br/>
                                      <a href="#">Legal Desclaimer</a><br/>
                                  </p>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="quick-links">
                                  <div class="wid-title">My Account</div>
                                  
                                  <ul>
                                      <li><a href="#">My Account</a></li>
                                      <li><a href="#">Personal Information</a></li>
                                      <li><a href="#">Addresses</a></li>
                                      <li><a href="#">Orders</a></li>
                                      <li><a href="#">Wishlist</a></li>
                                      <li><a href="#">track order</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="subscribe">
                                  <div class="wid-title">Subscribe for OFFERS & UPDATES</div>
                                  <p>
                                      Enter your email and we'll send you a coupon
                                      with 10% off your next order. Add any text here
                                  </p>
                                  <form>
                                      <div class="form-group">
                                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                      </div>
                                      <button type="submit" class="btn btn-default">Subscribe Now</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="footer-text">
                  <div class="container">
                      <p>Copyright 2018 All Rights Reserved by Believe. Designed and Developed by <a href="https://bootstrapmart.com/">BootstrapMart </a></p>
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