  <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow p-2 mb-5 bg-white">
      <div class="container">
          <a class="navbar-brand" href="#">
              <img src="{{asset('asset_frontend/img/logo.png')}}" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('angkut.index')}}">Beranda</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('angkut.about')}}">Tentang Kami</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="">Layanan</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('angkut.news')}}">Berita & Artikel</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Daftar<i class="fas fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{route('angkut.pete')}}">Mobil Pete-pete</a>
                          <a class="dropdown-item" href="{{route('angkut.daerah')}}">Mobil Daerah / Travel</a>
                          <a class="dropdown-item" href="{{route('angkut.bus')}}">Mobil Bus</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="hlmnBantuan.html">Pusat Bantuan</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>