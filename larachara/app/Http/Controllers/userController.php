<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Emp;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
   function get(){
    return emp::all();
   }


   function add(Request $req){
      $rule = array(
         "name" =>  'required | min:5 |max:10',
         "section" => 'email | required'
      );


      $val = Validator::make($req->all(),$rule);

      if($val->fails() ){
         return $val->errors();

      }else{

      $emp = new Emp();
      $emp->name = $req->name;
      $emp->section=$req->section;
      $emp->address=$req->address;

      if($emp->save()){
         return "done";
      }else{

         return "please try again";
      }
      }
    }
    function update(Request $req){
      $emp= Emp::find($req->id);
      $emp->name = $req->name;
      $emp->section=$req->section;
      $emp->address=$req->address;
      if($emp->save()){
         return "done";
      }else{

         return "please try again";
      }

    }
    function delete($id){
      $emp = Emp::find($id);
      $emp->delete();
    }
    function search($name){
      $emp = emp::where('name','like',"%$name%")->get();
      return ["resullt"=>$emp];
    }

    
}
