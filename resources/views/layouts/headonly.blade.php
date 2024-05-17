<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/Logo/ypmb.png') }}" type="image/icon type">
    <title>{{ isset($title) ? $title. ' | '.config('app.name') : config('app.name') }}</title>
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
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
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
                  <li><a class="dropdown-item" href="#">Raudaltul Athfal</a></li>
                  <li><a class="dropdown-item" href="#">Madrasah Ibtidaiyah</a></li>
                  <li><a class="dropdown-item" href="#">Madrasah Tsanawiyah</a></li>
                  <li><a class="dropdown-item" href="#">Madrasah Aliyah</a></li>
                </ul>
              </li>
            </ul>
            @if(!(request()->is('login') || request()->is('register') || request()->is('pelatihan')))
              <!-- Konten yang ingin ditampilkan jika halaman selain login dan register sedang dibuka -->
              <form class="d-flex" role="search">
                <input class="form-control me-4 custom-rounded search-custom-width" type="search" placeholder="Cari Pelatihan" aria-label="Search">
                <a href="{{ url('login') }}" class="btn btn-info text-white custom-rounded custom-width">Masuk</a>
              </form>
            @endif

            @if(request()->is('pelatihan'))
                <a href="{{ url('login') }}" class="btn btn-info text-white custom-rounded custom-width">Masuk</a>
            @endif
          </div>
        </div>
      </nav>

      <br>

      @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
       $(document).ready(function(){
         $('.addfiles').on('click', function() { $('#fileupload').click();return false;});
      });
    </script>
  </body>
</html>