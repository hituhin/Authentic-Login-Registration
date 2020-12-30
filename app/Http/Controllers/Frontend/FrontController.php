<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;

class FrontController extends Controller
{
    public function index(){
        $data = [];
        $data['day'] = '';
        $data['links'] = [
            'facebook' => 'https://facebook.com',
            'twitter' =>  'https://twitter.com',
            'google' =>   'https://google.com',

        ];
        return view('welcome',$data);
    }
    public function contact(){
        return view('contact');
    }

    public function login($id, request $request){

      echo $request->ip();  
      echo $request->userAgent();  

      echo 'Showing details of user id:' .$id;

    }
     

    public function showRegistrationFrom(){

    return view('register');
    }
  
    public function processRegistration(Request $request )
    {
      $this->validate($request,[
         'Email' => 'required|email',
         'Password'=>'required|min:8'
      ]);

     if ($request->hasFile('photo')) {

       print_r($request->photo->store('app/public'));
       $file = $request->file('photo');
       $size =  File::size($file);
       
      
       session()->Flash ('message','Registration Successful');
       return redirect()->back(); 

    
    }

     

    //   return $request->only(['Email','Password']);
    //  using input method:
    //  echo  $request->input('Email'); 
    //  echo '</br>';
    //  echo   $request->input('Password'); 

    //  using request helper Function
    //  echo  request()->input('Email'); 
    //  echo '</br>';
    //  echo   request()->input('Password');

    }

}
