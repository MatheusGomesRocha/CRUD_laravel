<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function viewCrud() {
        $users = User::Read();

        return view('crud')->with('users', $users);
    }

    public function postInsert(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');

        if($name && $email) {
            User::Insert($name, $email);
            return redirect()->back();
        } else {
            return 'error';
        }
    }
}
