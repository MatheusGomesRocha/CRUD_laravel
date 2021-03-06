<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $fillable = ['name', 'email'];

    public static function redUser() {
        return DB::table('users')->get();
    }
    

    public static function insertUser($name, $email) {
        return DB::table('users')
        ->insert([
            'name' => $name,
            'email' => $email,
        ]);
    }

    public static function updateUser($name, $email) {
        return DB::table('users')->where('email', '=', $email)->update([
            'name' => $name,
        ]);
    }

    public static function deleteUser($email) {
        return DB::table('users')->where('email', '=', $email)->delete();
    }
}
