<?php

namespace App\Http\Controllers;
use App\infoMsg;
use App\Mail\NewMessageNotification;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
class MessageController extends Controller
{
    public function mail()
    {
        return view('emails.email');
    }
    public function create()
    {
        return view('snapmail.mail');
    }

    public function store(Request $request, Message $msg, infoMsg $infoMsg)
    {
        $request->validate([
            'message' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required',
            'name' => 'required'
        ]);
        $msg->message = $request->message;
        $msg->code = sha1(Str::random(30));
        $msg->photo_url =time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('../storage/app/public/img'),$msg->photo_url);
        $infoMsg->name = $request->name;
        $infoMsg->email =  $request->email;
        $infoMsg->code = $msg->code;
        Mail::to($request->email)->send(new NewMessageNotification($infoMsg));

        $msg->save();
        $success = 'Email envoyé avec succes';
        return view('snapmail.mail',[
            'succes'=> $success
        ]);
    }
    public function destroy($id)
    {
        $msgTemporary = Message::where('code', $id)->get();

        if (count($msgTemporary) > 0)
            $diffHumans = $msgTemporary['0']->created_at->diffForHumans();
        else $diffHumans = "";

        Message::where('code', $id)->delete();
        //File::delete("../storage/app/public/img/".$msgTemporary['0']['photo_url']);
        return view('message/msg',[
            'msgTemporary'=> $msgTemporary,
            'diffHuman' => $diffHumans
        ]);
    }
}
