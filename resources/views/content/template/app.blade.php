<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>KRENOVA JAWA TENGAH</title>
    <!-- Bootstrap core CSS-->
    <link href="{{url('front_end/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{url('front_end/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    
    
    <link href="{{url('front_end/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{url('front_end/css/sb-admin.css')}}" rel="stylesheet">
    <style>
        #map {
          width: 100%;
          height: 400px;
          background-color: grey;
        }
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><b>KRENOVA JAWA TENGAH</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item {{isset($navbar[0])?$navbar[0]:''}}">
                <a class="nav-link" href="{{url('/')}}">Beranda 
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              
               <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Informasi
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('/artikel')}}">Berita</a>
            <a class="dropdown-item" href="{{url('/panduan')}}">Panduan</a>
            <a class="dropdown-item" href="{{url('/daftar-pemenang')}}">Daftar Pemenang</a>
            <a class="dropdown-item" href="{{url('/rekap')}}">Rekap Pendaftaran</a>
          </div>
        </li>
              <li class="nav-item {{isset($navbar[2])?$navbar[2]:''}}">
                <a class="nav-link" href="{{url('/direktori')}}">Direktori</a>
              </li>
              
              <li class="nav-item {{isset($navbar[3])?$navbar[3]:''}}">
                <a class="nav-link" href="{{url('/polling')}}">Polling</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/login')}}">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
	@yield('content')
  <footer class="footer" style="background:#C0C0C0;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-center text-lg-left">
            <h3>KONTAK KAMI:</h3>
			<p>UPP IPTEKIN BAPPEDA PROVINSI JAWA TENGAH<br>
			Jln. Imam Bonjol No. 190 Semarang, Jawa Tengah<br>
			Website : uppiptekin.bappeda.jatengprov.go.id<br>
			Email: uppiptekin.bappeda@jatengprov.go.id<br>
			Phone: (024) 3540025, 3546063, 3521411<br>
			Fax: (024)3560505</p>
          </div>
          <div class="col-lg-6 text-center text-lg-right my-auto">
              <ul class="list-inline mb-0">
                <li class="list-inline-item mr-3">
                  <a href="https://www.facebook.com/iptekinjateng" target="_blank">
                    <i class="fa fa-facebook fa-2x fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item mr-3">
                  <a href="https://twitter.com/iptekinjateng" target="_blank">
                    <i class="fa fa-twitter fa-2x fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/iptekinjateng/" target="_blank">
                    <i class="fa fa-instagram fa-2x fa-fw"></i>
                  </a>
                </li>
          <li class="list-inline-item">
                  <a href="http://uppiptekin.bappeda.jatengprov.go.id" target="_blank">
                    <i class="fa fa fa-globe fa-2x fa-fw"></i>
                  </a>
                </li>
              </ul>
        <br>
        <a href="https://twitter.com/hashtag/KrenovaJateng" target="_blank"><h3>#KrenovaJateng</h3></a>
            </div>
        </div>
      </div>
    </footer>
	<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; UPP IPTEKIN BAPPEDA PROVINSI JAWA TENGAH 2018</p>
      </div>
      <!-- /.container -->
    </footer>
      
    <!-- Bootstrap core JavaScript-->
    <script src="{{url('front_end/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('front_end/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{url('front_end/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
</body>
</html>
