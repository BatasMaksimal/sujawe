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
    <link rel="stylesheet" href="{{asset('css/web/home.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">



<body>


    <!-- navbar -->




    <!-- main menu -->
    @include('web.navbar.navbar')
    <div class="home">

        <section id="hero">
            <div class="hero-container">
                <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade"
                    data-bs-ride="carousel">

                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <!-- Slide 3 -->
                        <div class="carousel-item active" style="background-image: url('{{asset('img/sekolah.jpg')}}')">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sujawe</span>
                                    </h2>
                                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid
                                        qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias
                                        dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus
                                        repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Hubungi kami</a>
                                </div>
                            </div>
                        </div>

                     

                    </div>
                </div>
        </section><!-- End Hero -->

<!-- 

<! ======= Services Section ======= -->
<section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-truck"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-currency-dollar"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-arrow-left-right"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-chat-text-fill"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


        <h3 class="new">Produk terbaru<h3>

                <div class="product-grid">
                    @foreach($latest as $catalog)
                    <div>
                        <img src="{{asset('storage/catalogs/'.$catalog->image)}}"
                            style="width: 100%;height: 200px;object-fit:cover;">
                        <title>Placeholder</title>
                        <div class="card-tampilan">
                            <p class="card-text judul-produk"><b>{{$catalog->title}}</b></p>
                            <p class="card-text harga-produk">{{$catalog->description}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{route('detail', ['id'=>$catalog->id])}}"><button type="submit"
                                            class="btn1">Detail</button></a>
                                </div>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                @include('web.footer.footer')

    </div>


   


    </div>

    





    <!-- footer -->



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</body>

</html>