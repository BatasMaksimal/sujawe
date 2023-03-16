<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer responsive</title>
    <link rel="stylesheet" href="{{asset('css/web/footer.css')}}">
    <script src="fontawesome/all.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <!-- Posisi Header -->
        </div>
        <div class="content">
            <!-- Posisi konten -->
        </div>
        <div class="footer">
            <div class="row">
                <div class="footer-col">
                    <h4>Ikuti Kami</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Lokasi</h4>
                    <ul>
                        <li><a href="#">Bantuan</a></li>
                        <li><a href="#">Metode Pembayaran</a></li>
                        <li><a href="#">Gratis Ongkir</a></li>
                        <li><a href="{{route('contact')}}">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Jelajahi</h4>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Kebijakan Provasi</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Kontak Media</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Toko</h4>
                    <ul>
                        <li><a href="#">Jual Beli</a></li>
                        <li><a href="#">COD</a></li>
                        <li><a href="#">Pusat Edukasi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>