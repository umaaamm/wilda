<?php
    @$id=$_GET['id_edit'];
    $query_edit = $koneksi->query("SELECT * from tbl_pendaftar where id_pendaftar='".$id."'");
    $tampil_edit = $query_edit->fetch_assoc();
?>
<?php
if (isset($_POST['submit'])) {
     $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $nisn = $_POST['nisn'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $ttl = $_POST['ttl'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $no_telp_rumah = $_POST['no_telp_rumah'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $status_dalam_keluarga = $_POST['status_dalam_keluarga'];
    $anak_ke = $_POST['anak_ke'];
    $cita_cita = $_POST['cita_cita'];
    $goldar = $_POST['goldar'];
    $jarak_tempuh = $_POST['jarak_tempuh'];
    $alat_transportasi_kesekolah = $_POST['alat_transportasi_kesekolah'];
    $email = $_POST['email'];
    $kode_pos = $_POST['kode_pos'];
    $jurusan = $_POST['jurusan'];
    $jurusan2 = $_POST['jurusan2'];
    $nama_ayah = $_POST['nama_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $penghasilan_ayah = $_POST['penghasilan_ayah'];
    $no_telpon_rumah_ayah = $_POST['no_telpon_rumah_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $penghasilan_ibu = $_POST['penghasilan_ibu'];
    $no_telpon_rumah_ibu = $_POST['no_telpon_rumah_ibu'];
    $nama_wali = $_POST['nama_wali'];
    $pekerjaan_wali = $_POST['pekerjaan_wali'];
    $pendidikan_wali = $_POST['pendidikan_wali'];
    $penghasilan_wali = $_POST['penghasilan_wali'];
    $no_telp_wali = $_POST['no_telp_wali'];
    $nama_asal_sekolah = $_POST['nama_asal_sekolah'];
    $alamat_sekolah_asal = $_POST['alamat_sekolah_asal'];
    $status_sekolah = $_POST['status_sekolah'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];
    $seri_ijazah = $_POST['seri_ijazah'];
    $seri_skhu = $_POST['seri_skhu'];
    $kode_peserta_smp = $_POST['kode_peserta_smp'];
    $kode_pos_smp = $_POST['kode_pos_smp'];
    $id_register = $_POST['id_register'];

    $query_tambah = $koneksi->query("UPDATE tbl_pendaftar SET nama='" . $nama . "',nis='" . $nis . "',nisn='" . $nisn . "',jenis_kelamin='" . $jenis_kelamin . "',ttl='" . $ttl . "',agama='" . $agama . "',alamat='" . $alamat . "',no_telp_rumah='" . $no_telp_rumah . "',tinggi_badan='" . $tinggi_badan . "',status_dalam_keluarga='" . $status_dalam_keluarga . "',anak_ke='" . $anak_ke . "',cita_cita='" . $cita_cita . "',goldar='" . $goldar . "',jarak_tempuh='" . $jarak_tempuh . "',alat_transportasi_kesekolah='" . $alat_transportasi_kesekolah . "',email='" . $email . "',kode_pos='" . $kode_pos . "',jurusan1='" . $jurusan . "',jurusan2='" . $jurusan2 . "',nama_ayah='" . $nama_ayah . "',pekerjaan_ayah='" . $pekerjaan_ayah . "',pendidikan_ayah='" . $pendidikan_ayah . "',penghasilan_ayah='" . $penghasilan_ayah . "',no_telpon_rumah_ayah='" . $no_telpon_rumah_ayah . "',nama_ibu='" . $nama_ibu . "',pekerjaan_ibu='" . $pekerjaan_ibu . "',pendidikan_ibu='" . $pendidikan_ibu . "',no_telpon_rumah_ibu='" . $no_telpon_rumah_ibu . "',penghasilan_ibu='" . $penghasilan_ibu . "',nama_wali='" . $nama_wali . "',pekerjaan_wali='" . $pekerjaan_wali . "',pendidikan_wali='" . $pendidikan_wali . "',penghasilan_wali='" . $penghasilan_wali . "',no_telp_wali='" . $no_telp_wali . "',nama_asal_sekolah='" . $nama_asal_sekolah . "',alamat_sekolah_asal='" . $alamat_sekolah_asal . "',status_sekolah='" . $status_sekolah . "',kabupaten='" . $kabupaten . "',provinsi='" . $provinsi . "',seri_ijazah='" . $seri_ijazah . "',seri_skhu='" . $seri_skhu . "',kode_peserta_smp='" . $kode_peserta_smp . "',kode_pos_smp='" . $kode_pos_smp . "'
      where id_pendaftar='".$id."' ");
    //print_r($query_tambah);die;
    echo '<div class="alert alert-success">Data Berhasil di Edit</div>';
    echo "<meta http-equiv=refresh content=1;url='?m1=daftar&m2=pendaftaran'>";

}
?>
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Diri Pendaftar</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <form role="form" action="" method="post">
            <div class="col-md-4">
              <div class="form-group">
                <input type="hidden" name="id_register" value="30">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['nama']?>" name="nama" placeholder="Masukkan Nama Anda" >
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control select2" style="width: 100%;" name="jenis_kelamin">
                         <option > -- Jenis Kelamin --</option>
                          <option <?php if( $tampil_edit['jenis_kelamin']=='L'){echo "selected"; } ?> value="L">Laki-Laki</option>
                          <option <?php if( $tampil_edit['jenis_kelamin']=='P'){echo "selected"; } ?> value="P">Perempuan</option>
                        </select>
                      </div>
                       <div class="form-group">
                        <label>NIS</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['nis']?>" name="nis" placeholder="Masukkan NIS" >
                    </div>
                     <div class="form-group">
                        <label>NISN</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['nis']?>" name="nisn" placeholder="Masukkan NISN" >
                    </div>
                     <div class="form-group">
                        <label>Tanggal Lahir</label>
                       <div class='input-group date' id='datepicker'>
                            <input type='text' class="form-control" value="<?=$tampil_edit['ttl']?>" name="ttl"/>
                            <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control select2" style="width: 100%;" name="agama">
                        <option> -- Agama --</option>
                          <option <?php if( $tampil_edit['agama']=='Islam'){echo "selected"; } ?> value="Islam">Islam</option>
                          <option <?php if( $tampil_edit['agama']=='Kristen'){echo "selected"; } ?>value="Kristen">Kristen</option>
                          <option <?php if( $tampil_edit['agama']=='Katolik'){echo "selected"; } ?>value="Katolik">Katolik</option>
                          <option <?php if( $tampil_edit['agama']=='Budha'){echo "selected"; } ?>value="Budha">Budha</option>
                          <option <?php if( $tampil_edit['agama']=='Hindu'){echo "selected"; } ?>value="Hindu">Hindu</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                       <textarea class="form-control" rows="5" name="alamat" placeholder="Masukan Alamat Anda" ><?=$tampil_edit['alamat']?></textarea>
                    </div>
                    <div class="form-group">
                        <label>No Telpon</label>
                      <input type="text" class="form-control" value="<?=$tampil_edit['no_telp_rumah']?>" name="no_telp_rumah" placeholder="Masukkan No Telpon" >
                    </div>
                    <div class="form-group">
                        <label>Tinggi/Berat badan</label>
                      <input type="text" class="form-control" name="tinggi_badan" value="<?=$tampil_edit['tinggi_badan']?>" placeholder="Masukkan Tinggi Badan" >
                    </div>
                    <div class="form-group">
                        <label>Status Dalam Keluarga</label>
                      <input type="text" class="form-control" name="status_dalam_keluarga" value="<?=$tampil_edit['status_dalam_keluarga']?>" placeholder="Status Dalam Keluarga" >
                    </div>
                    <!-- <div class="form-group">
                        <label>Kewarganegaraan</label>
                        <input type="text" class="form-control" name="kwn_pendaftar" placeholder="Masukkan Kewarganegaraan" required>
                    </div> -->
                     <div class="form-group">
                        <label>Anak Ke </label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['anak_ke']?>" name="anak_ke" placeholder="Masukkan Anak Ke" >
                    </div>
                    <div class="form-group">
                        <label>Cita Cita </label>
                        <input type="text" class="form-control" name="cita_cita" value="<?=$tampil_edit['cita_cita']?>" placeholder="Masukkan Cita-Cita" >
                    </div>
                     
                    
                   <!--  <div class="form-group">
                        <label>Tinggal Dengan</label>
                        <input type="text" class="form-control" name="tinggal_dengan" placeholder="Masukkan Tinggal Dengan" required>
                    </div> -->
                     <div class="form-group">
                        <label>Golongan Darah</label>
                        <select class="form-control select2" style="width: 100%;" name="goldar">
                           <option > -- Golongan Darah --</option>
                          <option <?php if( $tampil_edit['goldar']=='A'){echo "selected"; } ?> value="A">A</option>
                          <option <?php if( $tampil_edit['goldar']=='B'){echo "selected"; } ?> value="B">B</option>
                          <option <?php if( $tampil_edit['goldar']=='AB'){echo "selected"; } ?> value="AB">AB</option>
                          <option <?php if( $tampil_edit['goldar']=='O'){echo "selected"; } ?> value="O">O</option>
                          
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Jarak Tempuh</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['jarak_tempuh']?>" name="jarak_tempuh" placeholder="Masukkan Jarak Tempuh" >
                    </div>
                   <div class="form-group">
                        <label>Alat Transportasi</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['alat_transportasi_kesekolah']?>" name="alat_transportasi_kesekolah" placeholder="Masukkan Alat Transportasi" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?=$tampil_edit['email']?>" placeholder="Masukkan Email Anda" >
                    </div>
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['kode_pos']?>" name="kode_pos" placeholder="Masukkan Kode Pos Anda" >
                    </div>

                    <div class="form-group">
                        <label>Jurusan Yang Dipilih</label>
                        <select class="form-control select2" style="width: 100%;" name="jurusan">
                          <option selected="selected"> -- Keahlian Yang Dipilih --</option>
                          <option <?php if( $tampil_edit['jurusan1']=='TEI'){echo "selected"; } ?> value="TEI">Teknik Elektronika Industri</option>
                          <option <?php if( $tampil_edit['jurusan1']=='AKT'){echo "selected"; } ?> value="AKT">Akuntansi</option>  
                          <option <?php if( $tampil_edit['jurusan1']=='TKJ'){echo "selected"; } ?> value="TKJ">Teknik Komputer Jaringan</option>  
                          <option <?php if( $tampil_edit['jurusan1']=='TKR'){echo "selected"; } ?> value="TKR">Teknik Kendaraan Ringan</option>  
                         <!--  <option <?php if( $tampil_edit['jurusan1']=='TSM'){echo "selected"; } ?> value="TSM">Teknik Sepeda Motor</option> -->
                        </select>
                      </div>
                       <div class="form-group">
                        <label>Jurusan Yang Dipilih</label>
                        <select class="form-control select2" style="width: 100%;" name="jurusan2">
                          <option selected="selected"> -- Keahlian Yang Dipilih --</option>
                          <option <?php if( $tampil_edit['jurusan2']=='TEI'){echo "selected"; } ?> value="TEI">Teknik Elektronika Industri</option>
                          <option <?php if( $tampil_edit['jurusan2']=='AKT'){echo "selected"; } ?> value="AKT">Akuntansi</option>  
                          <option <?php if( $tampil_edit['jurusan2']=='TKJ'){echo "selected"; } ?> value="TKJ">Teknik Komputer Jaringan</option>  
                          <option <?php if( $tampil_edit['jurusan2']=='TKR'){echo "selected"; } ?> value="TKR">Teknik Kendaraan Ringan</option>  
                          <!-- <option <?php if( $tampil_edit['jurusan2']=='TSM'){echo "selected"; } ?> value="TSM">Teknik Sepeda Motor</option> -->
                        </select>
                      </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
               
                    <div class="form-group">
                        <label>Nama Orang Tua (Ayah)</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['nama_ayah']?>" name="nama_ayah" placeholder="Masukkan Nama Orang Tua (Ayah)" >
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan Ayah</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['pekerjaan_ayah']?>" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" >
                    </div>
                    <div class="form-group">
                        <label>Pendidikan Ayah</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['pendidikan_ayah']?>" name="pendidikan_ayah" placeholder="Masukkan Pendidikan Ayah" >
                    </div>
                    <div class="form-group">
                        <label>Penghasil Ayah</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['penghasilan_ayah']?>" name="penghasilan_ayah" placeholder="Masukkan Penghasilan Ayah" >
                    </div>
                      <div class="form-group">
                        <label>No Telpon Rumah Ayah</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['no_telpon_rumah_ayah']?>" name="no_telpon_rumah_ayah" placeholder="Masukkan Telpon Ayah" >
                    </div>
                   
                    <div class="form-group">
                        <label>Nama Orang Tua (Ibu)</label>
                        <input type="text" class="form-control" name="nama_ibu" value="<?=$tampil_edit['nama_ibu']?>" placeholder="Masukkan Nama Orang Tua (Ibu)" >
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan (Ibu)</label>
                        <input type="text" class="form-control" name="pekerjaan_ibu" value="<?=$tampil_edit['pekerjaan_ibu']?>" placeholder="Masukkan Pekerjaan Ibu" >
                    </div>
                    <div class="form-group">
                        <label>Pendidikan (Ibu)</label>
                        <input type="text" class="form-control" name="pendidikan_ibu" value="<?=$tampil_edit['pendidikan_ibu']?>" placeholder="Masukkan Pendidikan Ibu" >
                    </div>
                    <div class="form-group">
                        <label>Penghasilan (Ibu)</label>
                        <input type="text" class="form-control" name="penghasilan_ibu" value="<?=$tampil_edit['penghasilan_ibu']?>" placeholder="Masukkan Penghasilan Ibu" >
                    </div>
                      <div class="form-group">
                        <label>No Telpon Rumah (Ibu)</label>
                        <input type="text" class="form-control" name="no_telpon_rumah_ibu" value="<?=$tampil_edit['no_telpon_rumah_ibu']?>" placeholder="Masukkan Telpon Ibu" >
                    </div>

                    <div class="form-group">
                        <label>Nama Wali</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['nama_wali']?>" name="nama_wali" placeholder="Masukkan Nama Orang Tua (Wali)" >
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan (Wali)</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['pekerjaan_wali']?>" name="pekerjaan_wali" placeholder="Masukkan Pekerjaan Wali" >
                    </div>
                    <div class="form-group">
                        <label>Pendidikan (Wali)</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['pendidikan_wali']?>" name="pendidikan_wali" placeholder="Masukkan Pendidikan Wali" >
                    </div>
                    <div class="form-group">
                        <label>Penghasil (Wali)</label>
                        <input type="text" class="form-control" name="penghasilan_wali" value="<?=$tampil_edit['penghasilan_wali']?>" placeholder="Masukkan Penghasilan Wali" >
                    </div>
                      <div class="form-group">
                        <label>No Telpon Rumah (Wali)</label>
                        <input type="text" class="form-control" name="no_telp_wali" value="<?=$tampil_edit['no_telp_wali']?>" placeholder="Masukkan Telpon Wali" >
                    </div>
                    
              <!-- /.form-group -->
            </div>
            <div class="col-md-4">
                  <div class="form-group">
                        <label>Nama Sekolah Asal</label>
                        <input type="text" class="form-control" name="nama_asal_sekolah" value="<?=$tampil_edit['nama_asal_sekolah']?>" placeholder="Masukkan Nama Sekolah Asal" >
                    </div> 
                    <div class="form-group">
                        <label>Alamat Asal Sekolah</label>
                       <textarea class="form-control" rows="5"  name="alamat_sekolah_asal" placeholder="Masukan Alamat Asal Sekolah" ><?=$tampil_edit['alamat_sekolah_asal']?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Status Sekolah</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['status_sekolah']?>" name="status_sekolah" placeholder="Masukkan Status Sekolah" >
                    </div>
                    <div class="form-group">
                        <label>Kabupaten</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['kabupaten']?>" name="kabupaten" placeholder="Masukkan Kabupaten" >
                    </div>
                    <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['provinsi']?>" name="provinsi" placeholder="Masukkan Provinsi" >
                    </div>
                    <div class="form-group">
                        <label>Seri Ijazah</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['seri_ijazah']?>" name="seri_ijazah" placeholder="Masukkan Seri Ijazah" >
                    </div>
                    <div class="form-group">
                        <label>Seri SKHUN</label>
                        <input type="text" class="form-control" name="seri_skhu" value="<?=$tampil_edit['seri_skhu']?>" placeholder="Masukkan Seri SKHUN" >
                    </div>
                   
                     <div class="form-group">
                        <label>Kode Peserta SMP</label>
                        <input type="text" class="form-control" name="kode_peserta_smp" value="<?=$tampil_edit['kode_peserta_smp']?>" placeholder="Masukkan Kode Peserta SMP" >
                    </div>
                    <div class="form-group">
                        <label>Kode Pos SMP</label>
                        <input type="text" class="form-control" name="kode_pos_smp" value="<?=$tampil_edit['kode_pos_smp']?>" placeholder="Masukkan Kode Pos SMP" >
                    </div>   
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
    </div>