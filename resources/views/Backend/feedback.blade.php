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
 
                                            <h1>Show Customer Feedback</h1>
											<table class="table table-bordered">
											
						@if(session('update'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('update')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('delete'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('delete')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif					
											
											
											
  <thead>
    <tr>
      <th scope="col">SL.No</th>
     <th scope="col">Food Name</th>
	 <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Status</th>
	  
      <th scope="col">Action</th>
     
    </tr>
  </thead>
 
  @php($i=1)
  @foreach($feedback as $value)
  <tbody>
  <tr>
  <td>{{$i++}}</td>
   <td>{{$dish->Dish_name}}</td>

  <td>{{$value->name}}</td>
  <td>{{$value->email}}</td>
  <td>{{$value->message}}</td>
      <td>{{$value->status == '0' ? 'unpublished':'Published'}}</td>
 
	    <td>
		<a data-toggle="modal" data-target="#edit{{$value->id}}"><i class="fa fa-edit" style="font-size:30px;"></i></a>
  <!-- Button trigger modal -->
<div class="modal fade" id="edit{{$value->id}}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
	  <form action="{{route('update.feedback')}}" method="POST">
	  @csrf
        <input type="hidden" name="fid" value="{{$value->id}}" />
		<div class="form-group">
		<label for="">Status</label>
		<select class="form-control" name="feedback_status">
		
		<option value="0">Unpublished</option>
		<option value="1">published</option>
		
		</select>
		</div>
      <div class="modal-footer">
        
		<input type="submit" class="btn btn-primary" value="Update" />
		</form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
	<a href="delete_feedback/{{$value->id}}"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
  </td>
 
  
  
  </tr>
 
    @endforeach
  </tbody>
</table>

                                            <!-- statustic and process start -->
                                           <div class="container">
										   
										   
										   
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