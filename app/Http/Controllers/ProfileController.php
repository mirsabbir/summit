<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

    public function store(Request $request){
        
        $request->session()->flash('status', 'Settings saved');
        return view('profile');
    }

    public function index(){
        return view('profile');
    }
}
