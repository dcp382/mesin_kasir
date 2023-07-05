<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function getuser(){
        $user = User::all();
        return $user;
    }

    public function index(){
        $user = $this->getuser();
        return view('user.index',compact('user'));
    }

    public function form_tambah(){
        return view('user.form_tambah');
    }

    public function store(Request $request){
        // dd();
        // $request->validate([
        //     'name' => ['required'],
        //     'email' => ['required'],
        //     'role' => [' required'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('admin.user');
    }
}
