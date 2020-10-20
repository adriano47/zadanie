<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show() {
        $users = User::all();
        return view('users')->with(compact('users'));
    }

    public function edit($id){
        return view('editUser', ['user' => User::findOrFail($id)]);
    }
    public function userEdited(Request $request){
        $user = User::find($request->input('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->city = $request->input('city');
        $user->save();
        return view('userEdited');
    }
}
