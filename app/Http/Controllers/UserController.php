<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){
        return view('profil',[
            'user' => 'Agus',
            'status' => 'Mahasiswa Akhir'
        ]);
   }

   public function simpan(Request $request) 
   {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
   }
}
