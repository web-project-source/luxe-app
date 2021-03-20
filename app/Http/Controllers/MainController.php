<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class MainController extends Controller
{
 function index()
    {
     $products= DB::table('products')->get();
     return view('mainpage',['products' => $products]);
    }
  function login()
    {
     return view('login');
    }
 function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return back();
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    function successlogin()
    {
     $products= DB::table('products')->get();
     return view('mainpage',['products' => $products]);
    }

    function logout()
    {
     Auth::logout();
     return redirect('/');
    }
    function feedback()
    {
     return view('feedback');
    }
      function contact()
    {
     return view('contact');
    }
 }
