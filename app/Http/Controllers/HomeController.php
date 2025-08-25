<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;

class HomeController extends Controller
{
    public function room_details($id){
        $room=Room::find($id);
        return view('home.room_details',compact('room'));
    }
    public function add_booking(Request $request,$id){
        // $room=Room::find($id);
        $data= new Booking;
        $data->room_id= $id;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        // $booking->startDate=$request->startDate;
        // $booking->endDate=$request->endDate;
        // $data->room_id=$room->id;

        $data->save();
        return redirect()->back()->with('message','Room Booked Successfully. We will contact you soon');
    }
    public function contact(Request $request){
        $contact= new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->message=$request->message;

        $contact->save();
        return redirect()->back()->with('message','Message Sent Successfully. We will contact you soon');
    }
}
