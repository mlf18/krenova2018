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
                          
                          <tr>
                            <td>1</td>
          				  <td>Ahmad Syarifuddin Latif</td>
                            <td>Desa Mangunrejo Kec. Kebongung</td>
                            <td>Swasta</td>
                            <td>087832203210</td>
                            <td>fuddin@mail.com</td>
          				  <td><button type="button" class="btn btn-primary">Edit</button> 
          						<button type="button" class="btn btn-danger">Hapus</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

@endsection