<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
     function registration()
    {
     return view('registration');
    }
     public function create(Request $request){
        $rules = [
			'name' => 'required|string|min:3|max:255',			
			'email' => 'required|string|email|max:255',
                        'password' => 'required|string|min:3|max:255'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('registration')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$user = new User;
                                $user->name = $data['name'];
                                $user->email = $data['email'];
                                $user->password = Hash::make($data['password']);
                                $user->remember_token = Str::random(10);
                                $user->role_id = 3;
				$user->save();
				return redirect('registration')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('registration')->with('failed',"operation failed");
			}
		}
    }

}
