@extends ('layouts.admin')
@section ('content')
<div class="content-wrapper">
    <div class="container-fluid">
        @include('layouts.pesan')
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
            <i class="fa fa-fw fa-sign-in"></i>
            </div>
            <div class="mr-5"><b>Pendaftaran Bupati/Walikota Pelopor Inovasi Daerah</b></div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="pendaftranbupati.html">
            <span class="float-left">Lihat Status Pendaftaran Bupati/Walikota </span>
            <span class="float-right">
            <i class="fa fa-angle-right"></i>
            </span>
          </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
            <i class="fa fa-fw fa-key"></i>
            </div>
            <div class="mr-5"><b>Ganti Password</b></div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="gantipassword.html">
            <span class="float-left">Ganti Password</span>
            <span class="float-right">
            <i class="fa fa-angle-right"></i>
            </span>
          </a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection