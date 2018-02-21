@extends ('layouts.superadmin')
@section ('content')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
      </ol>
    
        <table class="table table-bordered"  width="50%" cellspacing="0">
                  <thead>
                    <?php  $i = 1; ?>
                      <tr>
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>judul</th>
                        <th>Status</th>
                      </tr>
                  </thead>
                  
                  <tbody>
                  @foreach ($profils as $p)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $p->profil->nama }}</td>
                        <td>{{ $p->profil->judul }}</td>
                          <td>

                            
                              Terkirim
                          </td>
                      </tr>
                 @endforeach
                  </tbody>  

        </table>
        <table class="table table-bordered"  width="50%" cellspacing="0">
            <thead>
              <?php  $i = 1; ?>
                <tr>
                  <th width="5%">No</th>
                  <th>Nama</th>
                  <th>judul</th>
                  <th>Status</th>
                </tr>
            </thead>
            
            <tbody>
            @foreach ($profilunapproves as $p)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $p->profil->nama }}</td>
                  <td>{{ $p->profil->judul }}</td>
                    <td>
                        Belum Terkirim
                    </td>
                </tr>
           @endforeach
            </tbody>  

  </table>
        <p>Jumlah Proposal Terkirim = {{ $counts}}</p> 
        <p>Jumlah Proposal Belum Terkirim = {{ $unaproves}}</p>

@endsection	