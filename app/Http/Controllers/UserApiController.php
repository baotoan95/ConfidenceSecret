<?php

namespace App\Http\Controllers;

use App\Exceptions\Handler;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use JWTAuth;
use App\User;
use JWTAuthException;

class UserApiController extends ApiController {
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }
   
    public function register(Request $request){
        try {
        $user = $this->user->create([
          'email' => $request->get('email'),
          'password' => bcrypt($request->get('password'))
        ]);
        } catch (Exception $e) {
            echo "error";
        }
        return response()->json(['status'=>true,'message'=>'User created successfully','data'=>$user]);
    }
    
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $token = null;
        try {
           if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['invalid_email_or_password'], 422);
           }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        return response()->json(compact('token'));
    }

    public function getAuth(Request $request){
        $user = JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    }
}
