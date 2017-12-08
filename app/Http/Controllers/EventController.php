<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class EventController extends Controller{

  public function index(){
      $Events = Event::all();

      return response()->json($Events);
  }

  public function getEvent($id){
      $Event = Event::find($id);

      return response()->json($Event);
  }

  public function createEvent(Request $request){
      $Event = Event::create($request->all());

      return response()->json($Event);
  }

  public function deleteEvent($id){
      $Event = Event::find($id);
      $Event->delete();

      return response()->json('deleted');
  }

  public function updateBook(Request $request,$id){
      $Event = Event::find($id);
      $Event->fk_user = $request->input('fk_user');
      $Event->name = $request->input('name');
      $Event->image = $request->input('image');
      $Event->save();

      return response()->json($Event);
  }
}

?>
