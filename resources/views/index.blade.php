<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{asset('asset_frontend/img/logo.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/bootstrap.css')}}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/all.css')}}" />

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('asset_frontend/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_frontend/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/styleindex.css')}}" />

    <title>Angkut App</title>
</head>

<body>

    @include('layouts.navbar')

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="column-text">
                        <h1 class="display-4">Angkut App</h1>
                        <h2>Aplikasi Pemesanan <span>Transportasi</span> Lintas Daerah Secara
                            <span>Cepat,
                                Mudah</span> dan <span>Aman</span>
                        </h2>
                    </div>
                </div>
                <div class="col-6">
                    <div class="column-img-illustration">
                        <img src="{{asset('asset_frontend/img/2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layanan">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Layanan Transportasi</h1>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-sm-12 col-md-12">
                    <div class="card-deck">
                        <div class="card shadow">
                            <div class="inner">
                                <img src="{{asset('asset_frontend/img/Group 522.png')}}" class="card-img-top" alt="https://drive.google.com/file/d/1Zhs-kn1ryVb72NnE6knKY2pAItErr8pR/view?usp=sharing">
                                <h5 class="card-title">pete-pete</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Angkutan Umum Khas Kearifan lokal setempat siap mengantarmu
                                    dengan cepat dengan harga
                                    lebih
                                    terjangkau bagi siapa saja</p>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="inner">
                                <img src="{{asset('asset_frontend/img/Group 523.png')}}" class="card-img-top" alt="https://drive.google.com/file/d/1Zhs-kn1ryVb72NnE6knKY2pAItErr8pR/view?usp=sharing">
                                <h5 class="card-title">mobil bus</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Mitra kami akan mengantarmu ke lokasi pemberhentian bus dengan
                                    aman dan nyaman</p>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="inner">
                                <img src="{{asset('asset_frontend/img/Group 524.png')}}" class="card-img-top" alt="https://drive.google.com/file/d/1vhnBdQbWQTExFHDweP5ns8io9MKW3p47/view?usp=sharing">
                                <h5 class="card-title">mobil daerah</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Menjemput dan mengantar dari lokasi daerah asal ke lokasi
                                    daerah tujuan hanya di angkut
                                    apps
                                    mobil daerah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="pilar-angkut">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Tiga Pilar Angkut Apss</h1>
                    <hr>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="card-deck">
                        <div class="card shadow bg-white rounded">
                            <img src="{{asset('asset_frontend/img/Group 508.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title mt-md-3">Kecepatan</h5>
                                <p class="card-text">Melayani dengan cepat, serta akan terus melakukan evaluasidemi
                                    kepuasan
                                    pengguna</p>
                            </div>
                        </div>
                        <div class="card shadow bg-white rounded">
                            <img src="{{asset('asset_frontend/img/Group 509.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Keamanan</h5>
                                <p class="card-text">Kami Konsisten untuk menjaga kepercayaan keamanan pengguna agar
                                    terciptanya
                                    aktivitas yang aman
                                    dan nyaman</p>
                            </div>
                        </div>
                        <div class="card shadow bg-white rounded">
                            <img src="{{asset('asset_frontend/img/Group 513.png')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Inovasi</h5>
                                <p class="card-text">Kami akan terus berkarya memperbaiki layanan kami untuk
                                    senantiasa
                                    memberikan
                                    kemudahan bagi
                                    seluruh pengguna</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Testimonial</h1>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="card">
                                <img src="{{asset('asset_frontend/img/Tim/irwan.png')}}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <blockquote class="blockquote text-center">
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Integer posuere
                                            erat a ante.</p>
                                        <footer class="blockquote-footer"><cite title="Source Title">Irwan
                                                Ardiansyah</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card">
                                <img src="{{asset('asset_frontend/img/Tim/irwan.png')}}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <blockquote class="blockquote text-center">
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Integer posuere
                                            erat a ante.</p>
                                        <footer class="blockquote-footer"><cite title="Source Title">Irwan
                                                Ardiansyah</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card">
                                <img src="{{asset('asset_frontend/img/Tim/irwan.png')}}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <blockquote class="blockquote text-center">
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Integer posuere
                                            erat a ante.</p>
                                        <footer class="blockquote-footer"><cite title="Source Title">Irwan
                                                Ardiansyah</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    </section>

    @include('layouts.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{asset('asset_frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('asset_frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset_frontend/js/script.js')}}"></script>
    <script src="{{asset('asset_frontend/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3,
                    loop: false
                }
            }
        })
    </script>
</body>

</html>