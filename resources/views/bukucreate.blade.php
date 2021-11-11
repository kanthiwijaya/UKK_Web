<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Dashboard - Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href={{ asset ('img/brand/favicon.png') }}>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href={{ asset ('vendor/nucleo/css/nucleo.css') }}>
  <link rel="stylesheet" href={{ asset ('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}>
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href={{ asset ('css/argon.css?v=1.2.0') }}>
  
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src={{ asset ('img/brand/blue.png') }} class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="examples/dashboard.html">
                <i class="ni ni-books text-primary"></i>
                <span class="nav-link-text">Daftar Buku</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="example/icons.html">
                <i class="ni ni-badge text-orange"></i>
                <span class="nav-link-text">Daftar Siswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-folder-17 text-primary"></i>
                <span class="nav-link-text">Pinjaman</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <!-- Navigation -->
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              
            </li>
            <li class="nav-item dropdown">
              
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src={{ asset ('img/theme/team-4.jpg') }}>
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="/logout" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              
            </div>
          </div>
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <div class="card bg-default">
            <div class="card-header border-0 bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="text-light text-uppercase ls-1 mb-1">Form Tambah Data</h3>
                </div>
                <div class="col text-right">
                  
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <div class="col-xl-12 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <!-- Page content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 ml-auto mr-auto">
          <div class="card card-upgrade">
            
            <div class="card-body">
              <!-- Form -->
              <form  action="{{url('buku-save')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Judul</label>
                    <input name="judul" class="form-control" type="text" placeholder="Judul">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Gambar</label>
                    <input name="gambar" class="form-control" type="file" placeholder="Gambar" >
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Pengarang</label>
                    <input name="pengarang" class="form-control" type="text" placeholder="Pengarang">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Penerbit</label>
                    <input name="penerbit" class="form-control" type="text" placeholder="Penerbit" >
                </div>
                <a href="/" class="btn btn-warning">Back to list</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
              </div>
            </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="" class="font-weight-bold ml-1" target="_blank">Kanthi Wijaya</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src={{ asset ('vendor/jquery/dist/jquery.min.js') }}></script>
  <script src={{ asset ('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ asset ('vendor/js-cookie/js.cookie.js') }}></script>
  <script src={{ asset ('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}></script>
  <script src={{ asset ('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}></script>
  <!-- Optional JS -->
  <script src={{ asset ('vendor/chart.js/dist/Chart.min.js') }}></script>
  <script src={{ asset ('vendor/chart.js/dist/Chart.extension.js') }}></script>
  <!-- Argon JS -->
  <script src={{ asset ('js/argon.js?v=1.2.0') }}></script>
</body>

</html>
