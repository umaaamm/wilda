<?php
include "koneksi/koneksi.php"
?>
<?php
@$id_edit = $_GET['id_edit'];
$query_edit = $koneksi->query("SELECT * FROM tbl_nilai where id_nilai='" . $id_edit . "' ");
$tampil_edit = $query_edit->fetch_assoc();
?>


<?php
if (isset($_POST['submit'])) {
    $id_pendaftar= $_POST['id_pendaftar'];
    $rata_un = $_POST['rata_un'];
    $rata_raport = $_POST['rata_raport'];
   
    $query_tambah = $koneksi->query("UPDATE tbl_nilai SET id_pendaftar='".$id_pendaftar."',rata_un='" . $rata_un . "',rata_raport='".$rata_raport."'where id_nilai = '" . $id_edit . "' ");
    if ($query_tambah) {
        echo '<div class="alert alert-success">Data Berhasil di Edit</div>';
        echo "<meta http-equiv=refresh content=1;url='?m1=nilai&m2=nilai'>";
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
                <h3 class="box-title">Edit Nilai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
                <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="id_pendaftar" value="<?=$tampil_edit['id_pendaftar']?>">
                        <label>Rata-Rata UN</label>
                        <input type="text" class="form-control" value="<?=$tampil_edit['rata_un']?>" name="rata_un" placeholder="Masukkan Rata-Rata UN" required>
                    </div>
                    <div class="form-group">
                        <label>Rata-Rata Raport</label>
                        <input type="text" class="form-control" name="rata_raport" value="<?=$tampil_edit['rata_raport']?>" placeholder="Masukkan Rata-Rata Raport" required>
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