<?php
if (isset($_POST['submit'])) {
    $id_nilai = $_POST['id_nilai'];
    // $nama = $_POST['nama'];
    $rata_un = $_POST['rata_un'];
    $rata_raport = $_POST['rata_raport'];
    $nilai_test = $_POST['nilai_test'];
    $prestasi = $_POST['prestasi'];
    $query_tambah = $koneksi->query("UPDATE tbl_nilai SET rata_un='".$rata_un."',rata_raport='" . $rata_raport . "',nilai_test='".$nilai_test."', prestasi='" . $prestasi . "' where id_nilai = '" . $id_nilai . "' ");
    if ($query_tambah) {
        echo '<div class="alert alert-success">Data Berhasil di Edit</div>';
        echo "<meta http-equiv=refresh content=1;url='?m1=nilai&m2=nilai'>";
    }
}
?>

<div class="row">
<div class="col-md-8">
    <?php
    $query = $koneksi->query("SELECT tbl_nilai.id_nilai,tbl_pendaftar.nama,tbl_nilai.rata_un, tbl_nilai.rata_raport,tbl_nilai.nilai_test,tbl_nilai.prestasi FROM tbl_nilai  LEFT JOIN tbl_pendaftar on tbl_nilai.id_pendaftar = tbl_pendaftar.id_pendaftar");
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Kelola Nilai Siswa</h3>
        </div>

        <div class="box-body">
            <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nilai Un</th>
                    <th>Rata-Rata Raport</th>
                    <th>Nilai Test</th>
                     <th>Prestasi</th>
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
                        <td><?= $tampil['rata_un'] ?></td>
                        <td><?= $tampil['rata_raport'] ?></td>
                        <td><?= $tampil['nilai_test'] ?></td>
                        <td><?= $tampil['prestasi'] ?></td>
                        <td>
                        <button class="btn btn-info btn-sm" onclick="edit('<?php echo $tampil["id_nilai"]; ?>','<?php echo $tampil["nama"]; ?>','<?php echo $tampil["rata_un"]; ?>','<?php echo $tampil["rata_raport"]; ?>','<?php echo $tampil['nilai_test'];?>','<?php echo $tampil['prestasi'];?>')">Edit</button> 
                    </td>
                    </tr>

                <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
    <div class="col-md-4">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Kelola Nilai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
                <div class="box-body">
                     <div class="form-group">
                        <input type="hidden" name="id_nilai" id="id">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required readonly>
                    </div>
                      <div class="form-group">
                        <label>Rata-Rata UN</label>
                        <input type="text" class="form-control" id="un" name="rata_un" placeholder="Masukkan Rata-Rata UN" required>
                    </div>
                    <div class="form-group">
                        <label>Rata-Rata Raport</label>
                        <input type="text" class="form-control" id="raport" name="rata_raport" placeholder="Masukkan Rata-Rata Raport" required>
                    </div>
                      <div class="form-group">
                        <label>Nilai Test</label>
                        <input type="text" class="form-control" id="test" name="nilai_test" placeholder="Masukkan Nilai Test" required>
                    </div>
                    <div class="form-group">
                        <label>Prestasi</label>
                        <input type="text" class="form-control" id="prestasi" name="prestasi" placeholder="Masukkan Nilai Prestasi" required>
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
<script type="text/javascript">

    function edit(id,nama,rata_un,rata_raport,nilai_test,prestasi){
    //var   conf=window.confirm('Apakah Data Akan Diedit ?');
    //if (conf) {
    //alert(nama);
    $('#id').val(id);
    $('#nama').val(nama);
    $('#un').val(rata_un);
    $('#raport').val(rata_raport);
    $('#test').val(nilai_test);
    $('#prestasi').val(prestasi);
    
  
//}
}
</script>