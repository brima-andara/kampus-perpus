<?php

namespace App\Http\Controllers;

use App\Models\rc;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Komentar;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Ulasan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $book = Book::findOrFail($id);
        $komentar = Komentar::where("seri",$book->seri)->get();
        
        return view('ulasan', compact('book','komentar'));
    }

    public function tambah(Request $request,$id){
          $request->validate([
            'komentar' => 'string',
        ]);

        
        $nim = Auth::user()->nim;
        $nama = Auth::user()->name;
        $seri = Book::findOrFail($id)->seri;
        Komentar::create([
            'nim' => $nim,
            'name' => $nama,
            'komentar' => $request->komentar, 
            'seri' => $seri,
        ]);
            return redirect()->route('ulasan.buku', $id)->with('success', 'Your account has been successfully created.');


    }

             

}
