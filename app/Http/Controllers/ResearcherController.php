<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Paper;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ResearcherController extends Controller
{
    public function index(){
        if(Auth:: id()){
            $usertype = Auth()-> user() -> usertype;
            // $userid = Auth()-> user() -> userid;
            if ($usertype == 'user'){
                return view('home.index');
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

        return redirect()->back();
    }
    public function display(){
        $data = Paper:: all();

        return view('display_paper',compact('data'));
    }
    public function download($file){
        return response()->download(public_path('my_files/'.$file));

    }
    public function view($file){
        $my_file = $file;
        return view('view_file',compact('my_file'));

    }
}
