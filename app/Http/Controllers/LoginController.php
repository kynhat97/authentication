<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Hash;
use App\User;
use DB;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{

    public function getLogin() {
    	return view('login');
    }
    public function postLogin(Request $request) {
        $rules = [
            'name' => 'required|string|max:255',
            'password' => 'required|min:8',
            
        ];
        $messages = [
            'name.required' => 'name là trường bắt buộc',
            'name.name' => 'name không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
            
           
           

        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $name = $request->input('name');
            $password = $request->input('password');
            /*$account_type=$request->input('account_type');,'account_type'=>$account_type==1*/

            if( Auth::attempt(['name' =>$name, 'password' =>$password])) 
            {
                
                return redirect()->intended('tabledata');
               
            
            } else { 
                return redirect()->intended('CreateAccount');
            }
        }



        
    }   	
}