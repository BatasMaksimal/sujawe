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
    <link rel="stylesheet" href="{{asset('css/web/layanan.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">



<body>


    <!-- navbar -->
    @include('web.navbar.navbar')


    <!-- main menu -->
    <div class="home">
            <div class="Layanan">
                <h3>Tentang Kami</h3>
                <p>Selamat datang di website resmi kami www.bestchoicebookstore.com. Kami adalah distributor buku pemerintah kurikulum 2013 dan distributor LKS dari berbagai penerbit untuk tingkat SD/MI, SMP/MTs, SMA/MA dan SMK. Harga yang kami tawaran sangatlah terjangkau bagi anda  yang ingin memasarkan LKS dari kami atau bagi pihak sekolah yang ingin langsung menggunakan LKS terus untuk pembelajaran di sekolah. Pelayanan kami meliputi seluruh Indonesia mulai dari Sabang sampai Merauke. Kami bekerjasama dengan berbagai ekspedisi untuk mengirimkan buku dan LKS. Kami memfokuskan bisnis pada segmen kebutuhan Pendidikan terutama untuk masalah Buku paket dan buku LKS. Selain itu, kami juga melayani kebutuhan sekolah yang lain yang terangkum dalam http://www.supplierperlengkapansekolah.com.<p>
            </div>   

             <div class="produk">
                <h3>Pelayanan kami meliputi</h3>
                <ol class="pelayanan">
                    <li>LKS (LEMBAR KERJA SISWA)</li>
                    <li>BUKU KURIKULUM 2013 EDISI REVISI</li>
                    <li>BUKU PAI 2020 (MI, MTs, MA)</li>
                    <li>BUKU UJIAN SEKOLAH</li>
                    <li>BUKU ASESMEN KOMPETENSI MINIMUM</li>
                    <li>BUKU ASESMEN KELAS DAN NASIONAL</li>
                    <li>BUKU INTAN PARIWARA</li>
                    <li>BUKU OLIMPIADE SAINS</li>
                    <li>BUKU PAUD DAN TK</li>
                    <li>BUKU INDUK SEKOLAH</li>
                    <li>BUKU ADMINISTRASI SEKOLAH</li>
                    <li>BUKU PERPUS</li>
                    <li>BUKU PLS/MODUL PAKET A B C</li>
                    <li>BUKU DARI BERBAGAI PENERBIT</li>
                    <li>BUKU KEGIATAN BULAN RAMADHAN</li>
                    <li>AL QURAN</li>
                    <li>BUKU ENSIKLOPEDIA</li>
                    <li>BUKU DIGITAL INTERAKTIF</li>
                    <li>BUKU PERGURUAN TINGGI</li>
                    <li>JASA CETAK</li>
                    <li>SUPPLIER PERLENGKAPAN SEKOLAH</li>
                </ol>
            </div>   

            <!-- <div class="embed">
            <iframe width="560" height="315" style="border:0; width: 100%;" src="https://www.youtube.com/embed/r7TYA7UcQlE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
            </div> -->
            @include('web.footer.footer')
    </div>

    


    <!-- footer -->
    


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</body>

</html>