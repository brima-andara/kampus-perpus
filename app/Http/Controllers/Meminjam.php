<?php

namespace App\Http\Controllers;

use App\Models\Meminjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Meminja extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        Meminjam::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('login')->with('success', 'Your account has been successfully created.');
    }

}
