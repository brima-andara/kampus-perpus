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

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
        

        <title>Dashboard</title>
    </head>
    <body>
        <nav id="navbar">
            <header>angka</header>
            <div class="radio-container">
                <input checked="" id="radio-free" name="radio" type="radio" onclick="showContent(1)"  />
                <label for="radio-free">Dashboard</label>
                <input id="radio-basic"  name="radio" type="radio" onclick="showContent(2)" />
                <label for="radio-basic">Buku</label>
                <input id="radio-premium" name="radio" type="radio" />
                <label for="radio-premium">Masukan</label>
                
                <div class="glider-container">
                    <div class="glider"></div>
                </div>
            </div>
        </nav>

        <table class="dashboard">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>NIM</th>
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
{{-- *NAVBAR --}}
        <div class="buku">
            <div class="navbar">
                <div class ="kiri">
                    <ul>
                        <li>edukasi</li>
                        <li>novel</li>
                    </ul>
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
            
            <div class="bukuEdukasiBody">
                <ul class="judul">
                    <li>rapunsel aoeunoeu aoeu aoeu oe uaoe uo uoeu a</li>
                    <li>aoeuhhhhh</li>
                    <li>2/uaoeuaeu</li>
                    <li>20 uuuuu 2002</li>
                    <li>20 uuuuu 2002</li>
                    <li>20 uuuuu 2002</li>
                    <li>20 uuuuu 2002</li>
                </ul>
                <ul class = "seri">
                    <li>rapunsel aoeunoeu aoeu aoeu oe uaoe uo uoeu a</li>
                    <li>aoeuhhhhh</li>
                    <li>2/uaoeuaeu</li>
                    <li>20 uuuuu 2002</li>
                </ul>
                <ul class = "stok">
                    <li>rapunsel aoeunoeu aoeu aoeu oe uaoe uo uoeu a</li>
                    <li>aoeuhhhhh</li>
                    <li>2/uaoeuaeu</li>
                    <li>20 uuuuu 2002</li>
                </ul>
                <ul class = "tahun">
                    <li>rapunsel </li>
                    <li>aoeuhhhhh</li>
                    <li>2/uaoeuaeu</li>
                    <li>20 uuuuu 2002</li>
                </ul>
                {{-- <ul class = "icon">
                    <label class="container">
                        <input checked="checked" type="checkbox">
                        <svg viewBox="0 0 320 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="chevron-right"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path></svg>
                      </label>
                    </ul> --}}
                </div> 
                
                <div class="tambah-buku">
                    <i id="penanda"class="fa-solid fa-bookmark"></i>
                    <i id="plus"class="fa-solid fa-plus"></i>
                    
                </div>
            </div>
        <script src="{{ asset("js/dashboard.js")}}"></script>
        {{-- <script src="{{ asset("js/test.js")}}"></script> --}}

    </body>
</html>







