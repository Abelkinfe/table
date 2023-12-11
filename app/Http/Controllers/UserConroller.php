<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserConroller extends Controller
{
    public function store(Request $req)
    {
        $table=User::create([
            "name"=>$req->name,
            "email"=>$req->email,
            "password"=>bcrypt($req->password)
        ]);
         if ($table) {
            return "suuuuuuuiiiiiiuuuu";
        }
}
}