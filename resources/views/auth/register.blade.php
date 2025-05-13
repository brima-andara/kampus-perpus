@extends('layout.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@endsection

@section('content')
<div class="card">
    <h4 class="title">Register!</h4> 
    <form action="{{ route('register') }}" method="post">
      @csrf
      <div class="field">
        <input autocomplete="off" id="logemail" placeholder="name" class="input-field" name="name" type="text">
      </div>
      <div class="field">
        <input autocomplete="off" id="logemail" placeholder="Email" class="input-field" name="email" type="email">
      </div>
      @error('email')
        <span class="text text-danger">{{$message}}</span>  
      @enderror
      <div class="field">
        <input autocomplete="off" id="logemail" placeholder="nim" class="input-field" name="nim" type="text">
      </div>
      <div class="field">
        <input autocomplete="off" id="logpass" placeholder="Password" class="input-field" name="password" type="password">
      </div>
      <button class="btn" type="submit">Login</button>
      <a href="#" class="btn-link">Forgot your password?</a>
    </form>
    <a href="{{ route('login') }}"></a>

  </div>
@endsection