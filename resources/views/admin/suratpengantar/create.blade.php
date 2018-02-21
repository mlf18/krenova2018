@extends('layouts.admin')

@section('content')

	<div class="content-wrapper">
		<div class="container-fluid">
				@include('layouts.pesan')
      <!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">Dashboard</a>
				</li>
				<li class="breadcrumb-item active">
					Unggah Surat Pengantar
				</li>
			</ol>
			<div class="row">
				<div class="col-12">
					<div class="card mb-3">
						<div class="card-header">Unggah Surat Pengantar</div>
						<div class="card-body">
						 <form method="POST" action="{{route('pengantarkota.store')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
							<div class="form-group">
								<label for="nama_surat">Unggah Surat Pengantar  <br><small>File pdf</small></label>
			
								<input type="file" class="form-control-file" id="nama_surat" name="nama_surat">
							</div>
							<button type="submit" class="btn btn-success">Kirim</button>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
