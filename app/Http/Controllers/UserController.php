<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller{

  public function index(){
      $Users = User::all();

      return response()->json($Users);
  }

  public function getUser($id){
      $User = User::find($id);

      return response()->json($User);
  }

  public function createUser(Request $request){
      $User = User::create($request->all());
      return response()->json($User);
  }

  public function deleteUser($id){
      $User = User::find($id);
      $User->delete();

      return response()->json(array('deleted' => true));
  }

  public function updateUser(Request $request,$id){
      $User = User::find($id);
      $User->update($request->all());

      return response()->json($User);
  }

  public function login(Request $request) {
      $User = User::where('email', '=' , $request->input('email'))->first();

      if(!$User) {
          return response()->json(array('connected' => false));
      }
      if ($request->input('password') == $User->password) {
          return response()->json(array('connected' => true));
      }
      else{
          return response()->json(array('connected' => false));
      }

  }
}

?>
