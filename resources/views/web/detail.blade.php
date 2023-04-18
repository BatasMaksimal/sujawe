<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/web/detail.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">



<body>


    <!-- navbar -->
    @include('web.navbar.navbar')


    <!-- main menu -->
    <div class="home">
        <h3 class="Catalog">Detail Produk<h3>
        <div class="card mb-3" style="max-width: 100%;">
        
        <div class="row g-2">
            <div class="col-md-4 mt-6 pt-2 mx-4">
            <img src="{{asset('img/book1.jpg')}}" class="img-fluid rounded-start" alt="..." >
            </div>
            <div class="col-md-7">
            <div class="card-body">
                <table class="table">
                    <thead>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nama Produk</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                        </tr>
                    </tbody>
                </table>
            </form>
            </div>
            </div>
        </div>

        
    </div>
    </div>




    <!-- footer -->
    @include('web.footer.footer')


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</body>

</html>