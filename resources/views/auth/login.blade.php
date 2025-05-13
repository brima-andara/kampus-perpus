@extends('layout.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@endsection

@section('content')
<div class="card">
    <h4 class="title">Log In!</h4> 
    
    <form action="{{ route('login.action') }}" method="post">
        @csrf
      <div class="field">
        <input autocomplete="off" id="logemail" placeholder="Email" class="input-field" name="email" type="email">
      </div>
      <div class="field">
        <input autocomplete="off" id="logpass" placeholder="Password" class="input-field" name="password" type="password">
      </div>
      <button class="btn" type="submit">Login</button>
      <a href="#" class="btn-link">Lupa Password?</a>
    </form>
    <a href="{{ route('register.index') }}">aoeuaoeu lregis</a>
    @if (session('success'))
        
    @endif
  </div>
@endsection