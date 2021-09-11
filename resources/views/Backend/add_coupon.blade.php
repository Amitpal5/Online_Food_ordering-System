@include('Backend.page.header');

  <body>
  <body>
	
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

           @include('Backend.page.navbar');

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                               @include('Backend.page.sidebar');

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                      <div class="row">

                                            <h1>Add Coupon</h1>
	                                     
                                    
                                                
                                            <!-- statustic and process start -->
                                           <div class="container">
										  <form action="{{route('addnew_coupon')}}" method="POST">
                                            @csrf
											 @if(session('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	@endif
		
										   <div class="row  mt-4">
											 <div class=" col-12 col-md-8">
	                                     <div class="from-group">
										 <label for="">Coupon Name</label>
										 <input type="text" class="form-control @error('coupon_name') is-invalid @enderror" name="coupon_name" placeholder="Enter Coupon Name" />
										 @error('coupon_name')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror
										 </div>
										  <div class="from-group">
										 <label for="">Discount</label>
										 <input type="text" class="form-control @error('dis') is-invalid @enderror" name="dis" placeholder="Enter Discount" />
										 @error('dis')
                           <strong class="text-danger">{{$message}}</strong>
                                  @enderror
										 </div>
	                                     </div>
										
											</div>
											<input type="submit" class=" mt-3 btn btn-primary" value="Submit" />
										   	                                        </form>

										   </div>

                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('Backend.page.footer');