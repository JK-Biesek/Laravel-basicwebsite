<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
  public function getData(){
    $data['data'] = Db::table('messages')->get();
  }

    public function submit(Request $request)
    {
      $this->validate($request, [
        'name'  => 'required',
        'email' => 'required',
      ]);
    //Create a messages
    $message = new Message;
    $message->name = $request['name'];
    $message->email = $request['email'];
    $message->message = $request['message'];
    $message->id = $request['id'];
    //save our messages
    $message->save();
    return redirect('/')->with('status','Message Sent');
  }
  public function delete ($id){
    \DB::table('messages')->where('id',$id)->delete();
    return redirect('/messages')->with('delete','Message Deleted');
  }

  public function getMessage(){
      $message_all = Message::all();

      return view('messages')->with('message_all',$message_all);
    }
}
