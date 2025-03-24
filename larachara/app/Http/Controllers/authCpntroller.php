<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class authCpntroller extends Controller
{
   function loging(Request $req){
$user = User::all();
    return $user;

   }
   // A singup function for add input in database by api request:

   function singup(Request $req){
      $input = $req->all(); //get api reqst from  body/json
      $input["password"]= bcrypt($input["password"]); //encrypt the input passwords by bcrypt 

      $user= User::create($input);//create a user in user table by input data
      $success['token']=$user->createToken('Myapp')->plainTextToken; //create a token from $user
    
      return ["result"=>$success]; //return token number

    
   }
}
