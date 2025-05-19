@extends('layout.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/ulasan.css') }}">
@endsection
@section('content')
<body>
  <div class="warna">
    <section id="main">
      <h1 id="title"> Ulasan  {{$book->title}}</h1>
          
      <p>Lorem ipsum dolor sit</p>
    </section>
    <figure id="img-div">
      <img id="image" src="{{ url('storage/list_buku/' . $book->img) }}"/>
      <figcaption id="img-caption">
        <p>Lorem ipsum dolor sit amet consec aohun naoeuh aoneuthhneutetur adipisicing.</p>

      </figcaption>
    </figure>
    <h4 class="sub-judul">Lorem ipsum dolor sit amet.</h4>
    <div class="batas">
        <form action="{{ route('store.ulasan', ['id' => $book->id]) }}"method="POST">
        @csrf
    @if (auth()->check() && auth()->user()->role == 'user')
          <input type="text" name="komentar" class="input" placeholder="Berikan ulasan">    
          <button type="submit" hidden></button>
    @endif

        </form>
    </div>
    @foreach ($komentar as $komen)

    <div class="container">
      <div class="card">
        <div class="header">
          <div class="avatar">
            <span>MH</span>
          </div>
        <div class="info">
          <h3> {{$komen->name}}</h3>
          <p class="role">{{$komen->nim}}</p>
        </div>
      </div>
      <p class="review">
        {{ $komen->komentar }}
      </p>
      <a href="#" class="read-more">Read more</a>
    </div>
    @endforeach
  </div>

    <br /><br />

    <h1 class="link">Lorem ipsum dolor aoeu saoeu uuuuu it amet consectetur adipisicing <a id="tribute-link" href="#" target="_blank">link</a></h1>
  </div>
</body>
@endsection
  
