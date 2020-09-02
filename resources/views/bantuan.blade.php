<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Bantuan</title>

    <link rel="stylesheet" href="{{asset('asset_frontend/css/bootstrap.css')}}" />
    <link rel="icon" href="{{asset('asset_frontend/img/logo.png')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/all.css')}}" />

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('asset_frontend/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_frontend/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">



    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/stylePusatBantuan.css')}}" />

</head>

<body>

    @include('layouts.navbar')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Bagaimana kami bisa membantu anda ?</h1>
            <form class="form-inline">
                <div class="form-group">
                    <input class="form-input" type="cari" placeholder="Cari disini . . ." aria-label="cari">
                    <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <p class="lead">Paling sering dicari : <a href="#">pesan driver</a></p>
        </div>
    </div>

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Paling sering dicari</h2>
                </div>
            </div>
            <div class="row">
                @foreach($messages as $message)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('asset_frontend/img/pusat-bantuan/illustrasi-isulainnya.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="" class="card-text">{{$message->message}}</a>
                        </div>
                        <div class="card-footer">
                            {{$message->created_at->diffForHumans()}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col d-flex justify-content-center">
                    {{$messages->links()}}
                </div>
            </div>

        </div>

    </section>

    <section class="info-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-1 d-flex align-items-center">
                    <img src="{{asset('asset_frontend/img/pusat-bantuan/illustrasi-form.png')}}" alt="">
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="isu">
                        <h2>Isu Lainnya</h2>
                        <ul>
                            <li>Mobil driver saya tiba-tiba rusak dalam perjalanan</li>
                            <li>Kondisi kendaraan driver tidak layak</li>
                            <li>Saya sangat sulit mendapatkan mitra pengemudi</li>
                            <li>Saya tidak dijemput dan diantar ke lokasi sesuai titik yang saya arahkan</li>
                            <li>Apa yang boleh dan tidak boleh dilakukan selama beraktivitas jasa tranportasi lintas
                                daerah
                                melalui pemesanan Angkut Apps</li>
                            <li>Penumpang fiktif yang berbahaya dan patut dicurigai</li>
                            <li>Driver memberikan pelayanan yang kurang baik</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="helper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-helper">
                        <h2>Bantuan Personal</h2>
                        <p>Masukkan pertanyaan dan saran terhadap aplikasi ini</p>
                        <form action="{{route('message.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="telp" class="form-control @error('hp') is-invalid @enderror" placeholder="Nomor telepon" name="hp" required>
                                @error('hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="" cols="30" rows="5" placeholder="Pesan anda" class="form-control @error('message') is-invalid @enderror" required></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn-kirim">Kirim</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1 d-flex align-items-center">
                    <img src="{{asset('asset_frontend/img/pusat-bantuan/illustrasi-isulainnya.png')}}" alt="" class="img-ilustrasi">
                </div>
            </div>
        </div>
    </section>

    <section class="faq-penumpang">
        <div class="container">
            <div class="row">
                <div class="col mt-md-5">
                    <h2 class="text-center">FAQ Penumpang</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Bagaimana cara mendapatkan akun angkut apps ?
                                        <i class="fas fa-angle-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Akun saya tidak bisa login ?
                                        <i class="fas fa-angle-down"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Apa ciri-ciri order fiktif ?
                                        <i class="fas fa-angle-down"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="faq-driver">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">FAQ Driver</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item bg-transparent" role="presentation">
                            <a class="nav-link active" id="pills-faqPetePete-tab" data-toggle="pill" href="#pills-faqPetePete" role="tab" aria-controls="pills-faqPetePete" aria-selected="true">Pete-Pete</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-faqBus-tab" data-toggle="pill" href="#pills-faqBus" role="tab" aria-controls="pills-faqBus" aria-selected="false">Mobil Bus</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-faqTravel-tab" data-toggle="pill" href="#pills-faqTravel" role="tab" aria-controls="pills-faqTravel" aria-selected="false">Mobil Travel</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-faqPetePete" role="tabpanel" aria-labelledby="pills-faqPetePete-tab">
                            <div class="accordion" id="faqDriver">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                                Bagaimana cara mendapatkan akun angkut apps ?
                                                <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="faqOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqDriver">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt
                                            aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                                Akun saya tidak bisa login ?
                                                <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faqTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqDriver">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt
                                            aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                                Apa ciri-ciri order fiktif ?
                                                <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faqThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqDriver">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt
                                            aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-faqBus" role=" tabpanel" aria-labelledby="pills-faqBus-tab">
                            <div class="accordion" id="faqDriver">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                                Bagaimana cara mendapatkan akun angkut apps ?
                                                <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faqOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqDriver">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt
                                            aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                                Akun saya tidak bisa login ?
                                                <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faqTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqDriver">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt
                                            aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                                Apa ciri-ciri order fiktif ?
                                                <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faqThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqDriver">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt
                                            aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-faqTravel" role="tabpanel" aria-labelledby="pills-faqTravel-tab">
                            <div class="accordion" id="faqDriver">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                                Bagaimana cara mendapatkan akun angkut ?
                                                <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="faqOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqDriver">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt
                                            aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                                Akun saya tidak bisa login ?
                                                <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faqTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqDriver">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt
                                            aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                                Apa ciri-ciri order fiktif ?
                                                <i class="fas fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faqThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqDriver">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt
                                            aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{asset('asset_frontend/js/popper.min.js')}}">
    </script>
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
    @include('sweetalert::alert')
</body>

</html>