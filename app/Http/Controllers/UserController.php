<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function viewCrud() {
        // $users = User::readUser();      // Função criada no Model

        /* ------------- OR -------------- */

        $users = User::all();           // Usando ELOQUENT, equivalente a mesma função acima, pega todos os dados da tabela User

        return view('crud')->with('users', $users);
    }

    public function insert(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');

        if($name && $email) {
            // User::insertUser($name, $email);     // Função criada no Model

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

        $user = User::where('email', '=', $email)->first();

        if($name) {
            if($user) {
                // User::updateUser($name, $email);     // Função criada no Model

                User::where('email', $email)->update(['name' => $name]);        // Usando ELOQUENT, equivalente a mesma função acima, Edita o nome de um usuário com email igual ao email enviado.
                
                return redirect()->back();
            } else {
                return 'Email errado';
            }
        } else {
            return 'error';
        }
    }

    public function delete($email) {
        if($email) {
            // User::deleteUser($email);        // Função criada no Model

             /* ------------- OR -------------- */

            User::where('email', '=', $email)->delete();        // Usando ELOQUENT, equivalente a mesma função acima, Deleta um usuário que o email seja igual ao email enviado via URL

            return redirect()->back();
        } else {
            return 'error';
        }
    }
}
