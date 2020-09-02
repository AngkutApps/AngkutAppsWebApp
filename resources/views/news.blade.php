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

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('asset_frontend/css/stylePost.css')}}" />

    <title>Post</title>
</head>

<body>

    @include('layouts.navbar')

    <!-- header -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-heading text-center">Berita & Artikel</h1>
                    <hr />
                    <p class="text-center text-p">
                        Yuk baca berita dan artikel terkait pengalaman<br />para penumpang
                        dan driver Angkut Apps
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form class="form-inline justify-content-center">
                        <div class="form-group">
                            <input class="form-input" type="cari" placeholder="Search Disini" aria-label="cari" />
                            <button type="submit" class="search-btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <select class="group-kategori" name="" id="">
                            <option selected>Semua Kategori</option>
                            <option value="">Community</option>
                            <option value="">Driver</option>
                            <option value="">Event</option>
                            <option value="">Technology</option>
                            <option value="">Article</option>
                            <option value="">Passenger</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- main -->
    <main class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card-wrapper">
                        <picture>
                            <img src="{{asset($articleGet->image)}}" alt="" />
                        </picture>
                        <div class="card-body">
                            <a href="postDetail.html" target="_blank">
                                {{$articleGet->title}}
                            </a>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{$articleGet->created_at->diffForHumans()}}</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row mt-md-n4">
                        @foreach($articles as $article)
                        <div class="col-12 col-lg-6 mb-lg-5">
                            <div class="card">
                                <picture>
                                    <img src="{{asset($article->image)}}" alt="" />
                                </picture>
                                <div class="card-body">
                                    <a href="">{{$article->title}}</a>

                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">{{$article->created_at->diffForHumans()}}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    @include('layouts.footer')
    <!-- Akhir Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="{{asset('asset_frontend/js/popper.min.js')}}">
    </script>
    <script src="{{asset('asset_frontend/js/bootstrap.min.js')}}"></script>
</body>

</html>