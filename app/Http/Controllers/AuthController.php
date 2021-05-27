<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthModel;
class AuthController extends Controller
{
   public function registerController(Request $request){
    $request->validate([
        'user'=>'required',
         'pass'=>'required',
         'email'=>'required'
    ]);

    $data=[
         'username'=>$request->user,
         'password'=>$request->pass,
         'email'=>$request->email
    ];
     AuthModel::create($data);
     return view('login');
   }

//login function
    public function loginController(Request $request){
$request->validate([
    'user'=>'required',
    'pass'=>'required'
]);


        if($request->user!='' && $request->pass!=''){
                $userAuth=AuthModel::where('username',$request->user)
                ->where('password',$request->pass)
                ->get();


                if(count($userAuth)>0){
                            foreach($userAuth as $user)
                            {
                                        session(['userid'=>$user->id,'username'=>$user->username]);
                                        return redirect('/dashboard')/*->with(['username'=>$userID])*/;
                            }
                        }
                        else{
                            return redirect()->back();
                        }
                     }
                }
        }
