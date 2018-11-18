<?php
@$id_delete = $_GET['id_delete'];
if (!empty($id_delete)) {
    $query_hapus = $koneksi->query("DELETE FROM tbl_kuota where id_kuota='" . $id_delete . "' ");
    echo '<div class="alert alert-success">Data Berhasil di Hapus</div>';
    echo "<meta http-equiv=refresh content=1;url='?m1=kuota&m2=kuota'>";
}
?>

<?php
if (isset($_POST['submit'])) {
    $jurusan = $_POST['jurusan'];
    $kuota = $_POST['kuota'];
    
    $query_tambah = $koneksi->query("INSERT INTO tbl_kuota (jurusan,kuota)values ('".$jurusan."','" . $kuota . "')");
    echo '<div class="alert alert-success">Data Berhasil di Tambah</div>';
    echo "<meta http-equiv=refresh content=1;url='?m1=kuota&m2=kuota'>";
}
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
                          <option value="TEI">Teknik Elektronika Industri</option>
                          <option value="AKT">Akuntansi</option>  
                          <option value="TKJ">Teknik Komputer Jaringan</option>  
                          <option value="TKR">Teknik Kendaraan Ringan</option>  
                          <!-- <option value="TSM">Teknik Sepeda Motor</option> -->
                        </select>
                      </div>
                     <div class="form-group">
                        <label>Kuota</label>
                        <input type="text" class="form-control" name="kuota" placeholder="Masukkan Kuota Kelas" required>
                    </div>
                    
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-8">
    <?php
    $query = $koneksi->query("SELECT * FROM tbl_kuota");
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Data Kuota Kelas</h3>
        </div>

        <div class="box-body">
            <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Jurusan</th>
                    <th>Kuota</th>
                    
                    <th>Action</th>
                </tr>
                </thead>

                <?php
                while ($tampil = $query->fetch_assoc()) {
                    @$a++;
                    ?>

                    <tr>
                        <td><?= $a ?></td>
                         <td><?= $tampil['jurusan'] ?></td>
                        <td><?= $tampil['kuota'] ?></td>
                       
                        <td><a href="javascript:;" data-id="<?php echo $tampil['id_kuota'] ?>" data-toggle="modal"
                               data-target="#modal-konfirmasi" class="btn btn-success btn-danger fa fa-trash"></a>&nbsp;<a
                                    href="
						?m1=kuota&m2=edit-kuota&id_edit=<?= $tampil['id_kuota'] ?>" class="
						btn btn-success btn-warning fa fa-edit"></a></td>
                    </tr>

                <?php } ?>
                </tbody>

            </table>
        </div>
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
                    <a href="javascript:;" class="btn btn-danger" id="hapus-true-data-kuota">Hapus</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>

            </div>
        </div>
    </div>
</div>