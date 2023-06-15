<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\View\View;
class  HomeController extends Controller
{
    //
    public function index(){

        if(Auth::id()){
            $usertype=Auth()->user()->usertype;

            if($usertype=='user'){
                return view('user.homepage');
            }
            else if($usertype=='admin'){
                return view('admin.adminhome');
            }
            else{
                return redirect()->back(); 
            }
        } 


    }
  
    public function homepage(){
        return view('home.homepage');
    }

    public function header(){
        return view('home.header');
    }

    public function post_page(){
        return view('user.homepage');
    }
    public function user_post(Request $request): View
    {
        return view('user.homepage',[
            'user'=>$request->post(),
            
        ]);
        
        return redirect()->back();

    }
}
