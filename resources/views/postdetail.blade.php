<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="{{asset('asset_frontend/css/bootstrap.min.css')}}" />
    <link rel="icon" href="{{asset('asset_frontend/img/logo.png')}}">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('asset_frontend/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_frontend/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/all.css')}}" />
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/stylePost.css')}}" />

    <title>Post Detail</title>
</head>

<body>
    <!-- Awal Navbar -->
    @include('layouts.navbar')
    <!-- Akhir Navbar -->

    <!--Awal post-->
    <section class="detail">
        <div class="container">
            <div class="row">
                <!-- Post Content Column -->
                <div class="col-lg-8">

                    <!-- Title -->
                    <h1 class="mt-4">{{$news->title}}</h1>

                    <!-- Author -->
                    <p class="lead">
                        by
                        <a href="#">{{$news->users->name}}</a>
                    </p>

                    <hr>

                    <!-- Date/Time -->
                    <p>Posted on {{$news->created_at->format('d-m-Y')}}</p>

                    <hr>

                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src="{{asset($news->image)}}" alt="">

                    <hr>

                    <!-- Post Content -->


                    <p>{!! $news->content !!}</p>
                    <hr>


                    <!-- Comments Form -->
                    <div class="card my-4 border-0">
                        <h5 class="card-header">Leave a Comment:</h5>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>





                </div>

                <aside class="aside col-md-4 blog-sidebar mt-2">
                    <div class="detailSearch p-3">
                        <form class="form-inline">
                            <div class="form-group rounded-pill">
                                <input class="form-input" type="cari" placeholder="Cari Cepat" aria-label="cari">
                                <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="p-3 mb-3 bg-light rounded">
                        <h3>About</h3>
                        <p class="mb-0">Angkut App
                            Aplikasi Pemesanan Transportasi Lintas Daerah Secara Cepat, Mudah dan Aman</p>
                    </div>

                    <div class="p-3">
                        <h3>Archives</h3>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2019</a></li>
                            <li><a href="#">February 2019</a></li>
                            <li><a href="#">January 2020</a></li>
                        </ol>
                    </div>

                    <div class="p-3">
                        <h3>Categori</h3>
                        <ol class="list-unstyled">
                            @foreach($categories as $category)
                            <li><a href="#">{{$category->name}}</a></li>
                            @endforeach
                        </ol>
                    </div>
                </aside>
    </section>
    <!--Akhir Post-->

    <!-- Footer -->
    @include('layouts.footer')
    <!-- Akhir Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{asset('asset_frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('asset_frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset_frontend/js/script.js')}}"></script>
    <script src="{{asset('asset_frontend/js/all.js')}}"></script>
</body>

</html>