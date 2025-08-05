<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

class ResearcherController extends Controller
{
    public function index(){
        if(Auth:: id()){
            $usertype = Auth()-> user() -> usertype;
            if ($usertype == 'user'){
                return view('dashboard');
            }
            // else if ($usertype == 'admin'){
            //     return view('admin.index');
            // }
            else if ($usertype == 'researcher'){
                return view('researcher.index');
            }
            // else if ($usertype == 'speaker'){
            //     return view('speaker.index');
            // }
            else{
                return redirect() -> back();
            }
        }
    }
}
