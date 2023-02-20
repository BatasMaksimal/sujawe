 <link rel="stylesheet" href="{{asset('css/stylesheet_navbar.css')}}">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/stylesheet_navbar.css')}}">



<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('admin.user.index')}}">TAMBAH USER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.catalogs.index')}}">CATALOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tampil_pembelian.php">MANAGE USER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah_admin.php">Tambah Admin Baru</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mt-1">
                    <a class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>