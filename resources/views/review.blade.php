



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
                            <h1>Review</h1>
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

<section class="review" style="padding:30px;">
<h3 class="text-center mt-4">Give Your Valuable Feedback</h3>
<div class="container p-4">
<form action="{{route('review.feedback')}}" method="POST">
@csrf
<div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_name">Name</label>
				
					<input type="hidden" name="id" value="{{$cata->id}}" />

                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name *" required="required" data-error="Firstname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="form_message">Feedback *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Feedback..... *" rows="4" required data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
			<div class="col-md-12">
			<span>Your rating</span>
			<table class="table">
			<thead>
    <tr>
      <th scope="col">1 Star</th>
      <th scope="col">2 Star</th>
      <th scope="col">3 Star</th>
      <th scope="col">4 Star</th>
      <th scope="col">5 Star</th>
      
    </tr>
  </thead>
  <tbody>
  <tr>
			<td><label for="rating-1"></label>
			<input type="radio" name="rating" value="1" /></span></td>
			<td><label for="rating-2"></label>
			<input type="radio" name="rating" value="2" /></span></td>
			<td><label for="rating-3"></label>
			<input type="radio" name="rating" value="3" /></span></td>
			<td><label for="rating-4"></label>
			<input type="radio" name="rating" value="4" /></span></td>
			<td><label for="rating-5"></label>
			<input type="radio" name="rating" value="5" /></span></td>
			
			<input type="hidden" name="date" value="{{date('d M-Y')}}" />
			</div>
			</tr>
			</tbody>
			</table>
            <div class="col-md-12">
              <input type="submit" class="btn btn-success btn-send" value="Send message">
            </div>
          </div>
         @if(session('Success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('Success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	@endif 
        </div>











</form>



</div>




</div>

</section>
<style type="text/css">




.

</style>


    <div class="container">
    				
		<div class="row">
			<div class="col-sm-12">
				<div class="rating-block">
					<h4>Average user rating</h4>
					@if(App\Models\feedback::where('f_id',$re)->where('status' ,'=','1')->first())
					@php
				
				       $feedback=App\Models\feedback::where('f_id','=',$re)->where('status' ,'=','1')->get();
		$feed=App\Models\feedback::where('f_id','=',$re)->where('status' ,'=','1')->sum('rating');
		
      $row=App\Models\feedback::where('f_id','=',$re)->where('status' ,'=','1')->count();

       (double) $avg=(int)$feed/(int)$row;
	    @endphp
					<h2 class="bold padding-bottom-7">{{$avg}}<small>/ 5</small></h2>
												@for ($i = 1; $i <=$avg; $i++)
                  
					<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
	  <span class="fa fa-star" aria-hidden="true"></span>
					</button>
					@endfor
					@else
						<h2>No Review</h2>
					@endif
					
				</div>
			</div>
			</div>
				
		<div class="row">
			<div class="col-sm-7">
				<hr/>
				
			@foreach($feedback as $data)
				<div class="review-block">
					<div class="row">
						<div class="col-sm-5">
							<div class="review-block-name"><a href="#">{{$data->name}}</a></div>
							<div class="review-block-date">{{$data->date}}<br/></div>
						</div>
						<div class="col-sm-7">
							<div class="review-block-rate">
								@for ($i = 1; $i <= $data->rating; $i++)
                            <i class="fa fa-star" style="font-size:20px; color:#EFF606;"></i>
                            @endfor
							
								
							</div>
							
							<div class="review-block-description">{{$data->message}}</div>
						</div>
					</div>
					<hr/>
					
					
					
					
							
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		
    </div> <!-- /container -->






















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