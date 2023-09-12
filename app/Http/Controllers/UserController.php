<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // $request->all();
        // $request->name;
        // $name = "Helo";
        // $list = array("Volvo", "BMW", "Toyota");
        // return view('welcome', compact("name", "list"));
        $users = User::all();
        return ($users);
    }
    public function create(array $data)
    {
        // dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}