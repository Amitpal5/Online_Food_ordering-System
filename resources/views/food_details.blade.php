<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Best Restautant Management Software">
    <meta name="keywords" content="restaurant,food,reservation">
    
    <title>ZNM Restaurant – Symphony of dining</title>
    <link rel="shortcut icon" type="image/ico" href="assets/img/icons/2021-05-05/i.html">

    <!--====== Plugins CSS Files =======-->
    <link href="{{asset('Frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('Frontend/css/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/css/themify-icons/themify-icons.css')}}" rel="stylesheet">
    <link href=" {{asset('Frontend/css/animate.css')}}" rel="stylesheet">
    <link href=" {{asset('Frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href=" {{asset('Frontend/css/metisMenu.min.css')}}" rel="stylesheet">
    <link href=" {{asset('Frontend/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/css/clockpicker.min.css')}}" rel="stylesheet">

    <!--====== Custom CSS Files ======-->
    <link href="{{asset('Frontend/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('Frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/css/custom/custome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Frontend/css/custom/jquery.rateyo.min.css')}}"/>
    <script src="{{asset('Frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('Frontend/js/product.js.php')}}" ></script>
    <script src="{{asset('Frontend/js/category.js.php')}}" ></script>
 	 <!-- for whatsapp modules -->
     <!-- end whatsapp modules -->
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> 
    <![endif]-->
</head>

<body>
   
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!--START HEADER TOP-->
    <header class="header_top_area">
        <div class="header_top">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                     <a class="navbar-brand" href="#">ZNM</a>

                   
                    <div class="sidebar-toggle-btn">
                     <a class="nav-link" href="menu.html" id="navbarDropdown3" style="display:inline;color: #fff;">
                                    <i class="ti-shopping-cart"></i><span class="badge badge-notify my-cart-badge" style=";color: #fff; background: #28a745; border-radius: 50px; width: 22px;line-height: 22px; padding:0;">0</span>
                                </a>
                        <button type="button" id="sidebarCollapse" class="btn">
                            <i class="ti-menu"></i>
                        </button>
                        
                    </div>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        	                            <li class="nav-item  active">
                                <a class="nav-link " href="{{url('/')}}" >Home</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
                                                        <li class="nav-item  ">
                                <a class="nav-link " href="{{route('about.page')}}" >About Us</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
                                                        <li class="nav-item  ">
                                <a class="nav-link " href="{{route('menu.page')}}" >Our Menu</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
                                                        <li class="nav-item  ">
                                <a class="nav-link " href="{{route('reservation.page')}}" >Reservation</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
							           
                                                       
                                                     
                                                        <li class="nav-item  ">
                                <a class="nav-link " href="menu.html" >Cart</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
                                                       
                            
                            <li class="nav-item">
                                <a class="nav-link" href="menu.html" id="navbarDropdown3">
                                    <i class="ti-shopping-cart"></i><span class="badge badge-notify my-cart-badge" id="itemnum"></span>
                                </a>
                                <!--<div class="dropdown-menu cart_box" aria-labelledby="navbarDropdown3">
                                    <p>Your Cart is Empty</p>
                                </div>-->
                            </li>
							 @if (Route::has('login'))
                                   @auth
                                
                                                        <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                     <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
																	 <a class="dropdown-item" href="mylogin.html">Dashboard</a>
                                                                       <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                                                                    </div>
                                
                            </li>
						   @else
							<li class="nav-item  ">
                                <a class="nav-link " href="{{ route('login') }}" >Log in</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
							@if (Route::has('register'))
							<li class="nav-item  ">
                                <a class="nav-link " href="{{ route('register') }}" >Register</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
							@endif
							@endauth
							@endif
                        </ul>
                    </div>
                </nav>
                <!-- /. Navbar -->
                <nav id="sidebar" class="sidebar-nav">
                    <div id="dismiss">
                        <i class="ti-close"></i>
                    </div>
                    <ul class="metismenu list-unstyled" id="mobile-menu">
                    	                        <li>
                            <a href="{{url('/')}}" >Home </a>
                                                     </li>
                                                <li>
                            <a href="{{route('about.page')}}" >About Us </a>
                                                     </li>
                                                <li>
                            <a href="{{route('menu.page')}}" >Our Menu </a>
                                                     </li>
                                                <li>
                            <a href="{{route('reservation.page')}}" >Reservation </a>
                                                     </li>
                                                 @if (Route::has('login'))
                                   @auth
                                
                                                        <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                     <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
																	 <a class="dropdown-item" href="mylogin.html">Dashboard</a>
                                                                       <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                                                                    </div>
                                
                            </li>
						   @else
							<li class="nav-item  ">
                                <a class="nav-link " href="{{ route('login') }}" >Log in</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
							@if (Route::has('register'))
							<li class="nav-item  ">
                                <a class="nav-link " href="{{ route('register') }}" >Register</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                 </div>
                                
                            </li>
							@endif
							@endauth
							@endif
                                                
                                                <li>
                            <a href="menu.html" aria-expanded="false">Cart </a>
                                                     </li>
                                               
                    </ul>
                </nav>
                <div class="overlay"></div>
            </div>
        </div>
         <!--START SLIDER PART-->

 <div class="page_header menu_banner_bg" style="background-image:url(asset/Frontend/image/menu-banner.jpg);" >
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="page_header_content text-center sect_pad">
                            <h1>Food Details</h1>
                            <ul class="m-0 nav pt-0 pt-lg-3 justify-content-center">
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fa fa-angle-right"></i></li>
                                <li class="active"><a href="#">Menu</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		

<!------ Include the above in your HEAD tag ---------->
<style type="text/css">









</style>


        <div class="container">
        	<div class="row" style="margin-top:30px; margin-bottom:20px;">
			@foreach($cata as $data)
               <div class="col-md-7">
			   <img src="{{asset('Image/'.$data->Dish_Img)}}" class="img-fluid" alt="MIXED PAKURA" width="600px" height="600px">

                </div>
				
                <div class="col-md-5" style="border:0px solid gray">
				<form action="{{route('add_to_cart')}}" method="post" enctype="multipart/form-data">
									@csrf
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{$data->Dish_name}}</h3>    
                    <p style="font-size:20px;">Catagoty Name : {{$dish->Cat_Name}}</p>
                      <input type="hidden" name="id" value="{{$data->id}}" />

                    <h3 style="margin-top:5px;">{{$data->price}}</h3>
        
                    <!-- Detalles especificos del producto -->
                   
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>CANTIDAD</small></h6>                    
                        <div>
                         <input type="number" name="quantity"  min="1" value="1"><br>
                            
							 <input type="submit" class="btn btn-danger a" value="ADD TO CART" style="margin-top:20px;">       

							 
                        </div>
                    </div>                
        
                    <!-- Botones de compra -->
                                                         
                </div>
</form>				
        @endforeach
              		
            </div>
        </div>        
    </body>
</html>
<div class="col-md-9 ml-4">
<nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a href="" class="nav-link" style="font-size:20px;"><span class="sr-only">(current)</span>Description</a></li>
                        <li class="nav-item"><a href="{{url('front_review/'.$data->id)}}" class="nav-link" style="font-size:20px;">Review</a></li>
                       
                    </ul>
					</nav>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px; font-size:18px; text-align:justify;">
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci nulla pellentesque dignissim enim sit. Tortor at risus viverra adipiscing at in tellus. Ante metus dictum at tempor commodo ullamcorper a lacus vestibulum. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue.    
                           
                        </p>
                        <p style="font-size:18px; text-align:justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    </div>
                </div>		
            </div>

























<section class="map_area">
        <div class="container-fluid">
            <div class="row map_area">
                <div class="map"><p><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14599.578237069936!2d90.3654215!3d23.8223482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1583411739085!5m2!1sen!2sbd" width="300" height="150" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p></div>
                <div class="office_address wow fadeIn" data-wow-delay="0.3s">
                                    <h2 class="mb-4">Our Store</h2>
                    <p>House No. 02, Road No.32, Mirpur Road,<br> Dhanmondi, Dhaka-1209,<br> Bangladesh.<br><br>01916061927,<br>01397144419,<br>0248113086<br><br> zarin@gmail.com</p>                    <button class="simple_btn"><span>Get Directions</span></button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Area -->
        <!--Footer Area-->
    <div class="footer-area">
        <div class="container">
            <div class="row footer-inner">
            	                <div class="col-lg-4">
                    <div class="footer-logo-area mb-5 mb-lg-0">
                        
                        <div class="footer-init">
                        <p class="text-justify">ZNM Is A Popular Instrument of Folk & Sufi Music In Kashmir Which Came to India From Iran. However, It’s Origins Are Traced to the shat Tantri Veena ( 100 Stringed Lute ) or the Pinaki Veena Which Is Mentioned In India’s Oldest Religious Work. This Ancient Tool of Music, When Played In The Hands of Devoted Artist Evokes Scintillating Melodies Of Timeless Purity.</p> 
                        </div>
                      <div class="footer-social-bookmark">
                            <ul>
                                                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
								                                <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
								                                <li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
								                                <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
								                                <li><a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
								                                
                            </ul>
                    </div>
                    </div>
                </div>
                                <div class="col-lg-4">
                    <div class="footer_widget mb-5 mb-lg-0">
                        <h4>Opening Time</h4>
                        <div class="footer_widget_body">
                        <p><strong>Saturday - Friday</strong>   12:00 PM - 10:30 PM</p>
<p> </p>                        </div>
                    </div>
                </div>
                                <div class="col-lg-4">
                    <div class="footer_widget">
                        <h4>Contact Us</h4>
                        <div class="footer_widget_body">
                            <div class="footer-address">
                              <p>House No. 02, Road No.32, Mirpur Road,<br> Dhanmondi, Dhaka-1209,<br> Bangladesh.<br><br>01916061927,<br>01397144419,<br>0248113086<br><br> zarin@gmail.com</p>                            </div>
                        </div>
                    </div>
                </div>
                            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="footer-copyright">
                            © 2021 Zarin,Nafija,Molie.
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="terms.html">Terms of use</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer Area-->
    
    <a href="#0" class="cd-top">
        <i class="ti-arrow-up"></i>
    </a>

    
    <!-- for whatsapp modules --> 
    <!-- end whatsapp modules -->
    <!--====== SCRIPTS JS ======-->
    <script src="{{asset('Frontend/js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('Frontend/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('Frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Frontend/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('Frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('Frontend/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('Frontend/js/clockpicker.min.js')}}"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDHeh9zEbXo-YCWJcicXH2VRwVwAf_tq0"></script>
    <script src="application/views/themes//assets_web/plugins/gmap/map-active.js"></script>-->
        <!--===== ACTIVE JS=====-->
    <script src="{{asset('Frontend/js/custom.js')}}"></script>
        <script>
	$(function(){
		$('#navbarTogglerDemo03 ul li a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
		$('#navbarTogglerDemo03 ul li').click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active')	
		})
	});
 
    </script>
    
    
</body>

</html>