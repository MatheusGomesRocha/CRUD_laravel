<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function viewCrud() {
        // $users = User::Read();      // Função criada no Model

        /* ------------- OR -------------- */

        $users = User::all();           // Usando ELOQUENT, equivalente a mesma função acima, pega todos os dados da tabela User

        return view('crud')->with('users', $users);
    }

    public function insert(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');

        if($name && $email) {
            // User::Insert($name, $email);     // Função criada no Model

            /* ------------- OR -------------- */

            User::create(['name' => $name, 'email' => $email]);     // Usando ELOQUENT, equivalente a mesma função acima, insere Nome e Email na tabela User

            return redirect()->back();
        } else {
            return 'error';
        }
    }

    public function update(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');

        if($name && $email) {
            User::Insert($name, $email);
            return redirect()->back();
        } else {
            return 'error';
        }
    }

    public function delete($email) {
        if($email) {
            User::DeleteUser($email);
            return redirect()->back();
        } else {
            return 'error';
        }
    }
}
