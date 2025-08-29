<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Paper;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index(){
        if(Auth:: id()){
            $usertype = Auth()-> user() -> usertype;
            if ($usertype == 'user'){
                $room = Room:: all();
                return view('home.index',compact('room'));
            }
            else if ($usertype == 'admin'){
                return view('admin.index');
            }
            else if ($usertype == 'researcher'){
                return view('researcher.index');
            }
            else if ($usertype == 'speaker'){
                return view('speaker.index');
            }
            else{
                return redirect() -> back();
            }
        }
    }
    public function display(){
        $data = Paper:: all();

        return view('display_data',compact('data'));
    }
    public function home(){
        $room = Room:: all();
        return view('home.index',compact('room'));
        // return view('home.index');
    }



     public function create_room(){
        return view('admin.create_room');

     }
     public function add_room( Request $request){
        $data = new Room;
        $data-> room_title = $request->title;
        $data-> description = $request->description;
        $data-> price = $request->price;
        $data-> seat = $request->seat;
        $data-> ac = $request->ac;
        $data-> room_type = $request->type;

        $image = $request->image;
        if ($image)
        {
            $imagename= time().'.'.$image->getClientOriginalExtension()  ;
            $request->image -> move('room',$imagename);
            $data-> image = $imagename;
        }
        $data->save();
        

        return redirect() -> back() -> with('message','Conference Added Successfully');

     }
     public function view_room(){
         $data = Room:: all();

        return view('admin.view_room',compact('data'));
        // return view('');

     }
     public function room_delete($id){
        
        $data = Room:: find($id);
        $data->delete();
        return redirect() -> back() -> with('message','Conference Deleted Successfully');
     }
     public function room_update($id){
        $data = Room:: find($id);
        return view('admin.update_room',compact('data')) ;
        
        
        // $data->delete();
        // return redirect() -> back();
     }
      public function edit_room( Request $request, $id){
        $data = Room:: find($id);
        $data-> room_title = $request->title;
        $data-> description = $request->description;
        $data-> price = $request->price;
        $data-> seat = $request->seat;
        $data-> ac = $request->ac;
        $data-> room_type = $request->type;

        $image = $request->image;
        if ($image)
        {
            $imagename= time().'.'.$image->getClientOriginalExtension()  ;
            $request->image -> move('room',$imagename);
            $data-> image = $imagename;
        }
        $data->save();
        

        return redirect() -> back() -> with('message','Conference Updated Successfully');

     }
     public function bookings(){
        $data = Booking:: all();
        return view('admin.booking',compact('data'));
     }
    //  public function all_messages(Request $request){
    //     $contact= new Contact;
    //     $contact->name=$request->name;
    //     $contact->email=$request->email;
    //     $contact->phone=$request->phone;
    //     $contact->message=$request->message;

    //     $contact->save();
    //     return redirect()->back()->with('message','Message Sent Successfully. We will contact you soon');
    //  }
        public function all_messages(){
            $data = Contact:: all();
            return view('admin.all_message',compact('data'));
        }
    
     
}
