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
    <link rel="stylesheet" href="{{asset('css/web/produk.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">



<body>


    <!-- navbar -->
    @include('web.navbar.navbar')


    <!-- main menu -->
    <div class="home">
        <h3 class="Catalog">Catalog<h3>
                <div class="dropdown">
                    <form action="" method="get" id="formkategori">
                <?php
                        $arr_kategori=array('buku smp'=>'Buku SMP','buku sma'=>'Buku SMA','peralatan sekolah'=>'Peralatan Sekolah');
                    ?>
                                <select onchange="document.getElementById('formkategori').submit()"  name="kategori" class="form-control my-2 p-2" class="form-control form"
                                    placeholder="KATEGORI" required>
                                    <option value="">All</option>
                                    <?php foreach ($arr_kategori as $key_kategori => $val_kategori):?>
                                    <option @if($key_kategori === request('kategori')) selected @endif value="<?=$key_kategori?>"><?=$val_kategori?></option>
                                    <?php endforeach ?>
                                </select>
                                </form>
                </div>

        <div class="product-grid">
            @foreach($catalogs as $catalog)
            <div>
                <img src="{{asset('storage/catalogs/'.$catalog->image)}}"
                    style="width: 100%;height: 200px;object-fit:cover;">
                <title>Placeholder</title>
                <div>
                    <p class="card-text judul-produk"><b>{{$catalog->title}}</b></p>
                    <p class="card-text harga-produk">{{$catalog->price}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{route('detail')}}"><button type="submit" class="btn1">Detail</button></a>
                        </div>
                        <small class="text-muted"></small>
                    </div>
                </div>


            </div>


            @endforeach
        </div>
            <a href="#" class="previous">&laquo; Previous</a>
            <a href="#" class="next">Next &raquo;</a>

    </div>
    {{ $catalogs->links() }}
    </div>


   

    <!-- footer -->
    @include('web.footer.footer')


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</body>

</html>