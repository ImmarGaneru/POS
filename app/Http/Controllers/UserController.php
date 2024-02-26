<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id, $name){
        return view('user_profile')
            ->with('id', $id)
            ->with('name', $name);
    }
}
