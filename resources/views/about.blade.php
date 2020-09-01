<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/bootstrap.css')}}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/all.css')}}" />

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('asset_frontend/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_frontend/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">



    <!-- style css -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/styleabout.css')}}" />

    <title>Tentang Kami</title>
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
                        <a href="#" class="btn-contact">Contact Us</a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="column-img-illustration">
                        <img src="{{asset('asset_frontend/img/Group 621.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>Apa Yang</h3>
                    <h1>Kami Kerjakan</h1>
                    <picture>
                        <img src="{{asset('asset_frontend/img/business_conference_.svg')}}" alt="" class="img-fluid" />
                    </picture>
                </div>
                <div class="col-12 col-md-6">
                    <div class="keterangan">
                        <p>
                            <span>1</span> Membantu mitra kami (transportasi lintas daerah) untuk menemukan penumpang secara cepat dan
                            aman
                        </p>
                        <p>
                            <span>2</span> Memberikan layanan terbaik yang disukai oleh penumpang berupa merchant dan snack.
                        </p>
                        <p>
                            <span>3</span> Memperbaharui dan mempermudah alur pemesanan jasa transportasi lintas daerah.
                        </p>
                        <p>
                            <span>4</span> Membantu penumpang untuk menemukan driver yang terpercaya dengan layanan transportasi
                            yang aman dan nyaman serta fleksibel.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="info">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1>Perjalanan Angkut Apps</h1>
                    <hr />
                    <p>
                        Angkut Apps terinisiatif dari sebuah hasil pengamatan satu keluarga yang menunggu di pinggir jalan dan hasil
                        telponan teman yang meminta nomor telepon supir daerah. Yang pada akhirnya menjadi pertanyaan bagi
                        sekelompok sahabat yang ambisius dan haus akan pengalaman baru. Dari hasil ambisius itu, sekelompok sahabat
                        menginisiasikan ide ini untuk diikutkan lomba startup lokal kampus yang kemudian membuahkan hasil
                        penghargaan
                        juara 2. Tidak puas hanya sekedar untuk diikutkan lomba, Sekelompok sahabat membuat komitmen untuk ide ini
                        dapat dijadikan sebagai perusahaan startup yang dapat digunakan dan juga membantu para penggunannya yaitu
                        transportasi mobil daerah, pete-pete, dan bus untuk bepergian lintas daerah. Hingga saat ini kami sangat
                        optimis dan ambisius ide kami dibutuhkan oleh banyak orang serta akan terus melakukan pengembangan dan
                        mengevaluasi demi kenyamanan pengguna.
                    </p>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
                    <picture>
                        <img src="{{asset('asset_frontend/img/world_wide_web_monochromatic.svg')}}" alt="" class="img-fluid ilustrasi-img" />
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Kelebihan Kami</h1>
                    <hr />
                </div>
            </div>
            <div class="row info-panel">
                <div class="col-6 col-lg-4">
                    <div class="pertama shadow p-3 mb-5 bg-white rounded">
                        <p>
                            Di kondisi ini, kami memberikan layanan antar jemput penumpang dengan mengedepankan protocol Kesehatan
                            <span class="badge badge-secondary">1</span>
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="kedua shadow p-3 mb-5 bg-white rounded">
                        <p>
                            Mengedepankan keamanan pengguna baik data pribadi maupun ketika terjadi aktivitas jasa transportasi lintas
                            daerah.
                            <span class="badge badge-secondary">2</span>
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="ketiga shadow p-3 mb-5 bg-white rounded">
                        <p>
                            Meningkatkan pertumbuhan ekonomi bagi mitra kami dengan terus mengekspansi layanan kepada penumpang.
                            <span class="badge badge-secondary">3</span>
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="keempat shadow p-3 mb-5 bg-white rounded">
                        <p>
                            Layanan yang simple dengan memprioritaskan kemudahan dan kenyamanan berinteraksi dengan pengguna.
                            <span class="badge badge-secondary">4</span>
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="kelima shadow p-3 mb-5 bg-white rounded">
                        <p>
                            Senantiasa memberikan platform yang mudah untuk digunakan dengan mempertimbangkan pengguna gaptek.
                            <span class="badge badge-secondary">5</span>
                        </p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="keenam shadow p-3 mb-5 bg-white rounded">
                        <p>
                            Melakukan aktivitas jasa transportasi sesuai dengan keinginanmu tanpa takut akun terkena punishment /
                            sanksi.
                            <span class="badge badge-secondary">6</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tim">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Tim Kami</h1>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="our-tim">
                                <img src="{{asset('asset_frontend/img/Tim/irwan.png')}}" alt="">
                            </div>
                            <div class="info-tim">
                                <h4>Irwan Ardiansyah</h4>
                                <p>Android Developer</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="our-tim">
                                <img src="{{asset('asset_frontend/img/Tim/rehan.png')}}" alt="">
                            </div>
                            <div class="info-tim">
                                <h4>Andi Raihan</h4>
                                <p>Android Developer</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="our-tim">
                                <img src="{{asset('asset_frontend/img/Tim/ayu.png')}}" alt="">
                            </div>
                            <div class="info-tim">
                                <h4>Ayu</h4>
                                <p>Android Developer</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="our-tim">
                                <img src="{{asset('asset_frontend/img/Tim/furqan.png')}}" alt="">
                            </div>
                            <div class="info-tim">
                                <h4>Furqan</h4>
                                <p>Android Developer</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="our-tim">
                                <img src="{{asset('asset_frontend/img/Tim/taufik.png')}}" alt="">
                            </div>
                            <div class="info-tim">
                                <h4>Taufik</h4>
                                <p>Android Developer</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="our-tim">
                                <img src="{{asset('asset_frontend/img/Tim/iccank.png')}}" alt="">
                            </div>
                            <div class="info-tim">
                                <h4>Ichsan B</h4>
                                <p>Android Developer</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="our-tim">
                                <img src="{{asset('asset_frontend/img/Tim/asep.png')}}" alt="">
                            </div>
                            <div class="info-tim">
                                <h4>Asep</h4>
                                <p>Android Developer</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')


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
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })
    </script>
</body>

</html>