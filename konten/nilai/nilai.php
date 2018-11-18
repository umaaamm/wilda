<?php
@$id_delete = $_GET['id_delete'];
if (!empty($id_delete)) {
    $query_hapus = $koneksi->query("DELETE FROM tbl_nilai where id_nilai='" . $id_delete . "' ");
    echo '<div class="alert alert-success">Data Berhasil di Hapus</div>';
    echo "<meta http-equiv=refresh content=1;url='?m1=nilai&m2=nilai'>";
}
?>

<?php
$quer_id=$koneksi->query("select * from tbl_pendaftar where id_register = '".$_SESSION['id_register']."'");
$tampil_id = $quer_id->fetch_assoc(); 
if (isset($_POST['submit'])) {
    $id_pendaftar= $tampil_id['id_pendaftar'];
    $rata_un = $_POST['rata_un'];
    $rata_raport = $_POST['rata_raport'];
    $nilai_test = '0';
    $prestasi = '0';
    $query_tambah = $koneksi->query("INSERT INTO tbl_nilai (id_pendaftar,rata_un,rata_raport,nilai_test,prestasi)values ('".$id_pendaftar."','" . $rata_un . "','" . $rata_raport . "','" . $nilai_test . "','".$prestasi."')");
    echo '<div class="alert alert-success">Data Berhasil di Tambah</div>';
    echo "<meta http-equiv=refresh content=1;url='?m1=nilai&m2=nilai'>";
}
?>
<div class="row">
    <!-- left column -->
    
<div class="col-md-8">
    <?php
    $query = $koneksi->query("SELECT * FROM tbl_nilai where id_pendaftar='".$_SESSION['id_pendaftar_temp']."'");
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Data Nilai</h3>
        </div>

        <div class="box-body">
            <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nilai UN</th>
                    <th>Rata-Rata Raport</th>
                    <th>Action</th>
                </tr>
                </thead>

                <?php
                while ($tampil = $query->fetch_assoc()) {
                    @$a++;
                    ?>

                    <tr>
                        <td><?= $a ?></td>
                        <td><?= $tampil['rata_un'] ?></td>
                        <td><?= $tampil['rata_raport'] ?></td>
                        
                        <td><a href="javascript:;" data-id="<? echo $tampil['id_nilai'] ?>" data-toggle="modal"
                               data-target="#modal-konfirmasi" class="btn btn-success btn-danger fa fa-trash"></a>&nbsp;<a
                                    href="
						?m1=nilai&m2=edit_nilai&id_edit=<?= $tampil['id_nilai'] ?>" class="
						btn btn-success btn-warning fa fa-edit"></a></td>
                    </tr>

                <?php } ?>
                </tbody>

            </table>
        </div>
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
                    <a href="javascript:;" class="btn btn-danger" id="hapus-true-data-nilai">Hapus</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>

            </div>
        </div>
    </div>
</div>