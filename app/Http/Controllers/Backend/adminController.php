<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin()
    {
        return view('admin');                                                                                                                                                      
    }
    //  dynamic routing veriable will be the first parameter of this function 
    public function user($id=" ", $name=" ")
    {
        echo $id ." " . $name; 
                                                                                                                                                    
    }
}
