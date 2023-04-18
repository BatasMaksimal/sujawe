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
    <link rel="stylesheet" href="{{asset('css/web/contact.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">



<body>


    <!-- navbar -->
    @include('web.navbar.navbar')


    <!-- main menu -->
    <div class="home">
        <img src="{{asset('img/sujinawa-04.jpg')}}" alt="Snow">
        <div class="kontak">
            <h3>OFFICE</h3>
            <p>sujawe.innawa@gmail.com
            <p>
            <p>0812-4263-0376
            <p>
            <p>Jl. Semolowaru Utara III No.31, Semolowaru, Kec. Sukolilo, Kota Surabaya, Jawa Timur 60111
            <p>
                  
        </div>
        
        
        <button class="btn-kontak  " href="{{route('contact')}}">
                    <a class="btn-font" href="{{route('contact')}}">Hubungi Kami</a>
        </button>

        <div class="embed">
            <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.48724531744!2d112.77540789999999!3d-7.2990249999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa5a72e83879%3A0x47a3ec4e8d7e8f7e!2sCV%20Sujawe%20Ininnawa!5e0!3m2!1sid!2sid!4v1681718714822!5m2!1sid!2sid"
                width="900" height="750" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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