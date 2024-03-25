<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', ['users' =>$users]);
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        User::create($request->all());
        return redirect('/user');
    }

    public function destroy($id){
        User::where('id', $id)->delete();
        return redirect('/user');
    }
}
