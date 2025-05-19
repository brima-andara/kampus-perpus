<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Meminjam;
use Illuminate\Http\Request;

class listController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $book = Book::where('title','LIKE',"%$search%")->get();
        $merah = "color: red";
        
        return view('welcome',compact('book','merah'));

    }
    
    public function meminjamBuku(Request $request)
    {
        // Validasi input
        // $request->validate([
        //     'nim' => 'required',
        //     'nomor_hp' => 'required',
        //     'tanggal_pinjam' => 'required',
        //     'book_id' => 'required|exists:books,id', 
        // ]);
    
        // Ambil data buku berdasarkan book_id
        $book = Book::find($request->book_id);
    
        // Cek apakah stok cukup untuk peminjaman
        if ($book->stok > 0) {
            // Lakukan pengurangan stok
            $book->decrement('stok', 1);
    
            // Simpan transaksi peminjaman
            Meminjam::create([
                'nim' => $request->nim,
                'nomor_hp' => $request->nomor_hp,
                'tanggal_pinjam' => $request->tanggal_pinjam,
                'book_id' => $request->book_id, // Menyimpan ID buku yang dipinjam
                'seri' => $book->seri
            ]);
            
            return redirect() -> route('list.book')->with('success', 'User berhasil diperbarui');

        } else {
            return response()->json(['error' => 'Stok buku tidak cukup.'], 400);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return response()->json($book); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
