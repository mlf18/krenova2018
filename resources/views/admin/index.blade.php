@extends ('layouts.admin')
@section ('content')

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Data Inventor</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <div class="card mb-3">
            <div class="card-header"><button type="button" class="btn btn-primary">Tambah Inventor</button> </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Pekerjaan</th>
                      <th>No Telp</th>
                      <th>Email</th>
          				  <th>Pilihan</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th width="5%">No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                            <th>No Telp</th>
                            <th>Email</th>
          				  <th>Pilihan</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          @foreach($inventors as $inventor)
                          <tr>
                            <td>1</td>
          				  <td>{{$inventor->nama}}</td>
                            <td>{{$inventor->alamat}}</td>
                            <td>pekerjaan</td>
                            <td>{{$inventor->no_telp}}</td>
                            <td>{{$inventor->email}}</td>
                    <td><a href="{{url('admin/editprofil/'.$inventor->id)}}" class="btn btn-primary">Edit</a> 
                      <form method="post" action="{{url('/admin/deletesprofil/'.$inventor->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

@endsection