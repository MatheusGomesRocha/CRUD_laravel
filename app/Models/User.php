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

    protected $table = 'crud_laravel';

    public static function Read() {
        return DB::table('users')->get();
    }
    

    public static function Insert($name, $email) {
        return DB::table('users')
        ->insert([
            'name' => $name,
            'email' => $email,
        ]);
    }

    // public static function Update($name, $email) {
    //     return DB::table('users')->where('email', '=', $email)->update([
    //         'name' => $name,
    //         'email' => $email,
    //     ]);
    // }

    // public static function Delete($name, $email) {
    //     return DB::table('users')->where('email', '=', $email)->delete();
    // }
}
