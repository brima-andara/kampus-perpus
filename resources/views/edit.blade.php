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
        <link rel="stylesheet" href="{{ asset('css/edit-buku.css') }}">
        <link rel="stylesheet" href="{{ asset('css/test.css') }}">
        

        <title>edit</title>
    </head>
    <body>
       <div class="container-tambah-form"> 
            <div class="tambah-buku-form">
                @error('title')
                    <span class="aler alert-danger"  role="alert">{{$message}}</span>
                @enderror
                <form action="{{ route('update.buku', $book->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="user-box">
                      <input type="text" name="title" value="{{ $book->title }}" required>
                      <label>title</label>
                          <span class="text text-danger"></span>
                    </div>
                    <div class="user-box">
                      <input type="file" name="img" src="{{ $book->img }}" required>
                      <label></label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="seri" value="{{ $book->seri }}" required>
                        <label>seri</label>
                      </div>
                    <div class="user-box">
                      <input type="number" min="0" step="1" name="stok" value="{{ $book->stok }}"required>
                      <label>stok</label>
                    </div>
                    <div class="user-box">
                        <textarea name="synopsis" id="" cols="30" >{{$book->synopsis}}</textarea>
                    </div>
                    <select name="kategori" id="" required>
                        <option value="Edukasi" {{ $book->level == 'Edukasi' ? 'selected' : '' }}>eduksai</option>
                        <option value="Non Edukasi"{{ $book->level == 'Non Eduksai' ? 'selected' : '' }}>non edukasi</option>
                    </select>
                    <button type="submit">
                           Perbarui
                       <span>                       </span>
                    </button>
                </form>
            </div>
        </div>
        <script src="{{ asset("js/dashboard.js")}}"></script>
        {{-- <script src="{{ asset("js/test.js")}}"></script> --}}

    </body>
</html>







