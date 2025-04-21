<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {{-- <link rel="stylesheet" href="style.css" /> --}}
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
    />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pop-up.css') }}">
        <title>perpustakaan</title>
    </head>
    <body class="antialiased">
      <div class="pop_up">
        <div class="exit_button">
          <i class="fa-solid fa-xmark fa-lg"></i>
        </div>
  
        <div class="flex">
          <div class="kiri" style="display: block">
            <div class="kiri-container"></div>
          </div>
          <div class="kanan">
            <ul>
              <li>synopsis buku</li>
              <li><a href="">baca online</a></li>
              <li>pinjam buku fisik</li>
            </ul>
            
            <div class="desc">
              <h1>lerm</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
                tenetur quam, debitis provident tempore recusandae dolorum dolores
                laboriosam pariatur consequuntur culpa ducimus odio!lorem40 Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Alias sit in,
                expedita consequuntur, culpa nesciunt voluptates ipsa accusamus
                saepe amet beatae exercitationem corrupti error dolore ut placeat
                officia cum nemo doloribus molestias! Quidem nemo accusamus
                aperiam suscipit in, atque magni aliquid, labore saepe, libero
                nobis quae facere unde qui.
              </p>
              <button>
                <a href="">back</a>
              </button>
            </div>
            <div class="transaksi">
              <h1 id="title">Form Lorem</h1>
              <p id="description">isi form untuk meminjam</p>
              {{-- <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
                tenetur quam, debitis provident tempore recusandae dolorum dolores
                laboriosam pariatur consequuntur culpa ducimus odio!lorem40 Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Alias sit in,
                expedita consequuntur, culpa nesciunt voluptates ipsa accusamus
                saepe amet beatae exercitationem corrupti error dolore ut placeat
                officia cum nemo doloribus molestias! Quidem nemo accusamus
                aperiam suscipit in, atque magni aliquid, labore saepe, libero
                nobis quae facere unde qui.
              </p> --}}
              <form id="survey-form">
                <label for="name" id="name-label">
                  <h1>name mahasiswa</h1>
                  <input id="name" type="text" placeholder="masukkan nama" required />
                </label>
                <label for="email" id="email-label">
                  <h1>e-mail</h1>
                  <input type="email" id="email" placeholder="masukkan email anda" required />
                </label>
                <label for="number" id="number-label">
                  <h1>NIM</h1>
                  <input type="number" name="number" id="number" placeholder="masukkan umur anda" required max="70" min="17" />
                </label>
                <label for="dropdown" id="dropdown">
                  <h1>Angkatan</h1>
                  <select name="dropdown" id="dropdown">
                    <option value="1">2020</option>
                    <option value="2">2021</option>
                    <option value="3">2022</option>
                  </select>
                </label>
                <p class="p-radio">pilih katagori anda</p>
                <button class="kembali">
                  <a href="#">back</a>
                </button>

                <button type="submit" id="submit">Kirim</button>
              </form>

            </div>
          </div>
        </div>
      </div>
      <div class="blur">
        <div class="search">
            <form action="">
              <input
                type="text"
                id="search"
                placeholder="find sheets"
                oninput="searchById()"
              />
              <!-- <input type="submit" name="" value="search"> </input> -->
            </form>
          </div>
          <div class="container">
            <div class="box" id="farewell">
              <img src="{{ asset('images/deemo-farewell.jpg')}}" alt= "Gambar"/>
              <p>Detail</p>
            </div>
            <div class="box" id="farewell">
              <img src="{{ asset('images/deemo-farewell.jpg')}}" alt= "Gambar"/>

              <a href="" target="_blank"
                >farewell
              </a>
            </div>
            <div class="box" id="farewell">
              <img src="{{ asset('images/deemo-farewell.jpg')}}" alt= "Gambar"/>

              <a href="" target="_blank"
                >farewell
              </a>
            </div>
          </div>
          </div>

      </div>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/reveal.js/4.1.3/reveal.min.js"></script>
      <script src="https://unpkg.com/scrollreveal"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="{{ asset("js/java.js")}}"></script>
      <script src="{{ asset("js/reveal.js")}}"></script>

    </body>
</html>

{{-- 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>ms</title>
  </head>
  <body>
    <div class="search">
      <form action="">
        <input
          type="text"
          id="search"
          placeholder="find sheets"
          oninput="searchById()"
        />
        <!-- <input type="submit" name="" value="search"> </input> -->
      </form>
    </div>
    <div class="container">
      <div class="box" id="farewell">
        <img src="./asset/img/deemo-farewell.jpg" alt="" />
        <a href="https://www.youtube.com/watch?v=3rn-NOSCBEI" target="_blank"
          >farewell
        </a>
      </div>
    </div>
    <script src="java.js"></script>
  </body>
</html> --}}

{{-- 

<h1 id="title">Form Lorem</h1>
<p id="description">isi form untuk meminjam</p>
<form id="survey-form">
  <label for="name" id="name-label">
    <h1>name mahasiswa</h1>
    <input id="name" type="text" placeholder="masukkan nama" required />
  </label>
  <label for="email" id="email-label">
    <h1>e-mail</h1>
    <input type="email" id="email" placeholder="masukkan email anda" required />
  </label>
  <label for="number" id="number-label">
    <h1>NIM</h1>
    <input type="number" name="number" id="number" placeholder="masukkan umur anda" required max="70" min="17" />
  </label>
  <label for="dropdown" id="dropdown">
    <h1>Angkatan</h1>
    <select name="dropdown" id="dropdown">
      <option value="1">2020</option>
      <option value="2">2021</option>
      <option value="3">2022</option>
    </select>
  </label>
  <p class="p-radio">pilih katagori anda</p>
  <button class="kembali">
    <a href="#">back</a>
  </button>

  <button type="submit" id="submit">Kirim</button> --}}
