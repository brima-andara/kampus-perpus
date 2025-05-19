<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Meminjam;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $book = Book::all();
        $book = Book::where('title','LIKE',"%$search%")->get();

        $meminjam = Meminjam::all();


        $merah = "color: red";

        foreach ($meminjam as $pinjam) {
            $pinjam->tanggal_pinjam = Carbon::parse($pinjam->tanggal_pinjam)->addDays(3)->format('Y-m-d');
        }

        return view('dashboard',compact('book','meminjam','merah'));
    }
    
    public function indexDetail(Request $request)
    {

        return view('detail');
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
        $request->validate([
            'title'=> 'required|max:12', 
            'stok' => 'required|integer|min:0'
        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->synopsis = $request->synopsis;
        $book->kategori = $request->kategori;
        $book->seri = $request->seri;
        $book->stok = $request->stok;

        $file = $request->file('img');
        $path = $request->title . '.' . $file->getClientOriginalExtension();
        Storage::disk('list_buku')->put($path, file_get_contents($file));

        $book->img = $path;
        $book->save();



        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($seri)
    {
        // Cari peminjaman berdasarkan seri
        $pinjam = Meminjam::where('seri', $seri)->first(); // Ambil data pertama yang sesuai dengan seri
        // dd($pinjam);
        if ($pinjam) {
            // Jika peminjaman ditemukan, ambil buku terkait dengan seri yang sama
            $book = $pinjam->book; // Mengakses relasi book() yang sudah didefinisikan di model Meminjam
    
            // Menampilkan informasi buku
            dd($book->title); // Menampilkan judul buku
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    public function editBuku($id)
    {
        $book = Book::findOrFail($id);
        return view('edit', compact('book'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateBuku(Request $request, $id)
    {
            
        // $request->validate([
        //     'title'=> 'required|max:12', 
        //     'stok' => 'required|integer|min:0',

        //     'seri' => 'required|unique',
        //     'edukasi' => 'required|in:Edukasi,Non Edukasi',
        // ]);

        $book = Book::findOrFail($id);
        $book->update([
            'title' => $request-> title,
            'stok' => $request-> stok,
            'seri' => $request-> seri,
            'edukasi' => $request-> edukasi,
            
        ]);
        $file = $request->file('img');
        $path = $request->title . '.' . $file->getClientOriginalExtension();
        Storage::disk('list_buku')->put($path, file_get_contents($file));

        $book->img = $path;
        $book->save();
        $book->kategori = $request->kategori;

        return redirect() -> route('dashboard')->with('success', 'User berhasil diperbarui');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::findOrFail($id) -> delete();
        return redirect() -> route('dashboard')->with('success', 'User berhasil diperbarui');
    }
    public function destroyMeminjam($seri)
    {
        $book = Book::where('seri',$seri)->firstOrFail();
        $book->increment('stok', 1);

        
        Meminjam::where('seri',$seri) -> delete();
        return redirect() -> route('dashboard')->with('success', 'User berhasil diperbarui');
    }

    public function getBook($seri,$nim) {
        $book = Book::where('seri',$seri)->firstOrFail();
        $user = User::where('nim',$nim)->firstOrFail();
        $meminjam = Meminjam::where('seri',$seri)->firstOrFail();
        // return response()->json([$book,$user]);
                return view('detail',compact('book','user','meminjam'));

    }
  
}
