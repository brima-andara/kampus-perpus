<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
  />

        {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('css/test.css') }}">
        

        <title>Dashboard</title>
    </head>
    <body>
        <div class="blur">
            <nav id="navbar">
                <header>Dashboard</header>
                <div class="radio-container">
                    <input checked="" id="radio-free" name="radio" type="radio" onclick="showContent(1)"  />
                    <label for="radio-free">Mahasiswa</label>
                    <input id="radio-basic"  name="radio" type="radio" onclick="showContent(2)" />
                    <label for="radio-basic">Buku</label>
                    <div class="glider-container">
                        <div class="glider"></div>
                    </div>
                </div>
                <div class="home">
    
                    <a  href="{{ route("list.book") }}">home</a>
                </div>
            </nav>
            <div class="container-dashboard">
                <table class="dashboard">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>No HP</th>
                            <th>Batas Pinjam</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        <tr>
                        <td>Alvin</td>
                        <td>29993923</td>
                        <td>$0.87</td>
                        </tr>
                        <tr>
                        <td>Alan</td>
                        <td>23923923</td>
                        <td>$3.76</td>
                        </tr>
                        <tr>
                        <td>Jonathan</td>
                        <td>233232323</td>
                        <td>$7.00</td>
                        </tr>
                        <tr>
                        <td>Jonathan</td>
                        <td>233232323</td>
                        <td>$7.00</td>
                        </tr>
                        <tr>
                        <td>Jonathan</td>
                        <td>233232323</td>
                        <td>$7.00</td>
                        </tr>
                        <tr>
                        <td>Jonathan</td>
                        <td>233232323</td>
                        <td>$7.00</td>
                        </tr>
                        <tr>
                        <td>Jonathan</td>
                        <td>233232323</td>
                        <td>$7.00</td>
                        </tr>
                        <tr>
                        <td>Jonathan</td>
                        <td>233232323</td>
                        <td>$7.00</td>
                        </tr>
                        <tr>
                        <td>Jonathan</td>
                        <td>233232323</td>
                        <td>$7.00</td>
                        </tr>
                        <tr>
                        <td>Jonathan</td>
                        <td>233232323</td>
                        <td>$7.00</td>
                        </tr>
                        <tr>
                        <td>Jonatha haoeu aoeu aoeu aoeu222n</td>
                        <td>23322223232332323</td>
                        <td>$7.0 23 2 32 0</td>
                        </tr>
                        <tr>
                        <td>Jonathan</td>
                        <td>233232323</td>
                        <td>$7.00</td>
                        </tr>
                        <tr>
                        <td>Jonathan</td>
                        <td>233232323</td>
                        <td>$7.00</td>
                        </tr>
                        <tr>
                        <td>Jonathan</td>
                        <td>233232323</td>
                        <td>$7.00</td>
                        </tr>
                    </tbody>
                </table>
        
            </div>
    {{-- *NAVBAR KATAGORI--}}
            <div class="container-buku">
                <div class="buku">
                    <div class="navbar">
                        <div class ="kiri">
                            <div class="radio-container-katagori">
                                <input checked="" id="radio-edukasi" name="radio-katagori" type="radio" onclick="pindahGlide(1)" />
                                <label for="radio-edukasi">Edukasi</label>
                                <input id="radio-nonedukasi"  name="radio-katagori" type="radio" onclick="pindahGlide(2)"  />
                                <label for="radio-nonedukasi">Non Edukasi</label>
                                <div class="glider-katagori"></div>
                            </div>
                        </div>
                        <div class="kanan">
                            <input
                            class="input"
                            type="text"
                            name="text"
                            placeholder="cari buku"
                            />   
                            <i class="fa-solid fa-magnifying-glass"></i>                 
                        </div>
                    </div>
        {{-- *LIST BUKU  --}}
                    <div class="bukuEdukasi">
                        <ul>
                            <li>Judul</li>
                            <li>seri</li>
                            <li>stok</li>
                            <li>perintah</li>
                        </ul>
                    </div>
        {{-- *GLIDE LIST BUKU BODY --}}
                    <div class="real-glide">
                        <li>u</li>
                    </div>
                    <div class="block-glide">
                        <div class="anak-block-glide">
                            <li>test</li>
                        </div>
                        <div class="anak-block-glide">
                            <li>test</li>
                        </div>
                        <div class="anak-block-glide">
                            <li>test</li>
                        </div>
                        <div class="anak-block-glide">
                            <li>test</li>
                        </div>
                        <div class="anak-block-glide">
                            <li>test</li>
                        </div>
                    </div>
                    <div class="container-body-buku">
                        

                        <div class="buku-edukasi-body">
                            @foreach ($book as $buku)
                                
                            <ul class="isi">
                                <li>{{$buku->title}}</li>
                                
                            </ul>
                            <ul class = "isi">
                                <li>{{$buku->seri}}</li>
                                
                            </ul>
                            <ul class = "isi">
                                <li>{{$buku->stok}}</li>
                               
                            </ul>
                            <ul class = "isi">
                                <li>{{$buku->title}}</li>
                            
                            </ul>
                            @endforeach

                        </div> 
                        
                        <div class="tambah-buku">
                            <i id="penanda"class="fa-solid fa-bookmark"></i>
                            <i id="plus"class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="scroll">
                    <div class="fixed">
                      <i
                        class="fa-solid fa-angle-up"
                      ></i>
                      <i
                        class="fa-solid fa-angle-down"
                      ></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="container-tambah-form"> 
            <div class="tambah-buku-form">
                @error('title')
                    <span class="aler alert-danger"  role="alert">{{$message}}</span>
                @enderror
                <form action="{{ route('store.book') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="user-box">
                      <input type="text" name="title" required>
                      <label>title</label>
                          <span class="text text-danger"></span>
                    </div>
                    <div class="user-box">
                      <input type="file" name="img" required>
                      <label></label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="seri" required>
                        <label>seri</label>
                      </div>
                    <div class="user-box">
                      <input type="number" min="0" step="1" name="stok" required>
                      <label>stok</label>
                    </div>
                    <div class="user-box">
                        <textarea name="synopsis" id="" cols="30"></textarea>
                    </div>
                    <select name="kategori" id="" required>
                        <option value="Edukasi">eduksai</option>
                        <option value="Non Edukasi">non edukasi</option>
                    </select>
                    <button type="submit">
                           SEND
                       <span>                       </span>
                    </button>
                </form>
            </div>
        </div>
        <script src="{{ asset("js/dashboard.js")}}"></script>
        {{-- <script src="{{ asset("js/test.js")}}"></script> --}}

    </body>
</html>







