<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coupon;
use Session;

class CouponController extends Controller
{
    public function indexcoupon(){
		
		
		return view('Backend.add_coupon');
		
		
	}
	
	public function newcoupon(Request $request){
		
		$request->validate([
		
		
		'coupon_name' => 'required',
		'dis' => 'required',
		
		
		
		
		
		
		
	],[
	
	'coupon_name.required' => 'Please Input Coupon Name',
		'dis.required' => 'Please Input Discount',
	
	
	
	]);
		
		$coupon =new coupon();
		$coupon->Coupon_name=$request->coupon_name;
		$coupon->Discount=$request->dis;
		$coupon->save();
			  return back()->with('success','Successfully Coupon Added');

		
		
	}
	
	
	
	public function showcoupon(){
		
		$coupon=coupon::get();
	return view('Backend.show_coupon',compact('coupon'));	
	
	}
	
	
	public function updatecoupon(Request $request){
		
		$coupon=coupon::find($request->cid);
		$coupon->status	=$request->coupon_status;
		$coupon->save();
					  return back()->with('update','Now Coupon are applicable');

		
		
		
		
	}
	
	public function coupon_delete($coupon_id){
		
		$coupon=coupon::find($coupon_id);
		$coupon->delete();
	return back()->with('delete','Coupon Data remove');

	}
	
	
	
	public function applynewcoupon(Request $request){
		
		$check=coupon::where('Coupon_name',$request->code)->first();
		if($check){
			Session::put('coupon',[
			'Coupon_name' => $check->code,
			'Discount' => $check->Discount,
			
			]);
	return back()->with('success','Succefully Coupon Added ');

		}
		else{
			
				return back()->with('invaild','Sorry, this Coupon is not valid. Please check for any typing errors. ');

			
		}
		
	}
	
	
	
	
	
	
	
	
}
