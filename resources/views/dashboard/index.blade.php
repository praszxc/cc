<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tugas Besar Cloud Computing">
    <meta name="author" content="Bagus, Helmy, dan Tito">
    <title>Dashboard Kota Bandung</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

   
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-lg-2 me-1 px-3" href="/">Bandung.</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "dashboard") ? 'active' : '' }} aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "pekerjaan") ? 'active' : '' }} aria-current="page" href="/pekerjaan">
              <span data-feather="briefcase"></span>
              Sebaran Pekerjaan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "pendidikan") ? 'active' : '' }}  aria-current="page" href="/pendidikan">
              <span data-feather="book-open"></span>
              Sebaran Pendidikan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "penghasilan") ? 'active' : '' }}  aria-current="page" href="/penghasilan">
              <span data-feather="dollar-sign"></span>
              Penghasilan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "profilpenduduk") ? 'active' : '' }} aria-current="page"  href="/profilpenduduk">
              <span data-feather="users"></span>
              Profil Kependudukan
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        
      {{-- <canvas class="my-4 w-50" id="myChart" width="400" height="100"></canvas>   --}}
      @yield('kontenes')
      @yield('konten')
      @yield('kontennn')
      @yield('kontenz')
      @yield('kontenzz')
    </main>
  </div>
</div>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
      <script src="/js/chart1.js"></script>
      <script src="/js/chart2.js"></script>
      <script src="/js/chart3.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
  </body>
</html>

