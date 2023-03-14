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
@include('admin.navbar.Navbar')

<div class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mt-2 mb-3">POST BLOG<h3>
                <form action="{{route('admin.user.index')}}" method="GET">
                    <input type="text" name="cari" class="form-control mb-3" placeholder="Masukkan keyword pencarian">
                </form>
            </div>
            <div class="card-body">
                <table class="table table-bordered fs-4 fw-light text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">email</th>
                            <th scope="col">ROLE</th>
                            <th scope="col">DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                             @foreach($users as $user)           
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->username}}</td>
                            
                               
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <form action="{{route('admin.user.destroy', $user->id)}}" method="POST">
                                @csrf
                                @method('delete')
                            <td><button> <a type="submit" class="btn btn-danger"> DELETE </a></button> </td>
                            </form>
                        </tr>
                   @endforeach
                    </tbody>
    
                </table>
                <a href="{{route('admin.user.create')}}"><button class="btn1">Tambah User</button></a>
              

            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>
