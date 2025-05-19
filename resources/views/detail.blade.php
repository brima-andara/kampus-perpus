@extends('layout.layout')
@section('css')
        <link rel="stylesheet" href="{{ asset('css/detail.css') }}">

@endsection
@section('content')

<body>
        <div class="container">
                <div class="left-side">
                    <p><strong>Nama:</strong> {{$user->name}}</p>
                    <p><strong>NIM:</strong> {{$user->nim}}</p>
                    <p><strong>No HP:</strong> {{$meminjam->nomor_hp}}</p>
                    <p><strong>Email:</strong> {{$user->email}}</p>
                    <p><strong>Tanggal Pinjam:</strong> {{$meminjam->tanggal_pinjam}}</p>
                </div>
                
                <div class="center-side">
                    <p><strong>Judul Buku:</strong> {{$book->title}}</p>
                    <p><strong>No Seri:</strong> {{$book->seri}}</p>
                    <p><strong>Kategori:</strong> {{$book->kategori}}</p>
                </div>

                <div class="right-side">
                    <img src="{{ url('storage/list_buku/' . $book->img) }}" alt="Book Image">
                </div>
            </div>

    </body>

            
            



@endsection

    