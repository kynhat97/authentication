<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\account;
use App\Electricity_Water;
use App\customer;
use App\bill;
use App\unit;
use App\room;
use App\User;
use App\arduino;
use App\configuration;
use Validator;
use Auth;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;
class PageController extends Controller
{
    public function getIndex()
	{
		return view('index');
	}


	public function getTabledata()
	{
		return view('Tabledata');
	
	}

	public function create_account(Request $req)
	{
		return view('CreateAccount');
	}



	public function store_account(Request $request)
	{
		$rules = [

    		'name' => 'required|string|max:255|min:1',	
    		'password' => 'required|min:8	',
    		'account_type'=>'required|min:1',
    		'account_type'=>'required|max:1'
    	];
    	$messages = [
    		
    		'name.required' => 'name là trường bắt buộc',
            'name.name' => 'name không đúng định dạng',
    		'pass_word.required' => 'Mật khẩu là trường bắt buộc',
    		'pass_word.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',

    		'account_type.required' => 'account_type là trường bắt buộc',
    		'account_type.min' => 'account_type phải chứa ít nhất 1 ký tự',
    		'account_type.max' => 'account_type phải chứa nhiu nhất 1 ký tự'
    	];
    	
     	 $validator = Validator::make($request->all(), $rules, $messages);

        	



        	$user= new User();
	        $user->name=$request->name;
	      
	        $user->password=Hash::make($request->password);
	        $user->account_type=$request->account_type;
	        $user->save();
        	return redirect()->intended('CreateAccount');

        	

}

	
	
	public function getTablebasic()
	{


		$new_electricity_water=Electricity_Water::select('*')->get();
		$new_room = Room::select('*')->get();
		$new_customer = Customer::select('*')->get();
		
		$new_bill = Bill::select('*')->get();
		$new_unit = Unit::select('*')->get();
		$new_arduino = Arduino::select('*')->get();
		$new_configuration = Configuration::select('*')->get();

		return view('Tablebasic',compact('new_electricity_water','new_customer','new_bill','new_room','new_account','new_unit','new_arduino','new_configuration'));
	}

	

}
