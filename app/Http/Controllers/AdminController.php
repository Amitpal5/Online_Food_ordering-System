<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use\App\Models\user;
use App\Models\Dish;
use App\Models\Catagory;
use App\Models\Reservation;
use App\Models\feedback;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    public function index(){
         		//$reservation=Reservation::latest()->take(3)->get();

		return view('Backend.master');
	}
	public function user(){
		$user=User::get();

		return view('Backend.user',compact('user'));
	}
	public function delete($id){
		 $dle=  user::find($id);
	  $dle->delete();
	  return back()->with('delete','Successfully User Data Remove');
		
		
	}
	public function reservation(){
		
		$res=Reservation::latest('id')->paginate(3);
		return view('Backend.reservtion',compact('res'));

	}
	
	
	
	public function product_details($food_id){
		
		$cata=Dish::where('id','=',$food_id)->get();
		$dish=DB::table('dishes')->join('catagories','dishes.Cat_id' , '=' ,'catagories.Cat_id' )
		->select('dishes.*','catagories.Cat_Name')->first();
		
		return view('food_details',compact('cata','dish'));
		
		
		
	}
	
	
	
	public function add_feedback(Request $request){
		
		$feedback= new feedback();
		$feedback->f_id=$request->id;
		$feedback->name=$request->name;
		$feedback->email=$request->email;
		$feedback->message=$request->message;
		$feedback->rating=$request->rating;
		$feedback->date	=$request->date;
		$feedback->save();
		
			  return back()->with('Success','Thanks For Giving Your Valuable Feedback');

		
		
	}
	
	
	
	public function show_feedback(){
		
		$feedback=feedback::get();
		$dish=DB::table('dishes')->join('catagories','dishes.Cat_id' , '=' ,'catagories.Cat_id' )
		->select('dishes.*','catagories.Cat_Name')->first();
		
		
		return view('backend.feedback',compact('feedback','dish'));
		
		
		
	}
	
	public function update_feedback(Request $request){
		
		
		$feedback=feedback::find($request->fid);
		
		$feedback->status=$request->feedback_status;
		$feedback->save();
		
		return back()->with('update','Feedback are showing now');

		
		
		
		
		
		
	}
	
	
	
	public function feedback_delete($feedback_id){
		
		$feedback=feedback::find($feedback_id);
		$feedback->delete();
		
				return back()->with('delete','Feedback data remove');

		
	}
	
	
	public function front_review_show($review_id){
		
				$cata=Dish::where('id','=',$review_id)->first();
              $re=$review_id;
		$feedback=feedback::where('f_id','=',$review_id)->where('status' ,'=','1')->get();


		return view('review',compact('cata','feedback','re'));
		
		
		
	}
	
	
	
	
	
	
	
	
}


