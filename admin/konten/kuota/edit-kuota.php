<?php
include "koneksi/koneksi.php"
?>
<?php
@$id_edit = $_GET['id_edit'];
$query_edit = $koneksi->query("SELECT * FROM tbl_kuota where id_kuota='" . $id_edit . "' ");
$tampil_edit = $query_edit->fetch_assoc();
?>


<?php
if (isset($_POST['submit'])) {
    $jurusan = $_POST['jurusan'];
    $kuota = $_POST['kuota'];
    $query_tambah = $koneksi->query("UPDATE tbl_kuota SET jurusan='".$jurusan."',kuota='" . $kuota . "' where id_kuota = '" . $id_edit . "' ");
    if ($query_tambah) {
        echo '<div class="alert alert-success">Data Berhasil di Edit</div>';
        echo "<meta http-equiv=refresh content=1;url='?m1=kuota&m2=kuota'>";
    }
}
?>


<?php
$query_combo = $koneksi->query("SELECT * FROM tbl_admin");
?>
<div class="row">
    <!-- left column -->
    <div class="col-md-4">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Kelola Kuota Kelas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class="form-control select2" style="width: 100%;" name="jurusan">
                          <option selected="selected"> -- Keahlian Yang Dipilih --</option>
                          <option <?php if( $tampil_edit['jurusan']=='TEI'){echo "selected"; } ?> value="TEI">Teknik Elektronika Industri</option>
                          <option <?php if( $tampil_edit['jurusan']=='AKT'){echo "selected"; } ?> value="AKT">Akuntansi</option>  
                          <option <?php if( $tampil_edit['jurusan']=='TKJ'){echo "selected"; } ?> value="TKJ">Teknik Komputer Jaringan</option>  
                          <option <?php if( $tampil_edit['jurusan']=='TKR'){echo "selected"; } ?> value="TKR">Teknik Kendaraan Ringan</option>  
                          <!-- <option value="TSM">Teknik Sepeda Motor</option> -->
                        </select>
                      </div>
                     <div class="form-group">
                        <label>Kuota</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['kuota']?>" name="kuota" placeholder="Masukkan Kuota Kelas" required>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                    <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>