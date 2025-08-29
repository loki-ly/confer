<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Paper;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Discuss;

class ResearcherController extends Controller
{
    public function index(){
        if(Auth:: id()){
            $usertype = Auth()-> user() -> usertype;
            // $userid = Auth()-> user() -> userid;
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
            // else if ($usertype == 'researcher'){
            //     return view('speaker.index');
            // }
            else if ($usertype == 'speaker'){
                return view('speaker.index');
            }
            else{
                return redirect() -> back();
            }
        }
    }
    public function upload(Request $request){
        $data = new Paper();
        $data-> title = $request->title;
        $data-> description = $request->description;
        $data-> userid = Auth::id();// userid
        $data-> price = $request->price;
        


        $file = $request->file;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request-> file->move('my_files',$filename);
        $data-> file = $filename;
        $data->save();

        return redirect()->back()->with('message','Paper Uploaded Successfully');
    }
    public function display(){
        $data = Paper:: all();

        return view('products.display_data',compact('data'));
    }
    public function download($file){
        return response()->download(public_path('my_files/'.$file));

    }
    public function view($file){
        $my_file = $file;
        return view('products.view_file',compact('my_file'));

    }
    public function discuss_paper(Request $request, $id){
        $paperid = $id;
        $data = new Discuss();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->paper_id = $paperid;
        $data-> userid = Auth::id();// userid
        $data-> comment = $request->comment;

        
        //  
        // $data->message=$request->message;
        // $data-> title = $request->title;
        // $data-> description = $request->description;
        // $data-> userid = Auth::id();// userid
        // $data-> price = $request->price;
        $data->save();

        $data2 = Discuss:: all();
        // return redirect()->back()->with('message','Comment Added Successfully');
        return view('products.all_discussions',compact(['data2','paperid'])) ->with('message','Comment Added Successfully');
        
    }
    public function comment($id){
        // $data = Discuss:: all();
        return view('products.comment',compact('id')) ;

        // return view('products.comment',compact('data'));
    }
    public function all_discussions($id){
            $paperid = $id;
            $data2 = Discuss:: all();
            return view('products.all_discussions',compact(['data2','paperid'])) ->with('message','Comment Added Successfully');
        }
}
