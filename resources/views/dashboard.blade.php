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
{{-- **DATA  MAHASISWA PINJAM --}}
                
        </div>
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
                        @foreach ($meminjam as $pinjam)
                            
                    <tr>
                        <td>{{ $pinjam->nim }}</td>
                        <td>{{$pinjam->nomor_hp}}</td>
                        {{-- <td style="{{ \Carbon\Carbon::parse($pinjam->tanggal_pinjam)->isPast() ? '{{$merah}}' : '' }}">{{$pinjam->tanggal_pinjam}}</td> --}}
                        <td>{{$pinjam->tanggal_pinjam}}</td>
                       
                        <td><a href="{{ route('get.book',['seri' => $pinjam->seri, 'nim' => $pinjam->nim]) }}" type="submit" class="btn btn-info btn-sm" style="background: transparent; border:black solid 1px; border-radius:5px">
                                    <i class="fa-solid fa-eye"></i>
                                </a> </td>
                        <form action="{{ route('dashboard.destroy.meminjam', $pinjam->seri) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?');">
                        @csrf
                        @method('delete')
                        <td><button  type="submit" class="btn btn-info btn-sm" style="background: transparent; border:black solid 1px; border-radius:5px">
                                        <i class="fa-solid fa-trash"></i>
                                </button> </td>
                        </form>
                    </tr>
                        @endforeach

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
                            <form action="">
                            <input
                            class="input"
                            type="text"
                            name="search"
                            placeholder="cari buku"
                            />   

                            </form>
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
                    {{-- <div class="real-glide">    
                        <li>u</li>
                    </div> --}}
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

                    {{-- !ISI BUKU --}}
                    <div class="container-body-buku">
                        

                        <div class="buku-edukasi-body">
                            @foreach ($book as $buku)
                                
                            <ul class="isi">
                                <li>{{$buku->title}}</li>
                                
                            </ul>
                            <ul class = "isi">
                                <li>{{$buku->seri}}</li>
                            </ul>
                            <ul class   = "isi">
                                <li>{{$buku->stok}}</li>
                            </ul>
                            <ul class = "isi">
                                <form action="{{ route('dashboard.destroy', $buku->id) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?');">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" id='sampah' class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash" ></i>
                                        {{-- <li>{{$buku->id}}</li> --}}
                                    </button>
                                </form>
                                <div class="batas"></div>
                                    <a href="{{ route('book.edit', $buku->id) }}" type="submit" class="btn btn-info btn-sm" style="background: transparent; border:black solid 1px; border-radius:5px">
                                    <i class="fa-solid fa-eye"></i>
                                </a> 

                            
                            </ul>
                            @endforeach
                            <div class="kotak">
                                
                            </div>

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
                    <select name="kategori"  required>
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







