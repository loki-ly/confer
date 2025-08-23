<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Models\Paper;
use PhpParser\Node\Expr\FuncCall;

class AdminController extends Controller
{
    public function index(){
        if(Auth:: id()){
            $usertype = Auth()-> user() -> usertype;
            if ($usertype == 'user'){
                return view('home.index');
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

        return view('display_paper',compact('data'));
    }
    public function home(){
        return view('home.index');
    }
}
