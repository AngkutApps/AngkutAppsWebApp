<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{asset('asset_frontend/img/logo.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/bootstrap.css')}}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/all.css')}}" />

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />


    <!-- style css -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/styleDaftar.css')}}" />

    <title>Daftar</title>
</head>

<body>
    @include('layouts.navbar')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="text-heading" class="display-4">
                Hadir untuk menjadi <span>pelengkap</span> bagi aktivitas atau <span>pekerjaan</span> anda yang
                <span>cepat</span> dan <span>mudah</span>.
            </h1>
        </div>
    </div>


    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-10 info-panel shadow">
                <div class="row text-center">
                    <div class="col-lg">
                        <picture>
                            <img src="{{asset('asset_frontend/img/pusat-bantuan/Group 519.png')}}" alt="" />
                        </picture>
                        <p>Bebas Mengatur Waktu</p>
                    </div>
                    <div class="col-lg">
                        <picture>
                            <img src="{{asset('asset_frontend/img/pusat-bantuan/Group 640.png')}}" alt="" />
                        </picture>
                        <p>Tidak Ada Punishment</p>
                    </div>
                    <div class="col-lg">
                        <picture>
                            <img src="{{asset('asset_frontend/img/pusat-bantuan/calvary.png')}}" alt="" />
                        </picture>
                        <p>Penghasilan Tambahan</p>
                    </div>
                    <div class="col-lg friendly">
                        <picture>
                            <img src="{{asset('asset_frontend/img/pusat-bantuan/high-five.png')}}" alt="" />
                        </picture>
                        <p>Friendly Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="daftar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex align-items-center">
                    <img src="{{asset('asset_frontend/img/pusat-bantuan/undraw_online_articles_79ff.png')}}" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-daftar">
                        <h2>Daftar Driver</h2>
                        <p>Daftarkan diri kamu dan nikmati fitur yang tersedia</p>
                        <form action="{{route('daerah.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">

                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required />
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="kabkota" placeholder="Kab / Kota Domisili" required />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <input type="telp" class="form-control" name="hp" placeholder="Nomor Hp" required />
                                    </div>
                                    <div class="col">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required />
                                    </div>
                                    <div class="col">
                                        <input type="password" class="form-control" name="passwordtwo" placeholder="Konfirmasi Password" required />
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="nikktp" placeholder="NIK KTP" required />

                                <label for="">Identitas Kendaraan</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="noplat" placeholder="Nomor Plat/DD" required />
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="merkmobil" placeholder="Merk Mobil / Kendaraan" required />
                                    </div>
                                </div>
                                <label for="inputGroupFile01">Foto Kendaraan</label>
                                <div class="form-group">
                                    <input type="file" name="image" class="form-control" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" />
                                </div>
                                <label for="question">Darimana Kamu Mengetahui Kami ?</label>
                                <input type="text" class="form-control" name="sumber" name="question" placeholder="Input disini" required />
                                <button type="submit" class="btn-succes">
                                    Buat Akun
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="download">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Download Angkut Apps Driver Sekarang</h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-1">
                    <div class="barcode">
                        <div class="barcode-android">
                            <img src="{{asset('asset_frontend/img/qr code.png')}}" alt="" />
                            <p>Android</p>
                        </div>
                        <div class="barcode-ios">
                            <img src="{{asset('asset_frontend/img/qr code.png')}}" alt="" />
                            <p>IOS</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="app-store">
                        <div class="android-store">
                            <a href="#">
                                <img src="{{asset('asset_frontend/img/playstore.png')}}" alt="" class="img-fluid" />
                            </a>
                        </div>
                        <div class="ios-store">
                            <a href="#">
                                <img src="{{asset('asset_frontend/img/app-store-apple.png')}}" alt="" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer')
    <!-- Akhir Footer -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{asset('asset_frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('asset_frontend/js/bootstrap.min.js')}}"></script>
    @include('sweetalert::alert')
</body>

</html>