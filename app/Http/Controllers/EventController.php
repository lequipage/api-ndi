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


  public function updateEvent(Request $request,$id){
      $Event = Event::find($id);
      $Event->update($request->all());


      return response()->json($Event);
  }

  public function getCurrentEvent($id_user){
      $date = date("Y-m-d h:m:s");
      $Event = Event::where('fk_id_user_owner', '=', $id_user)
                    ->where('event_date_start', '>=', $date)
                    ->get();
      //
      return response()->json($Event);
  }

  public function getPassedEvent($id_user){
      $date = date("Y-m-d h:m:s");
      $Event = Event::where('fk_id_user_owner', '=', $id_user)
                    ->where('event_date_start', '<', $date)
                    ->get();
      //
      return response()->json($Event);
  }

  public function sendEmailEvent(Request $request) {


        $toEmail = $request->input('email');
        // $fromUser = $request->input('fk_id_user_owner');
        $fromUser = "Truc";

        $fromMail = 'contact@choisis-ton-sam.fr';
        $boundary = str_replace(" ", "", date('l jS \of F Y h i s A'));
        $subjectMail = $fromUser." vous invite à sa prochaine murge, seras-tu le prochain Sam ?";

        $contentHtml = 'hazejhbjkdfnsdf';

        $headersMail = '';
        $headersMail .= 'From: ' . $fromMail . "\r\n" . 'Reply-To: ' . $fromMail . "\r\n";
        $headersMail .= 'Return-Path: ' . $fromMail . "\r\n";
        $headersMail .= 'MIME-Version: 1.0' . "\r\n";
        $headersMail .= "Content-Type: multipart/alternative; boundary = \"" . $boundary . "\"\r\n\r\n";
        $headersMail .= '--' . $boundary . "\r\n";
        $headersMail .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
        $headersMail .= 'Content-Transfer-Encoding: base64' . "\r\n\r\n";
        $headersMail .= rtrim(chunk_split(base64_encode($contentHtml)));

        try {
            if (mail($toEmail, $subjectMail, "", $headersMail)) {
                print_r($toEmail);
                return response()->json(array('send' => true));
            } else {
                return response()->json(array('send' => false));
            }
        } catch(Exception $e) {
            $msg = $e->getMessage();
        }
  }
}

?>
