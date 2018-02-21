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

  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{route('inventor.index')}}">Dashboard Inventor</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Invetor">
          <a class="nav-link" href="{{url('inventor/editprofil') }}">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Profil Inventor</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Penganjuan Proposal">
          <a class="nav-link" href="{{route('proposal.create')}}">
            <i class="fa fa-fw fa-file-text"></i>
            <span class="nav-link-text">Penganjuan Proposal</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ganti Password">
          <a class="nav-link" href="{{url('user/edit')}}">
            <i class="fa fa-fw fa-key"></i>
            <span class="nav-link-text">Ganti Password</span>
          </a>
        </li>
    
        
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">      
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Keluar</a>
        </li>
      </ul>
    </div>
  </nav>

  @yield ('content')
  
   <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Krenova 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <script src="{{asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin.min.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('js/sb-admin-datatables.min.js') }}"></script>
    <script>
      $(document).ready(function(){
        $("#lanjutkan_pendaftaran").click(function(){
            $("#pendaftaran").removeClass("active");
            $("#pendaftaran").removeClass("show");
            $("#pendaftaran-tab").removeClass("active");
            $("#pendaftaran-tab").removeClass("show");
            $("#kuesioner-tab").addClass("active");
            $("#kuesioner-tab").addClass("show");
            $("#kuesioner").addClass("active");
            $("#kuesioner").addClass("show");
        });
        $("#lanjutkan_kuesioner").click(function(){
          $("#kuesioner-tab").removeClass("active");
          $("#kuesioner-tab").removeClass("show");
          $("#kuesioner").removeClass("active");
          $("#kuesioner").removeClass("show");
          $("#proposal").addClass("active");
          $("#proposal").addClass("show");
          $("#proposal-tab").addClass("active");
          $("#proposal-tab").addClass("show");
          
      });
    });
    </script>
</body>

</html>
