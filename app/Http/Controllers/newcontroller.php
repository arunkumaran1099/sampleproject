<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newcontroller extends Controller
{

//to redirect the named route

    // public function view(Request $req){
    //     $name = $req->input('name');
    //     $name = $req->input('password');
    //     return redirect()->route('routename');
    // }
    // public function show(){
    //     return 'heelow';
    // }
//--------------------------------------------------
//to redirect named route and contoller but having doubt
// public function view(Request $req){
//     $name = $req->input('name');
//     $pwd = $req->input('password');
//     return redirect()->route('routename', ['name' => $name, 'pwd' => $pwd]);
//     // return redirect()->route('routename');
// }
// public function show($name,$password){
//     return $name . $password;
// }
//------------------------------------------------------------

//using middleware to  check logged person is admin are not.

// public function show(){
//         return view('home');
// }

// public function list(request $request){
//     $name = $request->input('name');
//     $pwd = $request->input('pwd');

//     //checking in contoller if uer
// //    if($name=='admin'){
// //     return view('dashboard');
// //    }
// //    else{
// //             return redirect()->route('namedroute');
// //    }
// return "success";

// }
//---------------------------------------------------------------------------------------------------
//to check middleware with fully classified name
// public function show(){
//         return view('home');
// }

// public function list(request $request){
//     $name = $request->input('name');
//     $pwd = $request->input('pwd');

// return "success";

// }
//----------------------------------------------------------------------------------------------------------


}
