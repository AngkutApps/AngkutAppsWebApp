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

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/styleLayanan.css')}}" />

    <title>Layanan</title>
</head>

<body>
    <!-- Awal Navbar -->
    @include('layouts.navbar')
    <!-- Akhir Navbar -->

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">layanan kami</h1>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item bg-transparent" role="presentation">
                            <a class="nav-link active" id="pills-mPetePete-tab" data-toggle="pill" href="#pills-mPetePete" role="tab" aria-controls="pills-mPetePete" aria-selected="true">Pete-Pete</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-mBus-tab" data-toggle="pill" href="#pills-mBus" role="tab" aria-controls="pills-mBus" aria-selected="false">Mobil Bus</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-mTravel-tab" data-toggle="pill" href="#pills-mTravel" role="tab" aria-controls="pills-mTravel" aria-selected="false">Mobil Travel</a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-mPetePete" role="tabpanel" aria-labelledby="pills-mPetePete-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <h2>mengapa pete-pete</h2>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="info-panel">
                                            <img src="{{asset('asset_frontend/img/Pete pete/icon-efisien.png')}}" alt="">
                                            <div class="text-info">
                                                <h2>Efisien</h2>
                                                <p>Mencari pete-pete kini tidak lagi harus berdiri dan menunggu di pinggir jalan</p>
                                            </div>
                                        </div>
                                        <div class="info-panel">
                                            <img src="{{asset('asset_frontend/img/Pete pete/icon-transparansi.png')}}" alt="">
                                            <div class="text-info">
                                                <h2>Transparansi</h2>
                                                <p>Harga yang pasti, menjadikanmu dapat mengatur keuanganmu untuk bepergian lintas daerah</p>
                                            </div>
                                        </div>
                                        <div class="info-panel">
                                            <img src="{{asset('asset_frontend/img/Pete pete/icon-cepat.png')}}" alt="">
                                            <div class="text-info">
                                                <h2>Super cepat</h2>
                                                <p>Dengan mitra kami yang tersebar di pusat-pusat kota, pemesanan akan jauh lebih cepat</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <img src="{{asset('asset_frontend/img/Pete pete/Group 578.png')}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-mTravel" role="tabpanel" aria-labelledby="pills-mTravel-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <h2>mengapa mobil travel</h2>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="info-panel">
                                            <img src="{{asset('asset_frontend/img/travel/icon-jemput.png')}}" alt="">
                                            <div class="text-info">
                                                <h2>Penjemputan On Demand</h2>
                                                <p>Cukup berikan lokasi spesifik, driver akan menjemputmu walaupun alamat rumah sekalipun.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info-panel">
                                            <img src="{{asset('asset_frontend/img/travel/icon-antar.png')}}" alt="">
                                            <div class="text-info">
                                                <h2>Pengataran On Demand</h2>
                                                <p>Driver akan mengantarmu sampai ke rumah/tujuan akhir.</p>
                                            </div>
                                        </div>
                                        <div class="info-panel">
                                            <img src="{{asset('asset_frontend/img/travel/icon-transparansi.png')}}" alt="">
                                            <div class="text-info">
                                                <h2>Transparansi</h2>
                                                <p>Harga yang pasti, menjadikanmu dapat mengatur keuanganmu untuk bepergian lintas daerah.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info-panel">
                                            <img src="{{asset('asset_frontend/img/travel/icon-tracking.png')}}" alt="">
                                            <div class="text-info">
                                                <h2>Real Time Tracking</h2>
                                                <p>Dengan mengetahui titik lokasi driver akan jauh lebih menyenangkan untuk menunggu sambil
                                                    ngopi.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <img src="{{asset('asset_frontend/img/travel/Group 579.png')}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-mBus" role="tabpanel" aria-labelledby="pills-mBus-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <h2>mengapa mobil travel</h2>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="info-panel">
                                            <img src="{{asset('asset_frontend/img/travel/icon-jemput.png')}}" alt="">
                                            <div class="text-info">
                                                <h2>Kapasitas Penumpang</h2>
                                                <p>Bepergian bersama keluarga atau kelompok tanpa memikirkan kapasitas kendaraan jadi lebih
                                                    mudah.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info-panel">
                                            <img src="{{asset('asset_frontend/img/travel/icon-antar.png')}}" alt="">
                                            <div class="text-info">
                                                <h2>Penjemputan Super Mudah</h2>
                                                <p>Penjemputan kini bisa super mudah singgah di pinggir jalan tanpa ke stasiun bus.</p>
                                            </div>
                                        </div>
                                        <div class="info-panel">
                                            <img src="{{asset('asset_frontend/img/travel/icon-transparansi.png')}}" alt="">
                                            <div class="text-info">
                                                <h2>Serasa Berada di Pesawat</h2>
                                                <p>Snack dari Angkut Apps sebagai teman cemilanmu di kala menunggu.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4">
                                        <img src="{{asset('asset_frontend/img/Bus/mockup-bus.png')}}" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <form action="{{route('angkut.tarif')}}" method="POST" class="form-cek-tarif">
                            @csrf
                            <h2 class="text-center">Cek tarif disini </h2>
                            <div class="form-group">
                                <img src="{{asset('asset_frontend/img/Pete pete/icon-tujuan-tarif.png')}}" alt="">
                                <div class="form-check">
                                    <label for="">Lokasi Penjemputan</label><br>
                                    <input type="text" name="" id="" class="form-input" placeholder="e.g. Jl Urip Sumoharjo">
                                </div>
                            </div>

                            <div class="form-group">
                                <img src="{{asset('asset_frontend/img/Pete pete/icon-jemput-tarif.png')}}" alt="">
                                <div class="form-check">
                                    <label for="">Lokasi Tujuan</label><br>
                                    <input type="text" name="" id="" class="form-input" placeholder="e.g. Jl Pettarani">
                                </div>
                            </div>

                            <button type="submit" class="btn-cek">Cek tarif</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Driver -->
    <section class="driver p-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="pengguna col text-center">
                        <h1>Berita Pengguna</h1>
                        <hr />
                    </div>
                </div>
            </div>

            <div class="row text-white">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="card profile-card-2 mt-5">
                        <div class="card-body rounded">
                            <img src="https://randomuser.me/api/portraits/men/77.jpg" alt="profile-image" class="profile" />
                            <h5 class="card-title">Ichsan</h5>
                            <h6>Driver</h6>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="card profile-card-2 mt-5">
                        <div class="card-body rounded">
                            <img src="https://randomuser.me/api/portraits/men/50.jpg" alt="profile-image" class="profile" />
                            <h5 class="card-title">Asep</h5>
                            <h6>Driver</h6>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="card profile-card-2 mt-5">
                        <div class="card-body rounded">
                            <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="profile-image" class="profile" />
                            <h5 class="card-title">Irwan</h5>
                            <h6>Driver</h6>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-white">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="card profile-card-2 mt-5">
                        <div class="card-body rounded">
                            <img src="https://randomuser.me/api/portraits/men/27.jpg" alt="profile-image" class="profile" />
                            <h5 class="card-title">Taufiq</h5>
                            <h6>Driver</h6>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="card profile-card-2 mt-5">
                        <div class="card-body rounded">
                            <img src="https://randomuser.me/api/portraits/men/10.jpg" alt="profile-image" class="profile" />
                            <h5 class="card-title">Thor</h5>
                            <h6>Driver</h6>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="card profile-card-2 mt-5">
                        <div class="card-body rounded">
                            <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="profile-image" class="profile" />
                            <h5 class="card-title">Loki</h5>
                            <h6>Driver</h6>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up
                                the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Driver-->

    <!--Question-->
    <section class="question p-5 mt-md-5">
        <div class="container">
            <div class="row">
                <div class="col mt-3">
                    <h1 class="text-center">Frequently Asked Questions</h1>
                    <hr />
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-9 mx-auto">
                    <!-- Accordion -->
                    <div id="accordionExample" class="accordion shadow">
                        <!-- Accordion item 1 -->
                        <div class="card">
                            <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                                <h6 class="mb-0 font-weight-bold">
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark text-uppercase collapsible-link py-2">Bagaimana Cara
                                        Menjadi Driver :</a>
                                </h6>
                            </div>
                            <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
                                <div class="card-body p-5">
                                    <p class="font-weight-light m-0">
                                        Untuk menjadi driver Angkut Apps bisa dilakukan melalui offline dan online. Untuk online cukup
                                        melalui aplikasi mobile dengan mengklik register dan mengisi semua form yang ada. Sedangkan untuk
                                        offline cukup datang dengan membawa KTP serta foto transportasi yang digunakan selama melakukan
                                        aktivitas lintas daerah.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion item 2 -->
                        <div class="card">
                            <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
                                <h6 class="mb-0 font-weight-bold">
                                    <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Akun Saya
                                        Tidak bisa login :</a>
                                </h6>
                            </div>
                            <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
                                <div class="card-body p-5">
                                    <p class="font-weight-light m-0">
                                        Pastikan akun anda tidak login di smartphone lain. Jika akun anda telah login sebelumnya dan tidak
                                        memungkinkan untuk di log out, silahkan hubungi contact person CS yang ada pada bagian bawah web
                                        ini.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion item 3 -->
                        <div class="card">
                            <div id="headingThree" class="card-header bg-white shadow-sm border-0">
                                <h6 class="mb-0 font-weight-bold">
                                    <a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Bagaimana
                                        Cara Gratis Daftar Menjadi Driver :</a>
                                </h6>
                            </div>
                            <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
                                <div class="card-body p-5">
                                    <p class="font-weight-light m-0">
                                        Untuk menjadi driver Angkut Apps ada biaya perbulan yang dibebankan bagi driver. Namun ada cara
                                        untuk menggunakannya secara gratis yaitu melalui trial session yang hanya didapatkan ketika driver
                                        melakukan registrasi awal.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion item 4 -->
                        <div class="card">
                            <div id="headingFour" class="card-header bg-white shadow-sm border-0">
                                <h6 class="mb-0 font-weight-bold">
                                    <a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Apa
                                        Ciri-Ciri Order Fiktif :</a>
                                </h6>
                            </div>
                            <div id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionExample" class="collapse">
                                <div class="card-body p-5">
                                    <p class="font-weight-light m-0">
                                        Ciri-ciri order fiktif yaitu nomor penumpang tidak aktif ketika di telpon, chat tidak direspon, dan
                                        penumpang memaksa untuk memasuki jalan yang tidak semestinya.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Akhir Question-->


    <!-- Footer -->
    @include('layouts.footer')
    <!-- Akhir Footer -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{asset('asset_frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('asset_frontend/js/bootstrap.min.js')}}"></script>
    @include('sweetalert::alert')
</body>

</html>