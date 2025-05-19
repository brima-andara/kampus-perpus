<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @yield('css')
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
/>
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"> --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
  <title>@yield('tittle', 'perpus kampus')</title>
</head>
<body>
  <nav>
    <div class="kiri">
      <img src="{{ asset('images/logo.png') }}" data-route="{{ route('list.book') }}" alt="">
    </div>

    @if (auth()->check() && auth()->user()->role == 'admin')
    <a class="nav-dashboard" href="{{ route('dashboard') }}">Dashboard</a>
    @endif


    <form action="{{ route('logout') }}" method="post">
    @csrf
    @method('delete')
    <button class="kanan">
      <p>keluar</p>
      <p>{{auth()->user()->name}}</p>
      <i class="fa-solid fa-user"></i>
    </button>
    </form>
    
  </nav>
  <main>
    @yield('content')
  </main>
  @yield('js')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.1.3/reveal.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
  <script src="{{ asset("js/reveal.js")}}"></script>
  <script src="{{ asset("js/layout.js")}}"></script>
</body>
