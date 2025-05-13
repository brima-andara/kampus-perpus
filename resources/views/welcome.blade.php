
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
        <img id="popup-img" src="" alt="" style="width: 100%; height: 100%">
      </div>
    </div>
    <div class="kanan">
      <ul>
        <li>synopsis buku</li>
        <li><a href="{{ route('ulasan.buku') }}">baca online</a></li>
        <li>pinjam buku fisik</li>
      </ul>
      <div class="desc">
        <h1 id="popup-title">Judul</h1>
        <p id="popup-synopsis">Synopsis</p>
        <button><a href="#">back</a></button>
      </div>
      <div class="transaksi">
        <h1>Form Lorem</h1>
        <p>isi form untuk meminjam</p>
        <div class="login-box">
          <form action="{{ route('meminjam.book') }}" method="POST">
            @csrf
            <div class="user-box">
              <input type="text" required="">
              <label>NIM</label>
            </div>
            <div class="user-box">
              <input type="text" required="">
              <label>No Hp</label>
            </div>
            <div class="user-box">
              <input type="date" required="">
              <label>Tanggal Pinjam</label>
            </div>
            <button> SEND<span></span></button>
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
        <p>{{ $item->title }} ------ {{$item->stok}}</p>
      </div>
    @endforeach
  </div>
</div>
@endsection
@section('js')
<script src="{{ asset("js/java.js")}}"></>
@endsection