<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = User::query()->latest()->get();


        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        User::create($request->validate([
            'name' => ['required', 'min:5', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]));


        return redirect('/users');
    }

    public function show(User $user){
        
        return view('users/show', [
            'user' => $user,
        ]);
    }
}
