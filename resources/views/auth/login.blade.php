@extends('layout.logreg')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@endsection

@section('content')
<div class="container">
    <h4 class="judul">Log In!</h4> 
    <form action="{{ route('login.action') }}" method="post">
        @csrf
      <div class="field">
        <input autocomplete="off" id="logemail" placeholder="Email" class="input-field" name="email" type="email">
      </div>
      <div class="field">
        <input autocomplete="off" id="logpass" placeholder="Password" class="input-field" name="password" type="password">
      </div>
      <button class="btn" type="submit">Login</button>
      <a href="{{ route('register.index') }}">register</a>
    </form> 
    @if (session('success'))
        
    @endif
  </div>
@endsection