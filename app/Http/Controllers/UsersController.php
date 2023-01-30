<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $users=User::get();
        return view('users.index')->with(compact('users'));
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        
        return redirect()->back();
    }
    public function edit($id){
        $user = User::find($id);
//        dd($user);
        return view('users.edit')->with(compact('user'));
    }
    public function update(Request $request,$id){
//        dd($request->all());
        $user = User::find($id);
        $user->update(['first_name' => $request->first_name, 'last_name' => $request->last_name ]);
        return redirect()->to('/users');

    }
}
