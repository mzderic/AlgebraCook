<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	
	public function __construct(){
		$this->middleware('auth');
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request) {
		
		if ($request->isMethod('post')) {
			$this->validate($request, array('password' => 'required|min:6'));
			
			$user = auth()->user();
			$user->password = bcrypt($request->all()['password']);
			$user->save();
		}
    
        return view('profile');
    }

}