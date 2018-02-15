<div class="tab-pane fade" id="kuesioner" role="tabpanel" aria-labelledby="kuesioner-tab">
        {{--  <form>  --}}
            <br>
            <p>A. ORISINALITAS DAN KEPIONIRAN</p>
            <div class="form-group">
                <label for="temuan_asli">- Apakah temuan ini merupakan hasil temuan asli? Jelaskan</label>
                <input type="text" class="form-control" id="temuan_asli" name="temuan_asli">
            </div>
            <div class="form-group">
                <label for="waktu_produksi"> - Kapan temuan ini diproduksi (bulan, tahun)?</label>
                <input type="text" class="form-control" id="waktu_produksi" name="waktu_produksi">
            </div>
            <div class="form-group">
                <label for="orisinalitas_alat"> - Apakah sudah ada alat sejenis yang sudah ada? Jelaskan</label>
                <input type="text" class="form-control" id="orisinalitas_alat" name="orisinalitas_alat">
            </div>
            <div class="form-group">
                <label for="orisinalitas_ide">- Apakah temuan saudara/i merupakan hasil pengembangan ide orang lain? Jelaskan</label>
                <input type="text" class="form-control" id="orisinalitas_ide" name="orisinalitas_ide">
            </div>
            <p>B. PENERAPAN <br>a. Implementasi </p>
            <div class="form-group">
                <label for="implementasi_komersil">- Apakah sudah dipersiapkan untuk komersial/dijual ? </label>
                <input type="text" class="form-control" id="implementasi_komersil" name="implementasi_komersil">
            </div>
            <div class="form-group">
                <label for="implementasi_pihak">- Dimana, oleh siapa ?</label>
                <input type="text" class="form-control" id="implementasi_pihak" name="implementasi_pihak">
            </div>
            <div class="form-group">
                <label for="implementasi_asal_usul">- Fasilitas dan Lomba apa saja yang pernah diterima/diikuti? Jelaskan </label>
                <input type="text" class="form-control" id="implementasi_asal_usul" name="implementasi_asal_usul">
            </div>
            <p>b. Penerapan</p>	
            <div class="form-group">
                <label for="penerapan_temuan"> -  Apakah temuan saudara sudah diterapkan?</label>
                <input type="text" class="form-control" id="penerapan_temuan" name="penerapan_temuan">
            </div>
            <div class="form-group">
                <label for="penerapan_pelaku">- Dimana/oleh siapa ?</label>
                <input type="text" class="form-control" id="penerapan_pelaku" name="penerapan_pelaku">
            </div>
            <div class="form-group">
                <label for="penerapan_cakupan">- Cakupan/Skala Penerapan (Kab/Kota, Provinsi, Nasional)?</label>
                <input type="text" class="form-control" id="penerapan_cukupan" name="penerapan_cukupan">
            </div>
            <p>C. MANFAAT<br>a. Penyerahan Bahan Baku Lokal</p>
            <div class="form-group">
                <label for="bahan_baku_lokal">- Berapa persen penggunaan bahan baku lokal ? </label>
                <input type="text" class="form-control" id="manfaat_bahan_baku_lokal" name="bahan_baku_lokal" placeholder="Jelakan nilai, volume, waktu, tenaga, dsb" >
            </div>
            <p> b. Peningkatan proses/kapasitas/produktivitas ?</p>
            <div class="form-group">
                <label for="manfaat_produktifitas">- Seberapa besar produktivitas yang dihasilkan ?</label>
                <input type="text" class="form-control" id="manfaat_produktifitas" name="manfaat_produktifitas">
            </div>
            <p>c. Penyerapan Tenaga Kerja</p>
            <div class="form-group">
                <label for="manfaat_lapangan_kerja">- Berapa banyak tenaga kerja yang diserap dalam penciptaan/penerapan produk (lapangan kerja) ?</label>
                <input type="text" class="form-control" id="manfaat_lapangan_kerja" name="manfaat_lapangan_kerja">
            </div>
            <p>D. KEBERLANGSUNGAN/KOMERSIALISASI<br>
                a. Prospek Bisnis / Komersial
            </p>
            <div class="form-group">
                <label for="komersil_dimana">- Oleh siapa dan dimana?</label>
                <input type="text" class="form-control" id="komersil_dimana" name="komersil_dimana">
            </div>
            <div class="form-group">
                <label for="komersil_cara"> - Bagaimana Caranya ?</label>
                <input type="text" class="form-control" id="komersil_cara" name="komersil_cara" >
            </div>
            <div class="form-group">
                <label for="komersil_biaya"> - Perhitungan Biaya Produksi</label>
                <input type="text" class="form-control" id="komersil_biaya" name="komersil_biaya">
            </div>
            <div class="form-group">
                <label for="komersil_omset">- Berapa Omset Penjualan ?</label>
                <input type="text" class="form-control" id="komersil_omset" name="komersil_omset">
            </div>
            <p>b. Ketersediaan Bahan Baku</p>
            <div class="form-group">
                <label for="komersil_bahan_baku">- Dimana bahan baku pembuatan temuan ini bisa saudara/i diperoleh (diakses)?, jelaskan </label>
                <input type="text" class="form-control" id="komersil_bahan_baku" name="komersil_bahan_baku">
            </div>
            <div class="form-group">
                <label for="komersil_banyak">- Banyak tidaknya ketersediaan bahan baku untuk produksi temuan/inovasi?, jelaskan </label>
                <input type="text" class="form-control" id="komersil_banyak" name="komersil_banyak">
            </div>
            <p>c. Berorientasi Kebutuhan Masa Depan</p>
            <div class="form-group">
                <label for="komersil_kebutuhan">- Menjawab kebutuhan teknologi bagi masyarakat (saat ini & ke depan), jelaskan </label>
                <input type="text" class="form-control" id="komersil_kebutuhan" name="komersil_kebutuhan">
            </div>
            <button type="submit" value="draft-kuesioner" name="submit" class="btn btn-primary">Simpan Daft</button> <a href="#" id="lanjutkan_kuesioner" class="btn btn-secondary">Lanjutkan</a> 
        {{--  </form>  --}}
    </div>