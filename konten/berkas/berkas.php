
<?php
@$id_delete = $_GET['id_delete'];
if (!empty($id_delete)) {
    $query_hapus = $koneksi->query("DELETE FROM tbl_berkas where id_berkas='" . $id_delete . "' ");
    echo '<div class="alert alert-success">Data Berhasil di Hapus</div>';
    echo "<meta http-equiv=refresh content=1;url='?m1=berkas&m2=berkas'>";
}
?>

<?php

$quer_id=$koneksi->query("select * from tbl_pendaftar where id_register = '".$_SESSION['id_register']."'");
$tampil_id = $quer_id->fetch_assoc(); 
// print_r($tampil_id['id_pendaftar']);die;

if (isset($_POST['submit'])) {
    $id_pendaftar = $tampil_id['id_pendaftar'];
    //dok_ijazah
    $namagambar_dok_ijazah = $_FILES['dok_ijazah'] ['name'];
    $lokasi = $_FILES['dok_ijazah'] ['tmp_name'];
    $lokasitujuan = "./img";
    if (empty($namagambar_dok_ijazah)) {
        $namagambar_dok_ijazah = "noimage.png";
    }
    $upload_dok_ijazah = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_ijazah); 

    //dok_kartu ujian
    $namagambar_dok_kartu_ujian = $_FILES['dok_kartu_ujian'] ['name'];
    $lokasi = $_FILES['dok_kartu_ujian'] ['tmp_name'];
    $lokasitujuan = "./img";
    if (empty($namagambar_dok_kartu_ujian)) {
        $namagambar_dok_kartu_ujian = "noimage.png";
    }
    $upload_dok_kartu_ujian = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_kartu_ujian);

    //dok_raport
    $namagambar_dok_raport = $_FILES['dok_raport'] ['name'];
    $lokasi = $_FILES['dok_raport'] ['tmp_name'];
    $lokasitujuan = "./img";
    if (empty($namagambar_dok_raport)) {
        $namagambar_dok_raport = "noimage.png";
    }
    $upload_dok_raport = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_raport);

    //dok_kk
    $namagambar_dok_kk = $_FILES['dok_kk'] ['name'];
    $lokasi = $_FILES['dok_kk'] ['tmp_name'];
    $lokasitujuan = "./img";
    if (empty($namagambar_dok_kk)) {
        $namagambar_dok_kk = "noimage.png";
    }
    $upload_dok_kk = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_kk);

    //dok_surat_sehat
    $namagambar_dok_surat_sehat = $_FILES['dok_surat_sehat'] ['name'];
    $lokasi = $_FILES['dok_surat_sehat'] ['tmp_name'];
    $lokasitujuan = "./img";
    if (empty($namagambar_dok_surat_sehat)) {
        $namagambar_dok_surat_sehat = "noimage.png";
    }
    $upload_dok_surat_sehat = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_surat_sehat);


    //dok_ktp_ortu
    $namagambar_dok_ktp_ortu = $_FILES['dok_ktp_ortu'] ['name'];
    $lokasi = $_FILES['dok_ktp_ortu'] ['tmp_name'];
    $lokasitujuan = "./img";
    if (empty($namagambar_dok_ktp_ortu)) {
        $namagambar_dok_ktp_ortu = "noimage.png";
    }
    $upload_dok_ktp_ortu = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_ktp_ortu);

    //dok_KIP
    $namagambar_dok_KIP = $_FILES['dok_KIP'] ['name'];
    $lokasi = $_FILES['dok_KIP'] ['tmp_name'];
    $lokasitujuan = "./img";
    if (empty($namagambar_dok_KIP)) {
        $namagambar_dok_KIP = "noimage.png";
    }
    $upload_dok_KIP = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_KIP);


    //dok_pas_foto
    $namagambar_dok_pas_foto = $_FILES['dok_pas_foto'] ['name'];
    $lokasi = $_FILES['dok_pas_foto'] ['tmp_name'];
    $lokasitujuan = "./img";
    if (empty($namagambar_dok_pas_foto)) {
        $namagambar_dok_pas_foto = "noimage.png";
    }
    $upload_dok_pas_foto = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_pas_foto);

     //dok_sertifikat
    $namagambar_dok_sertifikat = $_FILES['dok_sertifikat'] ['name'];
    $lokasi = $_FILES['dok_sertifikat'] ['tmp_name'];
    $lokasitujuan = "./img";
    if (empty($namagambar_dok_sertifikat)) {
        $namagambar_dok_sertifikat = "noimage.png";
    }
    $upload_dok_sertifikat = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_sertifikat);


    // print_r($namagambar_dok_sertifikat);die;

    //query untuk tambah data
    $query_tambah = $koneksi->query("INSERT INTO tbl_berkas (id_pendaftar,dok_ijazah,dok_kartu_ujian,dok_raport,dok_kk,dok_surat_sehat,dok_ktp_ortu,dok_KIP,dok_pas_foto,dok_sertifikat)values ('".$id_pendaftar."','".$namagambar_dok_ijazah."','".$namagambar_dok_kartu_ujian."','".$namagambar_dok_raport."','" .$namagambar_dok_kk ."','".$namagambar_dok_surat_sehat."','".$namagambar_dok_ktp_ortu."','".$namagambar_dok_KIP."','".$namagambar_dok_pas_foto."','".$namagambar_dok_sertifikat."')");

    echo '<div class="alert alert-success">Data Berhasil di Tambah</div>';
    echo "<meta http-equiv=refresh content=1;url='?m1=berkas&m2=berkas'>";
}
?>


<div class="row">
    <!-- left column -->
    <div class="col-md-4">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Berkas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    
                    <input type="hidden" name="id_pendaftar" value="30">
                    
                    <label>Dok Ijazah</label>
                    <div class="form-group">
                        <input type="file"  name="dok_ijazah" class="form-control" id="btnimage" >
                    </div>
                     <label>Dok Kartu Ujian</label>
                    <div class="form-group">
                        <input type="file"  name="dok_kartu_ujian" class="form-control" id="btnimage" >
                    </div>
                     <label>Dok Raport</label>
                    <div class="form-group">
                        <input type="file"  name="dok_raport" class="form-control" id="btnimage" >
                    </div>
                     <label>Dok Kartu Keluarga</label>
                    <div class="form-group">
                        <input type="file"  name="dok_kk" class="form-control" id="btnimage" >
                    </div>
                     <label>Dok Surat Sehat</label>
                    <div class="form-group">
                        <input type="file" name="dok_surat_sehat" class="form-control" id="btnimage" >
                    </div>
                     <label>Dok KTP Ortu</label>
                    <div class="form-group">
                        <input type="file"  name="dok_ktp_ortu" class="form-control" id="btnimage" >
                    </div>
                     <label>Dok KIP</label>
                    <div class="form-group">
                        <input type="file"  name="dok_KIP" class="form-control" id="btnimage" >
                    </div>
                     <label>Dok Pas Photo</label>
                    <div class="form-group">
                        <input type="file"  name="dok_pas_foto" class="form-control" id="btnimage">
                    </div>
                     <label>Dok Sertifikat</label>
                    <div class="form-group">
                        <input type="file" name="dok_sertifikat" class="form-control" id="btnimage">
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
<!-- ------------ -->

<div class="col-md-8">
   <?php
   $query = $koneksi->query("SELECT tbl_pendaftar.nama,tbl_berkas.dok_ijazah,tbl_berkas.dok_kartu_ujian,tbl_berkas.dok_raport,tbl_berkas.dok_kk,tbl_berkas.dok_surat_sehat,tbl_berkas.dok_ktp_ortu,tbl_berkas.dok_KIP,tbl_berkas.dok_pas_foto,tbl_berkas.dok_sertifikat,tbl_berkas.id_berkas FROM tbl_berkas LEFT JOIN tbl_pendaftar ON tbl_berkas.id_pendaftar = tbl_pendaftar.id_pendaftar where tbl_berkas.id_pendaftar ='".$_SESSION['id_pendaftar_temp']."' ");
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Data Berkas</h3>
        </div>

        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Pendaftar</th>
                    <th>Dokumen Ijazah</th>
                    <th>Dokumen Kartu Ujian</th>
                    <th>Dokumen Raport</th>
                    <th>Dokumen KK</th>
                    <th>Dokumen Surat Sehat</th>
                    <th>Dokumen KTP Ortu</th>
                    <th>Dokumen KIP</th>
                    <th>Dokumen Pass Photo</th>
                    <th>Dokumen Sertifikat</th>
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
                        <td align="center"><a href="img/<?= $tampil['dok_ijazah'] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ><a
                                    href="
                        ?m1=berkas&m2=edit_berkas&id_edit=<?=$tampil['id_berkas']?>&nama=dok_ijazah" class="
                        btn btn-success btn-warning fa fa-edit"></a></a></td>
                        
                        <td align="center"><a href="img/<?= $tampil['dok_kartu_ujian'] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ><a
                                    href="
                        ?m1=berkas&m2=edit_berkas&id_edit=<?=$tampil['id_berkas']?>&nama=dok_kartu_ujian" class="
                        btn btn-success btn-warning fa fa-edit"></a></a></td>
                        <td align="center"><a href="img/<?= $tampil['dok_raport'] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ><a
                                    href="
                        ?m1=berkas&m2=edit_berkas&id_edit=<?=$tampil['id_berkas']?>&nama=dok_raport" class="
                        btn btn-success btn-warning fa fa-edit"></a></a></td>
                        <td align="center"><a href="img/<?= $tampil['dok_kk'] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ><a
                                    href="
                        ?m1=berkas&m2=edit_berkas&id_edit=<?=$tampil['id_berkas']?>&nama=dok_kk" class="
                        btn btn-success btn-warning fa fa-edit"></a></a></td>
                        <td align="center"><a href="img/<?= $tampil['dok_surat_sehat'] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ><a
                                    href="
                        ?m1=berkas&m2=edit_berkas&id_edit=<?=$tampil['id_berkas']?>&nama=dok_surat_sehat" class="
                        btn btn-success btn-warning fa fa-edit"></a></a></td>
                        <td align="center"><a href="img/<?= $tampil['dok_ktp_ortu'] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ><a
                                    href="
                        ?m1=berkas&m2=edit_berkas&id_edit=<?=$tampil['id_berkas']?>&nama=dok_ktp_ortu" class="
                        btn btn-success btn-warning fa fa-edit"></a></a></td>
                        <td align="center"><a href="img/<?= $tampil['dok_KIP'] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ><a
                                    href="
                        ?m1=berkas&m2=edit_berkas&id_edit=<?=$tampil['id_berkas']?>&nama=dok_KIP" class="
                        btn btn-success btn-warning fa fa-edit"></a></a></td>
                        <td align="center"><a href="img/<?= $tampil['dok_pas_foto'] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ><a
                                    href="
                        ?m1=pemohon&m2=edit_berkas&id_edit=<?=$tampil['id_berkas']?>&nama=dok_pas_foto" class="
                        btn btn-success btn-warning fa fa-edit"></a></a></td>
                        <td align="center"><a href="img/<?= $tampil['dok_sertifikat'] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ><a
                                    href="
                        ?m1=pemohon&m2=edit_berkas&id_edit=<?=$tampil['id_berkas']?>&nama=dok_sertifikat" class="
                        btn btn-success btn-warning fa fa-edit"></a></a></td>


                        <td align="center"><a href="javascript:;" data-id="<?php echo $tampil['id_berkas'] ?>" data-toggle="modal"
                               data-target="#modal-konfirmasi" class="btn btn-success btn-danger fa fa-trash"></a><!-- &nbsp;<a
                                    href="
						?m1=pemohon&m2=editberkas&id_edit=<?= $tampil['id_upload'] ?>" class="
						btn btn-success btn-warning fa fa-edit"></a> --></td>
                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div>
    <!-- -------------------- -->

    
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
                    <a href="javascript:;" class="btn btn-danger" id="hapus-true-data-berkas">Hapus</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- --------- -->