<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        //first check if you are loggedin and admin user ...
        // if(!Auth::check()){
        //     return redirect('/login');
        // }
        return view('welcome');


    }
    public function admin(Request $request){
        //first check if you are loggedin and admin user ...
        // if(!Auth::check()){
        //     return redirect('/login');
        // }
        return view('admin');


    }





    public function login(Request $request) {
		if(User::where('email', $request->email)->where('admin_type','!=',0)->count() == 0){

            return response()->json([
                'success' => false,
                'admin'=>'not-found'
            ],401);

		}
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password ])) {

			return response()->json([
                'success' => true
            ],200);
		 }
		 else{

			return response()->json([
                'success' => false
            ],401);
		 }

	}

    public function uploadImages(Request $request){
        request()->file('img')->store('uploads');
        $pic = $request->img->hashName();
        // $pic = "/uploads/$pic";
        $url = env('APP_URL');
        $pic= $url."uploads/$pic";
        return response()->json([
            'image' => $pic
        ], 200);
    }
}
