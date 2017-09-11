<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Seek it out!!!</title>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
    <link rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animat/animate.min.css" />
    <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css" />
    <link rel="stylesheet" href="css/themes/default/default.css" />
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" href="css/owl-carousel/owl.transitions.css">
    
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
</head>
<body>


    <div class='preloader'><div class='loaded'>&nbsp;</div></div>
    <header id="home" class="header">
        <div class="main_menu_bg navbar-fixed-top wow slideInDown" data-wow-duration="1s">
            <div class="container">
                <div class="row">
                    <div class="nave_menu">
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                                                <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          
                        </div>

                        
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                         
            @if (Route::has('login'))
                <div class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                    <li><a href="{{ url('/register') }}">Register</a></li>
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        
                    @endif
                </div>
            @endif
                       
                          <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#Search">Search</a></li>
                            
                            <li><a href="#footer">FAQ</a></li>
                            
                           
                          </ul>
                        </div>
                      </div>
                    </nav>
                    </div>  
                </div>
                
            </div>
            
        </div>
    </header> 
    
    
    
    <section id="banner" class="banner">
        <div class="container">
            <div class="row">
                <div class="main_banner_area text-center">
                    <div class="col-md-5 col-sm-5 col-md-offset-7 col-sm-offset-7">
                        <div class="single_banner_text wow zoomIn" data-wow-duration="1s">
                            <p>Seek it out!!!</p>
                            
                            <div class="separetor"></div>
                        </div>
                    </div>
                    
                    
                    <div class="scrolldown">
                        <a href="#special" class="scroll_btn"></a>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    
    

    
    <section id="features" class="features sections">
        <div class="container">
            <div class="row">
                <div class="features_content text-center">
                    <div class="col-md-4">
                        <div class="sinle_features wow slideInUp" data-wow-duration="1s">
                            <img src="images/icon01.png" alt="" />
                            <h5>Restaurant list</h5>
                            <p>>Here you will able to find your desired type of restaurant & its location just by one click. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sinle_features wow slideInUp" data-wow-duration="1.5s">
                            <img src="images/icon3.png" alt="" />
                            <h5>Booking</h5>
                            <p>you can confirm your seat in your fabourite restaurant by booking system & you just have to sign up for our site.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sinle_features wow slideInUp" data-wow-duration="2s">
                            <img src="images/icon4.png" alt="" />
                            <h5>Payment</h5>
                            <p>Are you a little bit tensed about the payment?No tension at all!!You can do it through your credit or debit card!  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="special" class="special sections">
        <div class="container">
            <div class="row">
                <div class="head_title text-center wow slideInLeft" data-wow-duration="1.5s">
                    <h2>Restaurant list</h2>
                    <div class="separetor"></div>
                </div>
                <div class="main_special text-center wow slideInUp" data-wow-duration="3s">
                    
                    <div class="col-md-2 col-sm-3 col-xs-6 single_special">
                        <div class="single_special_img">
                            <img src="images/barcode 2no.png" alt="" />
                            <div class="single_special_overlay text-center">
                                <h3>Chittagong</h3>
                                <div class="overlay_separetor"></div>
                                
                                <p>2no.gate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 single_special">
                        <div class="single_special_img">
                            <img src="images/peninsula.jpg" alt="" />
                            <div class="single_special_overlay text-center">
                                <h3>Peninsula</h3>
                                <div class="overlay_separetor"></div>
                            <p>chittagong</p>
                                <p>opposite of Younesco center</p>
                            </div>                          
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 single_special">
                        <div class="single_special_img">
                            <img src="images/kfc.png" alt="" />
                            <div class="single_special_overlay text-center">
                                <h3>Chittagong</h3>
                                <div class="overlay_separetor"></div>
                                
                            </div>                          
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 single_special">
                        <div class="single_special_img">
                            <img src="images/tava.png" alt="" />
                            <div class="single_special_overlay text-center">
                                <h3>Chittagong</h3>
                                <div class="overlay_separetor"></div>
                                
                                
                            </div>                          
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 single_special">
                        <div class="single_special_img">
                            <img src="images/handi.png" alt="" />
                            <div class="single_special_overlay text-center">
                                <h3>Chittagong</h3>
                                <div class="overlay_separetor"></div>
                            
                                
                            </div>                          
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 single_special">
                        <div class="single_special_img">
                            <img src="images/errante.png" alt="" />
                            <div class="single_special_overlay text-center">
                                <h3>Chittagong</h3>
                                <div class="overlay_separetor"></div>
                                
                                
                            </div>                          
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 single_special">
                        <div class="single_special_img">
                            <img src="images/meridian.png" alt="" />
                            <div class="single_special_overlay text-center">
                                <h3>Chittagong</h3>
                                <div class="overlay_separetor"></div>
                                
                            </div>                          
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 single_special">
                        <div class="single_special_img">
                            <img src="images/randevu.png" alt="" />
                            <div class="single_special_overlay text-center">
                                <h3>Chittagong</h3>
                                <div class="overlay_separetor"></div>
                                
                                
                            </div>                          
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 single_special">
                        <div class="single_special_img">
                            <img src="images/radisson.png" alt="" />
                            <div class="single_special_overlay text-center">
                                <h3>chittagong</h3>
                                <div class="overlay_separetor"></div>
                            
                                
                            </div>                          
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 single_special">
                        <div class="single_special_img">
                            <img src="images/broast.png" alt="" />
                            <div class="single_special_overlay text-center">
                                <h3>Chittagong</h3>
                                <div class="overlay_separetor"></div>
                            
                                
                            </div>                          
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 single_special">
                        <div class="single_special_img">
                            <img src="images/sharma.png" alt="" />
                            <div class="single_special_overlay text-center">
                                <h3>Chittagong</h3>
                                <div class="overlay_separetor"></div>
                                
                            </div>                          
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6 single_special">
                        <div class="single_special_img">
                            <img src="images/roof.png" alt="" />
                            <div class="single_special_overlay text-center">
                                <h3>Chittagong</h3>
                                <div class="overlay_separetor"></div>
                                
                                <p>mehedibag</p>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    
    <section id="abouts" class="abouts sections">
        <div class="container">
            <div class="row">
                <div class="main_abouts">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single_abouts wow slideInRight" data-wow-duration="2s">
                            <div class="head_title text-center">
                                <h2>About us</h2>
                                <div class="separetor"></div>
                            </div>
                            
                            <p>Sometimes we can't decide which restaurant we can visit right now.Moreover we can't find proper seat in restaurants after going there.To solve these problems we are here for you.You can choose your fabourite restaurant & book seats as you need just by signing up.You just have to pay 10% of your restaurant bill in advance.</p>
                            <p>Restaurant owners can update their restaurants' information,seat capacity by their own id in our site.</p>
                            
                    </div>
                    
                    <div class="col-md-5 col-sm-5 col-md-offset-7 col-sm-offset-7">
                        <div class="single_abouts wow slideInLeft" data-wow-duration="2s">
                            <img src="images/banner.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                
                <div class="col-sm-5 col-sm-offset-7 col-xs-10 col-xs-offset-2">
                    <div class="contact_area wow slideInLeft" data-wow-duration="2s">
                        <div class="head_title text-center">
                            <h2>Comment Us!!!</h2>
                            <div class="separetor"></div>
                        </div>
                        
                        <div class="main_contact_content">
                            
                            
                            <div class="contact_form_area">
                                <h3>Opinion form</h3>
                                <form action="#" id="formid">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="first name">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="comment" rows="3" placeholder="comment"></textarea>
                                            </div>
                                            
                                            
                                        </div>

                                        <div class="form_btn_area text-center">
                                            <a href="" class="btn">Submit</a>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="copyright_text_area">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single_footer text-right wow zoomIn" data-wow-duration="2s">
                            <p>Made with <i class="fa fa-heart"></i> by CSE.CU. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single_footer text-right">
                            
                            <div class="footer_socail wow zoomIn" data-wow-duration="1.5s">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    


    
    <div class="scrollup">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    
    
    
    
    

    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    
    <script type="text/javascript" src="js/script.js"></script>
    
    <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
    
    <script type="text/javascript" src="js/nivo-lightbox/nivo-lightbox.min.js"></script>
    
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>
    
    
    
    <script type="text/javascript" src="js/jquery-easing/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/wow/wow.min.js"></script>
