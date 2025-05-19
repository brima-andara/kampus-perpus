
    {{-- <body class="antialiased"> --}}
@extends('layout.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/pop-up.css') }}">


@endsection
@section('content')
<div class="pop_up">
  <div class="exit_button" onclick="tutupPopup()">
    <i class="fa-solid fa-xmark fa-lg"></i>
  </div>
  <div class="flex">
    <div class="kiri" style="display: block">
      <div class="kiri-container">
        <img id="popup-img" src="" alt="" style="width: 100%; height: 100%;object-fit:contain">
      </div>
    </div>
    <div class="kanan">
      <ul>
        <li>synopsis buku</li>
        <li id="popup-ulasan"><a  href="#" data-route="{{ route('ulasan.buku', ['id' => ':id']) }}" >baca online</a></li>
        @if (auth()->check() && auth()->user()->role == 'user')

        <li>pinjam buku fisik</li>
        @endif
      </ul>
      <div class="desc">
        <h1 id="popup-title">Judul</h1>
        <p id="popup-synopsis">Synopsis</p>
        <button><a href="#">back</a></button>
      </div>
      <div class="transaksi">
        <h1>Pinjam</h1>
        <p>isi form untuk meminjam</p>
        <div class="login-box">
          <form action="{{ route('meminjam.book') }}" method="POST">
            @csrf
            <div class="user-box">
              @if (auth()->check() && !empty(auth()->user()->nim))
              <label>NIM</label>
                  <input type="text" name="nim"required="" value="{{ auth()->user()->nim }}" >
              @else
              <label>NIM</label>
              <input type="text" name="nim"required="">
              @endif
            </div>
            <div class="user-box">
              <input type="text" name="nomor_hp" required="">
              <label>No Hp</label>
            </div>
            <div class="user-box">
              <input type="date" name="tanggal_pinjam" required="">
              <label>Tanggal Pinjam</label>
            </div>
            <input type="hidden" name="book_id" id="book_id">
            <button class='buang-style-button' type="submit">
              <a> SEND<span></span></a>
            </button>
            <a class="kembali" href="#">Kembali<span></span></a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="blur" id="blur-section">
  <div class="search">
    <form action="">
      <input type="text" placeholder="find books" name="search"/>
    </form>
  </div>
  <div class="container">
    @foreach ($book as $item)
      <div 
        class="box"
        onclick="munculPopUp(this)"
        data-title="{{ $item->title }}"
        data-id="{{ $item->id }}"
        data-img="{{ url('storage/list_buku/' . $item->img) }}"
        data-synopsis="{{ $item->synopsis }}"
      >
        <img src="{{ url('storage/list_buku/' . $item->img) }}" alt="Buku">
        @if ($item->stok > 0)
        <p>{{ $item->title }} ------ {{$item->stok}}</p>
        @else
        <p style='{{($merah)}}'>{{ $item->title }} ------ {{$item->stok}}</p>
            
        @endif
      </div>
    @endforeach
  </div>
</div>
@endsection
@section('js')
<script src="{{ asset("js/java.js")}}"></>
@endsection