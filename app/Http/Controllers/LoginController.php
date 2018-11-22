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
            'username' => 'required|string|max:255',
            'pass_word' => 'required|min:8',
            
        ];
        $messages = [
            'username.required' => 'username là trường bắt buộc',
            'username.name' => 'username không đúng định dạng',
            'pass_word.required' => 'Mật khẩu là trường bắt buộc',
            'pass_word.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
            
           
           

        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $username = $request->input('username');
            $pass_word = $request->input('pass_word');
            /*$account_type=$request->input('account_type');,'account_type'=>$account_type==1*/

            if( Auth::attempt(['username' =>$username, 'pass_word' =>$pass_word])) 
            {
                
                return redirect()->intended('tabledata');
               
            
            } else { 
                return redirect()->intended('CreateAccount');
            }
        }



        
    }   	
}