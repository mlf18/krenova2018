@extends ('layouts.admin')
@section ('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Data Pengusul </li>
      </ol>
      <div class="row">
        <div class="col-12">
          <div class="card mb-3">
        <div class="card-header">Data Pengusul  </div>
        <div class="card-body">
		<form>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama"  >
  </div>
  <div class="form-group">
    <label for="jabatan">Jabatan</label>
    <input type="text" class="form-control" id="jabatan"   >
  </div>
  <div class="form-group">
    <label for="jabatan">Lembaga/instansi</label>
    <input type="text" class="form-control" id="lembaga"   >
  </div>
  <div class="form-group">
    <label for="jabatan">Alamat</label>
    <input type="text" class="form-control" id="alamat"   >
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
      <option>	Kota Surakarta</option>
      <option>Kota Tegal</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="jabatan">No Telepon/HP</label>
    <input type="text" class="form-control" id="no_telepon"  >
  </div>
  <button type="button" class="btn btn-primary">Simpan</button>
  </form>
  </div>
          </div>
       
      </div>
    
        </div>
		
		
      </div>
    </div>
@endsection