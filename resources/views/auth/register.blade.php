@extends('layout.logreg')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@endsection

@section('content')
<div class="container">
    <h4 class="judul">Register!</h4> 
    <form action="{{ route('register') }}" method="post">
      @csrf
      <div class="field">
        <input autocomplete="off" id="logemail" placeholder="name" class="input-field" name="name" type="text">
      </div>
      @error('email')
        <span class="text text-danger">{{$message}}</span>  
      @enderror
      <div class="field">
        <input autocomplete="off" id="logemail" placeholder="Email" class="input-field" name="email" type="email">
      </div>
      <div class="field">
        <input autocomplete="off" id="logemail" placeholder="nim" class="input-field" name="nim" type="text">
      </div>
      <div class="field">
        <input autocomplete="off" id="logpass" placeholder="Password" class="input-field" name="password" type="password">
      </div>
      <button class="btn" type="submit">Login</button>
      <a href="{{route ('login')}}" class="btn-link">Sudah Punya Akun</a>
    </form>

  </div>
@endsection