<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;

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
}
