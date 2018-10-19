<?php
@$id_delete = $_GET['id_delete'];
if (!empty($id_delete)) {
    $query_hapus = $koneksi->query("DELETE FROM tbl_pendaftar where id_pendaftar='" . $id_delete . "' ");
    echo '<div class="alert alert-success">Data Berhasil di Hapus</div>';
    echo "<meta http-equiv=refresh content=1;url='?m1=daftar&m2=pendaftaran'>";
}
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
    $no_telpon_wali = $_POST['no_telpon_wali'];
    $nama_asal_sekolah = $_POST['nama_asal_sekolah'];
    $alamat_sekolah_asal = $_POST['alamat_sekolah_asal'];
    $status_sekolah = $_POST['status_sekolah'];
    $kabupaten = $_POST['kabupaten'];
    $provinsi = $_POST['provinsi'];
    $seri_ijazah = $_POST['seri_ijazah'];
    $seri_skhu = $_POST['seri_skhu'];
    $kode_peserta_smp = $_POST['kode_peserta_smp'];
    $kode_pos_smp = $_POST['kode_pos_smp'];
    $id_register = $_SESSION['id_register'];
    $query_tambah = $koneksi->query("INSERT INTO tbl_pendaftar (nama,nis,nisn,jenis_kelamin,ttl,agama,alamat,no_telp_rumah,tinggi_badan,status_dalam_keluarga,anak_ke,cita_cita,goldar,jarak_tempuh,alat_transportasi_kesekolah,email,kode_pos,jurusan1,jurusan2,nama_ayah,pekerjaan_ayah,pendidikan_ayah,penghasilan_ayah,no_telpon_rumah_ayah,nama_ibu,pekerjaan_ibu,pendidikan_ibu,no_telpon_rumah_ibu,penghasilan_ibu,nama_wali,pekerjaan_wali,pendidikan_wali,penghasilan_wali,no_telp_wali,nama_asal_sekolah,alamat_sekolah_asal,status_sekolah,kabupaten,provinsi,seri_ijazah,seri_skhu,kode_peserta_smp,kode_pos_smp,id_register)values ('".$nama."','".$nis."','".$nisn."','".$jenis_kelamin."','".$ttl."','".$agama."','".$alamat."','".$no_telp_rumah."','" . $tinggi_badan . "','" . $status_dalam_keluarga . "','" . $anak_ke . "','" . $cita_cita . "','" . $goldar."','".$jarak_tempuh."','".$alat_transportasi_kesekolah."','".$email."','".$kode_pos."','".$jurusan."','".$jurusan2."','".$nama_ayah."','".$pekerjaan_ayah."','".$pendidikan_ayah."','".$penghasilan_ayah."','".$no_telpon_rumah_ayah."','".$nama_ibu."','".$pekerjaan_ibu."','".$pendidikan_ibu."','".$no_telpon_rumah_ibu."','".$penghasilan_ibu."','".$nama_wali."','".$pekerjaan_wali."','".$pendidikan_wali."','".$penghasilan_wali."','".$no_telpon_wali."','".$nama_asal_sekolah."','".$alamat_sekolah_asal."','".$status_sekolah."','".$kabupaten."','".$provinsi."','".$seri_ijazah."','".$seri_skhu."','".$kode_peserta_smp."','".$kode_pos_smp."','".$id_register."')");
    // print_r($id_register);
    // print_r($query_tambah);die;
    echo '<div class="alert alert-success">Data Berhasil di Tambah</div>';
    echo "<meta http-equiv=refresh content=1;url='?m1=daftar&m2=pendaftaran'>";

}
 // print_r($_SESSION['id_register']);die;
// $query_cari=$koneksi->query("select * from id_pendaftar where id_register='".$_SESSION['id_register']."' ");

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
                <!-- <input type="hidden" name="id_register" value="<?php   ?>"> -->
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control select2" style="width: 100%;" name="jenis_kelamin">
                          <option selected="selected"> -- Jenis Kelamin --</option>
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                      </div>
                       <div class="form-group">
                        <label>NIS</label>
                        <input type="text" class="form-control" name="nis" placeholder="Masukkan NIS" required>
                    </div>
                     <div class="form-group">
                        <label>NISN</label>
                        <input type="text" class="form-control" name="nisn" placeholder="Masukkan NISN" required>
                    </div>
                     <div class="form-group">
                        <label>Tanggal Lahir</label>
                       <div class='input-group date' id='datepicker'>
                            <input type='text' class="form-control" name="ttl"/>
                            <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control select2" style="width: 100%;" name="agama">
                          <option selected="selected"> -- Agama --</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Budha">Budha</option>
                          <option value="Hindu">Hindu</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                       <textarea class="form-control" rows="5" name="alamat" placeholder="Masukan Alamat Anda" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>No Telpon</label>
                      <input type="text" class="form-control" name="no_telp_rumah" placeholder="Masukkan No Telpon" required>
                    </div>
                    <div class="form-group">
                        <label>Tinggi/Berat badan</label>
                      <input type="text" class="form-control" name="tinggi_badan" placeholder="Masukkan Tinggi Badan" required>
                    </div>
                    <div class="form-group">
                        <label>Status Dalam Keluarga</label>
                      <input type="text" class="form-control" name="status_dalam_keluarga" placeholder="Status Dalam Keluarga" required>
                    </div>
                    <!-- <div class="form-group">
                        <label>Kewarganegaraan</label>
                        <input type="text" class="form-control" name="kwn_pendaftar" placeholder="Masukkan Kewarganegaraan" required>
                    </div> -->
                     <div class="form-group">
                        <label>Anak Ke </label>
                        <input type="text" class="form-control" name="anak_ke" placeholder="Masukkan Anak Ke" required>
                    </div>
                    <div class="form-group">
                        <label>Cita Cita </label>
                        <input type="text" class="form-control" name="cita_cita" placeholder="Masukkan Cita-Cita" required>
                    </div>
                     
                    
                   <!--  <div class="form-group">
                        <label>Tinggal Dengan</label>
                        <input type="text" class="form-control" name="tinggal_dengan" placeholder="Masukkan Tinggal Dengan" required>
                    </div> -->
                     <div class="form-group">
                        <label>Golongan Darah</label>
                        <select class="form-control select2" style="width: 100%;" name="goldar">
                          <option selected="selected"> -- Golongan Darah --</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="AB">AB</option>
                          <option value="O">O</option>
                          
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Jarak Tempuh</label>
                        <input type="text" class="form-control" name="jarak_tempuh" placeholder="Masukkan Jarak Tempuh" required>
                    </div>
                   <div class="form-group">
                        <label>Alat Transportasi</label>
                        <input type="text" class="form-control" name="alat_transportasi_kesekolah" placeholder="Masukkan Alat Transportasi" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Masukkan Email Anda" required>
                    </div>
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="text" class="form-control" name="kode_pos" placeholder="Masukkan Kode Pos Anda" required>
                    </div>

                    <div class="form-group">
                        <label>Jurusan Yang Dipilih</label>
                        <select class="form-control select2" style="width: 100%;" name="jurusan">
                          <option selected="selected"> -- Keahlian Yang Dipilih --</option>
                          <option value="TEI">Teknik Elektronika Industri</option>
                          <option value="AKT">Akuntansi</option>  
                          <option value="TKJ">Teknik Komputer Jaringan</option>  
                          <option value="TKR">Teknik Kendaraan Ringan</option>  
                          <option value="TSM">Teknik Sepeda Motor</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Jurusan Yang Dipilih</label>
                        <select class="form-control select2" style="width: 100%;" name="jurusan2">
                          <option selected="selected"> -- Keahlian Yang Dipilih --</option>
                          <option value="TEI">Teknik Elektronika Industri</option>
                          <option value="AKT">Akuntansi</option>  
                          <option value="TKJ">Teknik Komputer Jaringan</option>  
                          <option value="TKR">Teknik Kendaraan Ringan</option>  
                          <option value="TSM">Teknik Sepeda Motor</option>
                        </select>
                      </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
               
                    <div class="form-group">
                        <label>Nama Orang Tua (Ayah)</label>
                        <input type="text" class="form-control" name="nama_ayah" placeholder="Masukkan Nama Orang Tua (Ayah)" required>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan Ayah</label>
                        <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" required>
                    </div>
                    <div class="form-group">
                        <label>Pendidikan Ayah</label>
                        <input type="text" class="form-control" name="pendidikan_ayah" placeholder="Masukkan Pendidikan Ayah" required>
                    </div>
                    <div class="form-group">
                        <label>Penghasil Ayah</label>
                        <input type="text" class="form-control" name="penghasilan_ayah" placeholder="Masukkan Penghasilan Ayah" required>
                    </div>
                      <div class="form-group">
                        <label>No Telpon Rumah Ayah</label>
                        <input type="text" class="form-control" name="no_telpon_rumah_ayah" placeholder="Masukkan Telpon Ayah" required>
                    </div>
                   
                    <div class="form-group">
                        <label>Nama Orang Tua (Ibu)</label>
                        <input type="text" class="form-control" name="nama_ibu" placeholder="Masukkan Nama Orang Tua (Ibu)" required>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan (Ibu)</label>
                        <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu" required>
                    </div>
                    <div class="form-group">
                        <label>Pendidikan (Ibu)</label>
                        <input type="text" class="form-control" name="pendidikan_ibu" placeholder="Masukkan Pendidikan Ibu" required>
                    </div>
                    <div class="form-group">
                        <label>Penghasil (Ibu)</label>
                        <input type="text" class="form-control" name="penghasilan_ibu" placeholder="Masukkan Penghasilan Ibu" required>
                    </div>
                      <div class="form-group">
                        <label>No Telpon Rumah (Ibu)</label>
                        <input type="text" class="form-control" name="no_telpon_rumah_ibu" placeholder="Masukkan Telpon Ibu" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Wali</label>
                        <input type="text" class="form-control" name="nama_wali" placeholder="Masukkan Nama Orang Tua (Wali)" required>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan (Wali)</label>
                        <input type="text" class="form-control" name="pekerjaan_wali" placeholder="Masukkan Pekerjaan Wali" required>
                    </div>
                    <div class="form-group">
                        <label>Pendidikan (Wali)</label>
                        <input type="text" class="form-control" name="pendidikan_wali" placeholder="Masukkan Pendidikan Wali" required>
                    </div>
                    <div class="form-group">
                        <label>Penghasilan (Wali)</label>
                        <input type="text" class="form-control" name="penghasilan_wali" placeholder="Masukkan Penghasilan Wali" required>
                    </div>
                      <div class="form-group">
                        <label>No Telpon Rumah (Wali)</label>
                        <input type="text" class="form-control" name="no_telpon_wali" placeholder="Masukkan Telpon Wali" required>
                    </div>
                    
              <!-- /.form-group -->
            </div>
            <div class="col-md-4">
                  <div class="form-group">
                        <label>Nama Sekolah Asal</label>
                        <input type="text" class="form-control" name="nama_asal_sekolah" placeholder="Masukkan Nama Sekolah Asal" required>
                    </div> 
                    <div class="form-group">
                        <label>Alamat Asal Sekolah</label>
                       <textarea class="form-control" rows="5" name="alamat_sekolah_asal" placeholder="Masukan Alamat Asal Sekolah" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Status Sekolah</label>
                        <input type="text" class="form-control" name="status_sekolah" placeholder="Masukkan Status Sekolah" required>
                    </div>
                    <div class="form-group">
                        <label>Kabupaten</label>
                        <input type="text" class="form-control" name="kabupaten" placeholder="Masukkan Kabupaten" required>
                    </div>
                    <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" class="form-control" name="provinsi" placeholder="Masukkan Provinsi" required>
                    </div>
                    <div class="form-group">
                        <label>Seri Ijazah</label>
                        <input type="text" class="form-control" name="seri_ijazah" placeholder="Masukkan Seri Ijazah" required>
                    </div>
                    <div class="form-group">
                        <label>Seri SKHUN</label>
                        <input type="text" class="form-control" name="seri_skhu" placeholder="Masukkan Seri SKHUN" required>
                    </div>
                   <!--  <div class="form-group">
                        <label>Seri SKHUN</label>
                        <input type="text" class="form-control" name="seri_skhu" placeholder="Masukkan Seri SKHUN" required>
                    </div>
 -->
                     <div class="form-group">
                        <label>Kode Peserta SMP</label>
                        <input type="text" class="form-control" name="kode_peserta_smp" placeholder="Masukkan Kode Peserta SMP" required>
                    </div>
                    <div class="form-group">
                        <label>Kode Pos SMP</label>
                        <input type="text" class="form-control" name="kode_pos_smp" placeholder="Masukkan Kode Pos SMP" required>
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

    <div class="row">
<div class="col-md-12">
    <?php
    $query = $koneksi->query("SELECT * FROM tbl_pendaftar");
    // $query_q = $koneksi->query("SELECT * FROM tbl_pendaftar where id_register='".$_SESSION['id_register']."' ");
    // $hasil_e = $query_q->fetch_assoc();
    // $_SESSION['id_pendaftar_temp'] = $hasil_e['id_pendaftar'];
    // print_r($_SESSION['id_pendaftar_temp']);die;
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Data Pendaftar</h3>
        </div>

        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nis</th>
                    <th>Nisn</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                    <th>Tinggi Badan</th>
                    <th>Status Dalam Keluarga</th>
                    <th>Anak Ke</th>
                    <th>Cita-Cita</th>
                    <th>Golongan Darah</th>
                    <th>Jarak Tempuh</th>
                    <th>Alat Transportasi</th>
                    <th>Email</th>
                    <th>Kode Pos</th>
                    <th>Jurusan 1 Yang Dipilih</th>
                    <th>Jurusan 2 Yang Dipilih</th>
                    <th>Nama Ayah</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Pendidikan Ayah</th>
                    <th>Penghasilan Ayah</th>
                    <th>No Telpon Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Pendidikan Ibu</th>
                    <th>No Telpon Ibu</th>
                    <th>Penghasilan Ibu</th>
                    <th>Nama Wali</th>
                    <th>Pekerjaan Wali</th>
                    <th>Pendidikan Wali</th>
                    <th>Penghasilan Wali</th>
                    <th>No Telpon Wali</th>
                    <th>Nama Asal Sekolah</th>
                    <th>Alamat Sekolah Asal</th>
                    <th>Status Sekolah</th>
                    <th>Kabupaten</th>
                    <th>Provinsi</th>
                    <th>Seri Ijazah</th>
                    <th>Seri SKHU</th>
                    <th>Kode Peserta SMP</th>
                    <th>Kode Pos SMP</th>
                    <th>Action</th>
                </tr>
                </thead>

                <?php
                while ($tampil = $query->fetch_assoc()) {

                    @$a++;
                    ?>
                    <tr>
                        <td><?= $a ?></td>
                        <td><?= $tampil['nama'] ?></td>
                        <td><?= $tampil['nis'] ?></td>
                        <td><?= $tampil['nisn'] ?></td>
                        <td><?= $tampil['jenis_kelamin'] ?></td>
                        <td><?= $tampil['ttl'] ?></td>
                        <td><?= $tampil['agama'] ?></td>
                        <td><?= $tampil['alamat'] ?></td>
                        <td><?= $tampil['no_telp_rumah'] ?></td>
                        <td><?= $tampil['tinggi_badan'] ?></td>
                        <td><?= $tampil['status_dalam_keluarga'] ?></td>
                        <td><?= $tampil['anak_ke'] ?></td>
                        <td><?= $tampil['cita_cita'] ?></td>
                        <td><?= $tampil['goldar'] ?></td>
                        <td><?= $tampil['jarak_tempuh'] ?></td>
                        <td><?= $tampil['alat_transportasi_kesekolah'] ?></td>
                        <td><?= $tampil['email'] ?></td>
                        <td><?= $tampil['kode_pos'] ?></td>
                        <td><?= $tampil['jurusan1'] ?></td>
                        <td><?= $tampil['jurusan2'] ?></td>
                        <td><?= $tampil['nama_ayah'] ?></td>
                        <td><?= $tampil['pekerjaan_ayah'] ?></td>
                        <td><?= $tampil['pendidikan_ayah'] ?></td>
                        <td><?= $tampil['penghasilan_ayah'] ?></td>
                        <td><?= $tampil['no_telpon_rumah_ayah'] ?></td>
                        <td><?= $tampil['nama_ibu'] ?></td>
                        <td><?= $tampil['pekerjaan_ibu'] ?></td>
                        <td><?= $tampil['pendidikan_ibu'] ?></td>
                        <td><?= $tampil['no_telpon_rumah_ibu'] ?></td>
                        <td><?= $tampil['penghasilan_ibu'] ?></td>
                        <td><?= $tampil['nama_wali'] ?></td>
                        <td><?= $tampil['pekerjaan_wali'] ?></td>
                        <td><?= $tampil['pendidikan_wali'] ?></td>
                        <td><?= $tampil['penghasilan_wali'] ?></td>
                        <td><?= $tampil['no_telp_wali'] ?></td>
                        <td><?= $tampil['nama_asal_sekolah'] ?></td>
                        <td><?= $tampil['alamat_sekolah_asal'] ?></td>
                        <td><?= $tampil['status_sekolah'] ?></td>
                        <td><?= $tampil['kabupaten'] ?></td>
                        <td><?= $tampil['provinsi'] ?></td>
                        <td><?= $tampil['seri_ijazah'] ?></td>
                        <td><?= $tampil['seri_skhu'] ?></td>
                        <td><?= $tampil['kode_peserta_smp'] ?></td>
                        <td><?= $tampil['kode_pos_smp'] ?></td>
                        <td><a href="javascript:;" data-id="<? echo $tampil['id_pendaftar'] ?>" data-toggle="modal"
                               data-target="#modal-konfirmasi" class="btn btn-success btn-danger fa fa-trash"></a>&nbsp;<a
                                    href="?m1=daftar&m2=edit_pendaftaran&id_edit=<?= $tampil['id_pendaftar'] ?>" class="
                        btn btn-success btn-warning fa fa-edit"></a></td>
                    </tr>

                <?php } ?>
                </tbody>

            </table>
        </div>


        <div id="modal-konfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Konfirmasi</h4>
                    </div>
                    <div class="modal-body btn-info">
                        Apakah Anda yakin ingin menghapus data ini ?
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-danger" id="hapus-true-data">Hapus</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>

