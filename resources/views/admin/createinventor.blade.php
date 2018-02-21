@extends ('layouts.admin')
@section ('content')
<div class="content-wrapper">
    <div class="container-fluid">
            @include('layouts.pesan')
  <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
            </li>
            
            <li class="breadcrumb-item active">
                <a href="datainventor.html"> Data Inventor</a>
            </li>
            <li class="breadcrumb-item active">
                Tambah Inventor
            </li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">Tambah Inventor</div>
                    <div class="card-body">
                        <form method="POST" action="{{url('/inventor')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                <label for="exampleFormControlInput1">Nama/Kelompok</label>
                <input type="text" class="form-control" id="Nama" name="nama">
                </div>
                 <div class="form-group">
                <label for="exampleFormControlInput1">Alamat</label>
                <input type="text" class="form-control" id="Alamat" name="alamat">
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Kabupaten/Kota</label>
                <select class="form-control" id="kabupaten" name="kabupaten">
                                <option value="banjarnegara" >Kabupaten Banjarnegara</option>
                                <option value="banyumas">Kabupaten Banyumas</option>
                                <option value="batang"  >Kabupaten Batang</option>
                                <option value="blora" >Kabupaten Blora</option>
                                <option value="boyolali" >Kabupaten Boyolali</option>
                                <option value="brebes" >Kabupaten Brebes</option>
                                <option value="cilacap" >Kabupaten Cilacap</option>
                                <option value="demak" >Kabupaten Demak</option>
                                <option value="grobogan">Kabupaten Grobogan</option>
                                
                                <option value="jepara" >Kabupaten Jepara</option>
                                <option value="karanganyar" >Kabupaten Karanganyar</option>
                                <option value="kebumen" >Kabupaten Kebumen</option>
                                <option value="kendal" >Kabupaten Kendal</option>
                                <option value="klaten" >Kabupaten Klaten</option>
                                <option value="kudus" >Kabupaten Kudus</option>
                                <option value="magelang" >Kabupaten Magelang</option>
                                <option value="pati" >Kabupaten Pati</option>
                                <option value="pekalongan" >Kabupaten Pekalongan</option>
                                
                                <option value="pemalang" >Kabupaten Pemalang</option>
                                <option value="purbalingga" >Kabupaten Purbalingga</option>
                                <option value="purworejo" >Kabupaten Purworejo</option>
                                <option value="rembang" >Kabupaten Rembang</option>
                                <option value="semarang" >Kabupaten Semarang</option>
                                <option value="sragen" >Kabupaten Sragen</option>
                                <option value="sukoharjo" >Kabupaten Sukoharjo</option>
                                <option value="tegal" >Kabupaten Tegal</option>
                                <option value="temanggung" >Kabupaten Temanggung</option>
                                
                                <option value="wonogiri" >Kabupaten Wonogiri</option>
                                <option value="wonosobo" >Kabupaten Wonosobo</option>
                                <option value="kota magelang" >Kota Magelang</option>
                                <option value="kota pekalongan" >Kota Pekalongan</option>
                                <option value="kota salatiga" >Kota Salatiga</option>
                                <option value="kota semarang" >Kota Semarang</option>
                                <option value="kota surakarta" >Kota Surakarta</option>
                                <option value="kota tegal" >Kota Tegal</option>
                </select>
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">No Telepon/HP</label>
                <input type="text" class="form-control" id="no" name="no_telp">
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Alamat Email</label>
                <input type="email" class="form-control" id="e-mail" name="email">
                </div>
                 <div class="form-group">
                <label for="exampleFormControlSelect1">Judul Temuan/Inovasi</label>
                <input type="text" class="form-control" id="inovasi" name="inovasi">
                </div>
                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                </div>
                 <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection