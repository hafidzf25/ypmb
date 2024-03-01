<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/Logo/ypmb.png') }}" type="image/icon type">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><!-- Load Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Aladin&family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}" id="cerdas">Cerdas</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active me-1 ms-2" aria-current="page" href="{{ url('pelatihan') }}">Pelatihan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle me-2 ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Jenjang
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">SD</a></li>
                  <li><a class="dropdown-item" href="#">SMP</a></li>
                  <li><a class="dropdown-item" href="#">SMA</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-4 custom-rounded search-custom-width" type="search" placeholder="Cari Pelatihan" aria-label="Search">
              <button class="btn btn-info text-white custom-rounded custom-width" type="submit">Masuk</button>
            </form>
          </div>
        </div>
      </nav>

      <br>

      @yield('content')
      
      <div class="container-fluid" style="padding: 3em; background-color: #38B6FF; color: white;">
        <div class="row align-items-center">
          <div class="col-4">
            <span id="cerdas">Cerdas</span>
          </div>
          <div class="col-4 text-center">
            <p>
              <img src="{{ asset('images/footer-1.png') }}" alt="" style="width: 30em;">
            </p>
            <span>
              <a href="https://twitter.com">
                <img src="{{ asset('images/socmed-x.png') }}" alt="" style="padding: 0.5em;">
              </a>
              <a href="https://instagram.com">
                <img src="{{ asset('images/socmed-ig.png') }}" alt="" style="padding: 0.5em;">
              </a>
              <a href="https://youtube.com">
                <img src="{{ asset('images/socmed-yt.png') }}" alt="" style="padding: 0.5em;">
              </a>
              <a href="https://facebook.com">
                <img src="{{ asset('images/socmed-fb.png') }}" alt="" style="padding: 0.5em;">
              </a>
            </span>
          </div>
          <div class="col-4 text-end">
            <img src="{{ asset('images/telephone.png') }}" alt="">
            <span>Kontak</span>
            <span>(021) 888888</span>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>