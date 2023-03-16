<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/stylesheet_tampil.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   


<body>


<!-- navbar -->
@include('user.navbar.navbar_user')

<div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mt-2 mb-3">POST BLOG<h3>
                <form action="{{route('users.catalogs.index')}}" method="get">
                    <input type="text" name="cari" class="form-control mb-3" placeholder="Masukkan keyword pencarian">
                </form>
            </div>
            <div class="card-body">
                <table class="table table-bordered fs-5 fw-light text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">JUDUL</th>
                            <th scope="col">IMAGE</th>
                            <th scope="col">DESKIRPSI</th>
                            <th scope="col">HARGA</th>
                            <th scope="col">EDIT</th>
                            <th scope="col" width="200px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    @foreach($catalogs as $catalog)                    
                        <tr>
                            <td>{{$catalog->id}}</td>
                            <td>{{$catalog->title}}</td>
                            <td>
                                <img style="width:100%;height:100px;object-fit:contain;" src="{{asset('storage/catalogs/'.$catalog->image)}}" alt="">
                                </td>
                            <td>{{$catalog->description}}</td>
                            <td>{{$catalog->price}}</td>
                            <td> <a href="{{route('users.catalogs.edit', $catalog->id)}}" class="btn2"> EDIT </a> </td>
                            
                            
                            <td>
                            <form action="{{route('users.catalogs.destroy', $catalog->id)}}" method="POST">
                                @csrf
                                @method('delete')<button type="submit" class="btn btn-danger"> DELETE </a> 
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
    
                </table>
                <a href="{{route('users.catalogs.create')}}"><button class="btn1">Tambah Produk</button></a>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>
