<!-- <!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
</head>
<body>
    @yield('judulhalaman')<br>
    @section('konten')
    @show
<footer>Hak Cipta Laura Wilhelmina Theresia
</footer>
</body>
</html> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
        <link
        href="/css/style.css"
        rel="stylesheet">
        <link href="/css/tambah.css"
        rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    <title>PWEB - Laura @yield('title')</title>
  </head>

  <body id="page-top">


<!-- ======= Header ======= -->
<!-- <header id="header" class="header fixed-top d-flex align-items-center">
<div class="d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">Laura Wilhelmina Theresia 5026201137</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div> -->
<!-- End Logo -->

<aside id="sidebar" class="sidebar">
<div style="color: #4154f1; font-size: 15px;" class="text-center mb-5">
    <h3 style="color: hotpink; font-weight: 600;">Laura Wilhelmina Theresia</h3>
    <h3 style="color: hotpink; font-weight: 600;">5026201137</h3>
    <a href="https://github.com/dracuLauraa">
    <img style="height: 150px; width: 143px" class="rounded-circle" src="/lala.jpeg" alt=""> </a>
</div>

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="/pegawai">
      <i class="bi bi-grid"></i>
      <span>Pegawai</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="/absen">
      <i class="bi bi-grid"></i>
      <span>Absen</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="/pensil">
      <i class="bi bi-grid"></i>
      <span>Praktikum</span>
    </a>
  </li>

 
    </ul>
  </li>

</ul>

</aside>

<main id="main" class="main">

@yield('Konten')

</main>

<footer id="footer" class="footer">
<div class="copyright">
  &copy; Copyright <strong><span>Laura Wilhelmina Theresia 5026201137</span></strong>
</div>

</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




@yield('judulhalaman')<br>
<nav>
    <ul></ul>
</nav>
@section('konten')
@show

<footer>Hak Cipta Laura Wilhelmina Theresia
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>    
  </body>
</html>