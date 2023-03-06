<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/stylesheet_tambah_produk.css')}}">
    <link rel="icon" type="image/png" href="../admin/images/logo-00.png" />
</head>

<body>


<!-- navbar -->
@include('admin.navbar.Navbar')
{{ $errors }}


<div class="container">
        <div class="content my-3">
            <h3 class=" mb-2 text-center">Edit Post</h3>
            <form action="{{route('admin.catalogs.update',$catalogs->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <!-- Nama Produk -->
                <div class="mb-2">
                    <label class="form-label">Judul :</label>
                    <input type="text" name="title" class="form-control" placeholder="Masukkan Nama Produk" required value="{{ $catalogs->title}}">
                </div>
                <!-- deskripsi Produk -->
                <div class="mb-2">
                    <label class="form-label">Deskripsi Produk :</label>
                    <textarea name="description" class="form-control textarea" rows="4" placeholder="Masukkan Deskripsi Produk" required value="{{ $catalogs->description}}"></textarea>
                </div>
                <!-- kategori -->
                <div class="mb-2">
                    <label class="form-label">Kategori Produk :</label>
                    <select name="kategori" class="form-control" required>
                        <option></option>
                        <option>buku smp</option>
                        <option>buku sma</option>
                        <option>peralatan sekolah</option>
                    </select>
                </div>
                <!-- Harga Produk -->
                <div class="mb-2">
                    <label class="form-label">Harga Produk :</label>
                    <input type="double" name="price" class="form-control" placeholder="Masukkan Harga Produk" required value="{{ $catalogs->price}}">
                </div>
                <!-- Foto Produk -->
                <div class="mb-4">
                    <label for="formFile" class="form-label">Foto Produk :</label>
                    <input class="form-control" type="file" name="image" value="{{ $catalogs->image}}">
                </div>
                <input type = "submit" name ="simpan" value ="Tambah Produk" class = "btn1 mb-2">
            </form>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>