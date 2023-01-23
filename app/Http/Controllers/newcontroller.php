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
// set cookie
// public function index(){
//     return response(view('view'))->withCookie(cookie('language', 'fr', 120));
//  }

    //------------------------------------------------------------------------------------------------------
// public function index(Request $req){
//         // dd($req);
//         $req->path();
//         return view('view');
// }

    //-----------------------------------------------------------------------------------------

    //deleting cooking

//  public function index(Request $req){
//     $cookie = \Cookie::forget('language');
//     return view('view');
//  }
//-------------------------------------------------------------------------------------
    public function index(Request $req)
    {
        // dd($req);

        // dd($req->path());

        // dd($req->url());

        // if($req->isMethod('GET')){
        // return "this is get method";
        // }

        // $value = $req->header('X-Header-Name','default');
        // dd($value);

        // if ($req->hasHeader('X-Header-Name')) {
        // dd('Header present');
        // }
        // dd($req->bearerToken());
        // dd($req->ip());
        dd($req->getAcceptableContentTypes());
        // // return view('view');
    }
    //-------------------------------------------------------------------------------------
    // public function contenttype(request $request)
    // {
    //     if ($request->accepts(['text/html', 'application/json'])) {
    //         return "accepted";
    //     }

    // }

    // public function foreachtry(){
    //     // $number=range(1,10);

    //     $data = array('name' => 'arun', 'lastname' => '21', 'greeting' => 'welcome');
    //     return view('view',compact('data'));

    //     // return view('view',compact('number'));
    // }
    //------------------------------------------------------------------------------------------------------
    // public function response(){
    //      $header =  response('hello')->header('content-type', 'text/plain');
    //     return $header;
    // }

}
