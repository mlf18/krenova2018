@extends ('layouts.admin')
@section ('content')
	<div class="content-wrapper">
	    <div class="container-fluid">
		    <!-- Breadcrumbs-->
		     <ol class="breadcrumb">
		        <li class="breadcrumb-item">
		          <a href="index.html">Dashboard</a>
		        </li>
		        <li class="breadcrumb-item active">Pendaftaran Bupati/Walikota Pelopor Inovasi Daerah</li>
		    </ol>
	      	<div class="row">
		        <div class="col-12">
		          	<div class="card mb-3">
				        <div class="card-header">
				        FORMULIR KUESIONER BUPATI/WALIKOTA PELOPOR INOVASI DAERAH 
				    	</div>
				        <div class="card-body">
				        	<form>
								<p>A. ALOKASI ANGGARAN</p>
									<div class="form-group">
										<label for="nama">Berapa alokasi anggaran untuk kelitbangan Iptekin dari total APBD? (jelaskan secara spesifik dalam Rp. dan %)</label>
									    <input type="text" class="form-control" id="temuan" placeholder="">
									</div>
								<p>B. PERATURAN DAERAH</p>
									<div class="form-group">
									    <label for="jabatan"> - Adakah Regulasi Daerah yang mendukung kelitbangan Iptekin ? (jelaskan dengan singkat)</label>
									    <input type="text" class="form-control" id="kapan" placeholder=" ">
									</div>
									<div class="form-group">
									    <label for="jabatan">Jika ada, Lampirkan  </label>
									    <input type="file" class="form-control-file" id="kerjasama">
									</div>
									<div class="form-group">
									    <label for="jabatan"> </label>
									    <input type="file" class="form-control-file" id="kerjasama">
									</div>
									  
								<p>C. MoU/KERJASAMA</p>
									<div class="form-group">
									    <label for="jabatan"> - Adakah MoU/Kerjasama terkait Kelitbangan Iptekin dengan Kementerian, Lembaga Litbang Pusat & Daerah serta Perguruan Tinggi?</label>
									    <input type="text" class="form-control" id="kapan" placeholder=""> 
									</div>
									<div class="form-group">
									    <label for="jabatan">Jika ada, Lampirkan  </label>
									    <input type="file" class="form-control-file" id="kerjasama">
									</div>
									<div class="form-group">
									    <label for="jabatan"> </label>
									    <input type="file" class="form-control-file" id="kerjasama">
									</div>
									<div class="form-group">
									    <label for="jabatan"> </label>
									    <input type="file" class="form-control-file" id="kerjasama">
									</div>
									<div class="form-group">
									    <label for="jabatan"> </label>
									    <input type="file" class="form-control-file" id="kerjasama">
									</div>
									<div class="form-group">
									    <label for="jabatan"> </label>
									    <input type="file" class="form-control-file" id="kerjasama">
									</div>
								<p>D. PAMERAN / LOMBA</p>
									<div class="form-group">
									    <label for="jabatan">a) Adakah penyelenggaraan lomba Krenova tingkat kab/kota? Jelaskan </label>
									    <input type="text" class="form-control" id="lomba" >
									</div>
									<div class="form-group">
									    <label for="jabatan">b)	Adakah penyelenggaraan pameran produk inovasi tingkat kab/kota? Jelaskan</label>
									    <input type="text" class="form-control" id="ide" >
									</div>
									  
								<p>E. JUMLAH PESERTA LOMBA KRENOVA/PAMERAN</p>	
									<div class="form-group">
									    <label for="jabatan">a) Berapa jumlah peserta yang mengikuti lomba krenova tingkat kab/kota ?</label>
									    
									    <input type="text" class="form-control" id="ide" >
									</div>
									<div class="form-group">
									    <label for="jabatan"><small>(Lengkapi/lampirkan dengan bukti)</small></label>
										<input type="file" class="form-control-file" id="lampiran">
									</div>
									<div class="form-group">
									    <label for="dimana">b) Berapa jumlah peserta pameran produk inovasi (PPI)/Pameran Sejenis tingkat kab/kota ?</label>
									     <input type="text" class="form-control" id="ide" >
									</div>
									<div class="form-group">
									    <label for="jabatan"><small>(Lengkapi/lampirkan dengan bukti)</small></label>
										<input type="file" class="form-control-file" id="lampiran">
									</div>
									  
								<p>F. JUMLAH PEMENANG LOMBA KRENOVA TINGKAT PROVINSI</p>
									<div class="form-group">
									    <label for="dimana">Jumlah pemenang Lomba Krenova di tingkat Provinsi Tahun 2018 </label>
									      
									     <input type="text" class="form-control" id="ide" placeholder="Diisi oleh BAPPEDA Provinsi"  disabled>
									</div>
									  <button type="button" class="btn btn-primary">Simpan Draft</button> <button type="button" class="btn btn-success">Kirim</button>
							</form>
				        </div>
				    </div>		
				</div>
			</div>
		</div>
	</div>
						
		
				
@endsection