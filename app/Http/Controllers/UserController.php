<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();


        return view("users.index", ["users"=>$users]);
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}