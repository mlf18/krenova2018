@extends ('layouts.inventor')
@section ('content')


<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href="{{route('inventor.index')}}">Dashboard Inventor</a>
        </li>
        <li class="breadcrumb-item active">Pengajuan Proposal</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <div class="card mb-3">
        <div class="card-header">Pengajuan Proposal</div>
        <div class="card-body">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">
				<a class="nav-link active" id="pendaftaran-tab" data-toggle="tab" href="#pendaftaran" role="tab" aria-controls="pendaftaran" aria-selected="true">Formulir Pendaftaran</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="kuesioner-tab" data-toggle="tab" href="#kuesioner" role="tab" aria-controls="kuesioner" aria-selected="false">Kuesioner Temuan</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" id="proposal-tab" data-toggle="tab" href="#proposal" role="tab" aria-controls="contact" aria-selected="false">Proposal</a>
			  </li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="pendaftaran" role="tabpanel" aria-labelledby="pendaftaran-tab">
					<form>
						<div class="form-group">
						<br>
						<h4>PENGUSUL</h4>
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama"   disabled>
						</div>
						<div class="form-group">
							<label for="jabatan">Jabatan</label>
							<input type="text" class="form-control" id="jabatan"   disabled>
						</div>
						<div class="form-group">
							<label for="jabatan">Lembaga/Instansi</label>
							<input type="text" class="form-control" id="lembaga"   disabled>
						</div>
						<div class="form-group">
							<label for="jabatan">Alamat</label>
							<input type="text" class="form-control" id="alamat"   disabled>
						</div>
						<div class="form-group">
							<label for="jabatan">Kabupaten/Kota</label>
								<select class="form-control" id="bidang" disabled >
								  <option>Kabupaten Banjarnegara</option>
								  <option>Kabupaten Banyumas</option>
								  <option>Kabupaten Batang</option>
								  <option>Kabupaten Blora</option>
								  <option>Kabupaten Boyolali</option>
								  <option>Kabupaten Brebes</option>
								  <option>Kabupaten Cilacap</option>
								  <option>Kabupaten Demak</option>
								  <option>Kabupaten Grobogan</option>
								  <option>Kabupaten Jepara</option>
								  <option>Kabupaten Karanganyar</option>
								  <option>Kabupaten Kebumen</option>
								  <option>Kabupaten Kendal</option>
								  <option>Kabupaten Klaten</option>
								  <option>Kabupaten Kudus</option>
								  <option>Kabupaten Magelang</option>
								  <option>Kabupaten Pati</option>
								  <option>Kabupaten Pekalongan</option>
								  <option>Kabupaten Pemalang</option>
								  <option>Kabupaten Purbalingga</option>
								  <option>Kabupaten Purworejo</option>
								  <option>Kabupaten Rembang</option>
								  <option>Kabupaten Semarang</option>
								  <option>Kabupaten Sragen</option>
								  <option>Kabupaten Sukoharjo</option>
								  <option>Kabupaten Tegal</option>
								  <option>Kabupaten Temanggung</option>
								  <option>Kabupaten Wonogiri</option>
								  <option>Kabupaten Wonosobo</option>
								  <option>Kota Magelang</option>
								  <option>Kota Pekalongan</option>
								  <option>Kota Salatiga</option>
								  <option>Kota Semarang</option>
								  <option>Kota Surakarta</option>
								  <option>Kota Tegal</option>
								</select>
						</div>
						<div class="form-group">
							<label for="jabatan">No Telepon/HP</label>
								<input type="text" class="form-control" id="no_telepon"   disabled>
						</div>
						<p>Dengan ini kami merekomendasikan/mengusulkan nama tersebut di bawah ini untuk mengikuti pendaftaran Lomba Krenova Provinsi Jawa Tengah Tahun 2018.</p>
		  
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-perorangan-tab" data-toggle="tab" href="#nav-perorangan" role="tab" aria-controls="nav-perorangan" aria-selected="true">Perorangan</a>
								<a class="nav-item nav-link" id="nav-kelompok-tab" data-toggle="tab" href="#nav-kelompok" role="tab" aria-controls="nav-kelompok" aria-selected="false">Kelompok</a>
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-perorangan" role="tabpanel" aria-labelledby="nav-perorangan-tab">
								<br>
								<h4>Peserta Perorangan</h4>
				
								<div class="form-group">
									<label for="bidang">Bidang</label>
									<select class="form-control" id="bidang"  >
									  <option>Agribisnis dan pangan</option>
									  <option>Energi</option>
									  <option>Kehutanan dan lingkungan hidup</option>
									  <option>Kelautan dan perikanan</option>
									  <option>Kesehatan, obat-obatan dan kosmetika</option>
									  <option>Pendidikan</option>
									  <option>Rekayasa Teknologi dan manufaktur</option>
									  <option>Kerajinan dan industri rumah tangga</option>
									  <option>Sosial</option>
									</select>
								</div>
								<div class="form-group">
									<label for="jabatan">Alamat</label>
									<input type="text" class="form-control" id="alamat" >
								</div>
								<div class="form-group">
									<label for="jabatan">Pekerjaan</label>
									<input type="text" class="form-control" id="pekerjaan" >
								</div>
								<div class="form-group">
									<label for="jabatan">No Telepon/HP</label>
									<input type="text" class="form-control" id="no_telpon" >
								</div>
								<div class="form-group">
									<label for="jabatan">Alamat E-mail</label>
									<input type="e-mail" class="form-control" id="alamat_email" >
								</div>
		  
							</div>
							<div class="tab-pane fade" id="nav-kelompok" role="tabpanel" aria-labelledby="nav-kelompok-tab">
								<br>
								<h4>Peserta Kelompok</h4>
								<div class="form-group">
									<label for="bidang">Bidang</label>
									<select class="form-control" id="bidang"  >
									  <option>Agribisnis dan pangan</option>
									  <option>Energi</option>
									  <option>Kehutanan dan lingkungan hidup</option>
									  <option>Kelautan dan perikanan</option>
									  <option>Kesehatan, obat-obatan dan kosmetika</option>
									  <option>Pendidikan</option>
									  <option>Rekayasa Teknologi dan manufaktur</option>
									  <option>Kerajinan dan industri rumah tangga</option>
									  <option>Sosial</option>
									</select>
								</div>
								<div class="form-group">
									<label for="jabatan">Nama Kelompok</label>
									<input type="text" class="form-control" id="nama_kelompok" >
								</div>
		  
								<div class="form-group">
									<label for="jabatan">Nama Ketua Kelompok</label>
									<input type="text" class="form-control" id="no_telpon" >
								</div>
								
								<div class="form-group">
									<label for="jabatan">Alamat Kelompok</label>
									<input type="text" class="form-control" id="alamat_kelompok" >
								</div>
								
								<div class="form-group">
									<label for="no_hp">No Telepon/HP Ketua</label>
									<input type="text" class="form-control" id="nomor telepon" >
								</div>
								<div class="form-group">
									<label for="no_hp">Alamat E-mail</label>
									<input type="e-mail" class="form-control" id="alamat_email">
								</div>
								<div class="form-group">
									<label for="anggota">Nama Anggota</label>
									<input type="text" class="form-control" id="nama_anggota" placeholder="Nama Anggota 1">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="nama_anggota" placeholder="Nama Anggota 2">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="nama_anggota" placeholder="Nama Anggota 3">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="nama_anggota" placeholder="Nama Anggota 4">
								</div>
								<div class="form-group">
									<label for="anggota">Karya Yang Diusulkan</label>
									<input type="text" class="form-control" id="karya_usul" >
								</div>
		  
								<div class="form-group">
									<label for="anggota">Temuan Baru</label>
									<input type="text" class="form-control" id="temuan_baru" >
								</div>
								<div class="form-group">
									<label for="anggota">Pengembangan dari</label>
									<input type="text" class="form-control" id="pengembangan_dari" >
								</div>
		  
							</div>
						</div>
							<button type="button" class="btn btn-primary">Simpan Daft</button> <a href="" class="btn btn-secondary">Lanjutkan</a> 
					</form>
				
				</div>
				<div class="tab-pane fade" id="kuesioner" role="tabpanel" aria-labelledby="kuesioner-tab">
					<form>
							<br>
							<p>A. ORISINALITAS DAN KEPIONIRAN</p>
							<div class="form-group">
								<label for="nama">- Apakah temuan ini merupakan hasil temuan asli? Jelaskan</label>
								<input type="text" class="form-control" id="temuan" >
							</div>
							<div class="form-group">
								<label for="jabatan"> - Kapan temuan ini diproduksi (bulan, tahun)?</label>
								<input type="text" class="form-control" id="kapan" >
							</div>
							<div class="form-group">
								<label for="jabatan"> - Apakah sudah ada alat sejenis yang sudah ada? Jelaskan</label>
								<input type="text" class="form-control" id="alat" >
							</div>
							<div class="form-group">
								<label for="jabatan">- Apakah temuan saudara/i merupakan hasil pengembangan ide orang lain? Jelaskan</label>
								<input type="text" class="form-control" id="alamat" >
							</div>
  
							<p>B. PENERAPAN <br>a. Implementasi </p>
							<div class="form-group">
								<label for="bidang">- Apakah sudah dipersiapkan untuk komersial/dijual ? </label>
								<input type="text" class="form-control" id="ide" >
							</div>
   
							<div class="form-group">
								<label for="jabatan">- Dimana, oleh siapa ?</label>
								<input type="text" class="form-control" id="nama" >
							</div>
							<div class="form-group">
								<label for="jabatan">- Fasilitas dan Lomba apa saja yang pernah diterima/diikuti? Jelaskan </label>
								<input type="text" class="form-control" id="nama" >
							</div>
							<p>b. Penerapan</p>	
							<div class="form-group">
								<label for="jabatan"> -  Apakah temuan saudara sudah diterapkan?</label>
								<input type="text" class="form-control" id="temuan" >
							</div>
							<div class="form-group">
								<label for="dimana">- Dimana/oleh siapa ?</label>
								<input type="text" class="form-control" id="dimana" >
							</div>
							<div class="form-group">
								<label for="jabatan">- Cakupan/Skala Penerapan (Kab/Kota, Provinsi, Nasional)?</label>
								<input type="text" class="form-control" id="cukupan" >
							</div>
							<p>C. MANFAAT<br>a. Penyerahan Bahan Baku Lokal</p>
							<div class="form-group">
								<label for="jabatan">- Berapa persen penggunaan bahan baku lokal ? </label>
								<input type="text" class="form-control" id="no_telpon" placeholder="Jelakan nilai, volume, waktu, tenaga, dsb" >
							</div>
							<p> b. Peningkatan proses/kapasitas/produktivitas ?</p>
							<div class="form-group">
								<label for="jabatan">- Seberapa besar produktivitas yang dihasilkan ?</label>
								<input type="e-mail" class="form-control" id="alamat_email" >
							</div>
							<p>c. Penyerapan Tenaga Kerja</p>
							<div class="form-group">
								<label for="jabatan">- Berapa banyak tenaga kerja yang diserap dalam penciptaan/penerapan produk (lapangan kerja) ?</label>
								<input type="text" class="form-control" id="nama_kelompok" >
							</div>
							<p>D. KEBERLANGSUNGAN/KOMERSIALISASI<br>
								a. Prospek Bisnis / Komersial
							</p>
							<div class="form-group">
								<label for="jabatan">- Oleh siapa dan dimana?</label>
								<input type="text" class="form-control" id="dimana" >
							</div>
							<div class="form-group">
								<label for="jabatan"> - Bagaimana Caranya ?</label>
								<input type="text" class="form-control" id="alamat_kelompok" >
							</div>
							<div class="form-group">
								<label for="jabatan"> - Perhitungan Biaya Produksi</label>
								<input type="text" class="form-control" id="alamat_kelompok" >
							</div>
							<div class="form-group">
								<label for="no_hp">- Berapa Omset Penjualan ?</label>
								<input type="text" class="form-control" id="nomor telepon" >
							</div>
							<p>b. Ketersediaan Bahan Baku</p>
							<div class="form-group">
								<label for="no_hp">- Dimana bahan baku pembuatan temuan ini bisa saudara/i diperoleh (diakses)?, jelaskan </label>
								<input type="e-mail" class="form-control" id="alamat_email" >
							</div>
							<div class="form-group">
								<label for="anggota">- Banyak tidaknya ketersediaan bahan baku untuk produksi temuan/inovasi?, jelaskan </label>
								<input type="text" class="form-control" id="nama_anggota" >
							</div>
							<p>c. Berorientasi Kebutuhan Masa Depan</p>
						 
							<div class="form-group">
								<label for="anggota">- Menjawab kebutuhan teknologi bagi masyarakat (saat ini & ke depan), jelaskan </label>
								<input type="text" class="form-control" id="nama_anggota" >
							</div>
							<button type="button" class="btn btn-primary">Simpan Daft</button> <a href="" class="btn btn-secondary">Lanjutkan</a> 
					</form>
		
				</div>
				<div class="tab-pane fade" id="proposal" role="tabpanel" aria-labelledby="proposal-tab">
					<form>
						<div class="form-group">
							<label for="judul">Judul</label>
							<input type="text" class="form-control" id="judul" >
						</div>
						<div class="form-group">
							<label for="abstrak">Abstrak / Ringkasan Eksekutif</label>
								<textarea class="form-control" id="abstrak" rows="3" placeholder="Tuliskan Abstrak maksimal 500 kata"></textarea>
						</div>
						<div class="form-group">
							<label for="latar_belakang">Latar Belakang</label>
								<textarea class="form-control" id="latar_belakang" rows="3" ></textarea>
						</div>
						<div class="form-group">
							<label for="maksud_tujuan">Maksud dan Tujuan</label>
								<textarea class="form-control" id="maksud_tujuan" rows="3" ></textarea>
						</div>
						<div class="form-group">
							<label for="manfaat">Manfaat</label>
							<textarea class="form-control" id="menfaat" rows="3" ></textarea>
						</div>
						<div class="form-group">
							<label for="spesifikasi">Spesifikasi Teknis</label>
							<textarea class="form-control" id="spesifikasi" rows="3" ></textarea>
						</div>
						<div class="form-group">
							<label for="Keunggulan">Keunggulan dan Perbedaan bila dibandingkan  dengan penemuan sejenis sebelumnya </label>
							<textarea class="form-control" id="keunggulan" rows="3" ></textarea>
						</div>
   
						<div class="form-group">
							<label for="penerapan">Penerapan pada Masyarakat dan Dunia Industri</label>
							<textarea class="form-control" id="penerapan" rows="3" ></textarea>
						</div>
						<div class="form-group">
							<label for="perhitungan">Perhitungan Biaya Produksi Temuan/Inovasi</label>
							<textarea class="form-control" id="Perhitungan" rows="3" ></textarea>
						</div>
  
						<div class="form-group">
							<label for="prospek">Prospek Bisnis / Komersialisasi</label>
							<textarea class="form-control" id="Prospek" rows="3"></textarea>
						</div>
						<div class="form-group">
							<label for="foto">Foto Produk (Maksimal size 1 mb) <br><small>File pdf/jpg</small></label>
							<input type="file" class="form-control-file" id="file_1">
						</div>
						<div class="form-group">
							<label for="file_2"></label>
							<input type="file" class="form-control-file" id="file_2">
						</div>
  
						<div class="form-group">
							<label for="file_3"></label>
							<input type="file" class="form-control-file" id="file_3">
						</div>
						  
						<div class="form-group">
							<label for="file_4"></label>
							<input type="file" class="form-control-file" id="file_4">
						</div>
						<div class="form-group">
							<label for="anggota">Surat Pengantar (Maksimal size 1 mb) <br><small>File pdf/jpg</small></label>
							<input type="file" class="form-control-file" id="surat_pengantar">
						</div>
  
						<div class="form-group">
							<label for="surat">Surat Pernyataan Keaslian Temuan (Maksimal size 1 mb) <br><small>File pdf/jpg</small></label>
							<input type="file" class="form-control-file" id="surat">
						</div>
						<div class="form-group">
							<label for="surat">Data Dukung Kelengkapan Proposal atau Profil Temuan/Inovasi <small>(Contoh : Uji Lab, Sertifikasi, Legalitas Usaha, Berita media cetak/elektronik dan lain-lain)</small><br><small>File pdf, maksimal 10 mb</small></label>
							<input type="file" class="form-control-file" id="surat">
						</div>
						<div class="form-group">
							<label for="no_hp"></label>
							<input type="file" class="form-control-file" id="daftar_riwayat">
						</div>
						<div class="form-group">
							<label for="no_hp"></label>
							<input type="file" class="form-control-file" id="daftar_riwayat">
						</div>
						<div class="form-group">
							<label for="no_hp"></label>
							<input type="file" class="form-control-file" id="daftar_riwayat">
						</div>
						<div class="form-group">
							<label for="no_hp"></label>
							<input type="file" class="form-control-file" id="daftar_riwayat">
						</div>
						<div class="form-group">
							<label for="no_hp">Daftar Riwayat Hidup (Maksimal size 1 mb) <br><small>File pdf/jpg</small> </label>
							<input type="file" class="form-control-file" id="daftar_riwayat">
						</div>
						<div class="form-group">
							<label for="no_hp">Foto KTP/Kartu Pelajar (Maksimal size 1 mb) <br><small>File pdf/jpg</small> </label>
							<input type="file" class="form-control-file" id="foto_ktp">
						</div>
  
						<button type="button" class="btn btn-primary">Simpan Draft</button> <button type="button" class="btn btn-success">Kirim</button> 
					</form>
	
				</div>
			  
			</div>
		
		</div>
		
        </div>
       
      </div>
    
        </div>
		
		
      </div>
    </div>
    <!-- /.container-fluid-->
@endsection