<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show($id) {
        return view('users', ['user' => User::findOrFail($id)]);
    }

    public function edit($id){
        return view('editUser', ['user' => User::findOrFail($id)]);
    }
    public function userEdited(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->city = $request->input('city');
        $user->save();
    }
}
