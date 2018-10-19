<!-- mengambil id untuk menampilkan data EDIT -->
<?php
@$id = $_GET['id_edit']; //dari link
@$field = $_GET['nama'];
$query_edit = $koneksi->query("SELECT * from tbl_berkas where id_berkas='" . $id . "' "); //query untuk menampilkan data per ID
$tampil_edit = $query_edit->fetch_assoc(); // memasukkand data kedalam sebuah array untuk ditampilkan
//print_r($tampil_edit['id_pendaftar']);die;
?>

<?php
if (isset($_POST['submit'])) {
    $id_pendaftar = $_POST['id_pendaftar'];
    //sk80
    if ($field == 'dok_ijazah') {
        $namagambar_dok_ijazah = $_FILES['dok_ijazah'] ['name'];
        $lokasi = $_FILES['dok_ijazah'] ['tmp_name'];
        $lokasitujuan = "./img";
        if (empty($namagambar_dok_ijazah)) {
           $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "' where id_berkas='" . $id . "' ");
        }else if(!empty($namagambar_dok_ijazah)) {
            $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "',dok_ijazah='" . $namagambar_dok_ijazah . "' where id_pendaftar='" . $id . "' ");
        $upload_dok_ijazah = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_ijazah); 
            }
    }else if ($field == 'dok_kartu_ujian') {
        //sk100
        $namagambar_dok_kartu_ujian = $_FILES['dok_kartu_ujian'] ['name'];
        $lokasi = $_FILES['dok_kartu_ujian'] ['tmp_name'];
        $lokasitujuan = "./img";
        if (empty($namagambar_dok_kartu_ujian)) {
            $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "' where id_berkas='" . $id . "' ");
        }else if (!empty($namagambar_dok_kartu_ujian)) {
            $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "',dok_kartu_ujian='" . $namagambar_dok_kartu_ujian . "' where id_berkas='" . $id . "' ");
              $upload_dok_kartu_ujian = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_kartu_ujian);
        }
       
    }else if ($field == 'dok_raport') {
        //skpt
        $namagambar_dok_raport = $_FILES['dok_raport'] ['name'];
        $lokasi = $_FILES['skpt'] ['tmp_name'];
        $lokasitujuan = "./img";
        if (empty($namagambar_dok_raport)) {
            $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "' where id_berkas='" . $id . "' ");
        }else if (!empty($namagambar_dok_raport)) {
             $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "',dok_raport='" . $namagambar_dok_raport . "' where id_berkas='" . $id . "' ");
              $upload_dok_raport = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_raport);
        }
    }else if ($field == 'dok_kk') {
                  //kp
            $namagambar_dok_kk = $_FILES['dok_kk'] ['name'];
            $lokasi = $_FILES['dok_kk'] ['tmp_name'];
            $lokasitujuan = "./img";
            if (empty($namagambar_dok_kk)) {
            $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "' where id_berkas='" . $id . "' ");
        }else if (!empty($namagambar_dok_kk)) {
             $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "',dok_kk='" . $namagambar_dok_kk . "' where id_berkas='" . $id . "' ");
              $upload_dok_kk = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_kk);
        }
    }else if ($field == 'dok_surat_sehat') {
            //taspen
            $namagambar_dok_surat_sehat = $_FILES['dok_surat_sehat'] ['name'];
            $lokasi = $_FILES['dok_surat_sehat'] ['tmp_name'];
            $lokasitujuan = "./img";
            if (empty($namagambar_dok_surat_sehat)) {
            $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "' where id_berkas='" . $id . "' ");
            }else if (!empty($namagambar_dok_surat_sehat)) {
                 $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "',dok_surat_sehat='" . $namagambar_dok_surat_sehat . "' where id_berkas='" . $id . "' ");
                  $upload_dok_surat_sehat = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_surat_sehat);
            }
    }else if ($field == 'dok_ktp_ortu') {
            //daftar_gaji
          $namagambar_dok_ktp_ortu = $_FILES['dok_ktp_ortu'] ['name'];
            $lokasi = $_FILES['dok_ktp_ortu'] ['tmp_name'];
            $lokasitujuan = "./img";
            if (empty($namagambar_dok_ktp_ortu)) {
            $query_tambah = $koneksi->query("UPDATE tbl_upload SET id_pendaftar='" . $id_pendaftar . "' where id_berkas='" . $id . "' ");
        }else if (!empty($namagambar_dok_ktp_ortu)) {
             $query_tambah = $koneksi->query("UPDATE tbl_upload SET id_pendaftar='" . $id_pendaftar . "',dok_ktp_ortu='" . $namagambar_dok_ktp_ortu . "' where id_berkas='" . $id . "' ");
             $upload_dok_ktp_ortu = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_ktp_ortu);
        }
    }else if ($field == 'dok_KIP') {
            //ktp_suami
            $namagambar_dok_KIP = $_FILES['dok_KIP'] ['name'];
            $lokasi = $_FILES['dok_KIP'] ['tmp_name'];
            $lokasitujuan = "./img";
            if (empty($namagambar_dok_KIP)) {
            $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "' where id_berkas='" . $id . "' ");
        }else if (!empty($namagambar_dok_KIP)) {
             $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "',dok_KIP='" . $namagambar_dok_KIP . "' where id_berkas='" . $id . "' ");
              $upload_dok_KIP = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_KIP);
        }
    }else if ($field == 'dok_pas_foto') {
            //kk
            $namagambar_dok_pas_foto = $_FILES['dok_pas_foto'] ['name'];
            $lokasi = $_FILES['dok_pas_foto'] ['tmp_name'];
            $lokasitujuan = "./img";
            if (empty($namagambar_dok_pas_foto)) {
            $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "' where id_berkas='" . $id . "' ");
        }else if (!empty($namagambar_dok_pas_foto)) {
             $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "',dok_pas_foto='" . $namagambar_dok_pas_foto . "' where id_berkas='" . $id . "' ");
               $upload_dok_pas_foto = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_pas_foto);
        }
    }else if ($field == 'dok_sertifikat') {
            //kk
            $namagambar_dok_sertifikat = $_FILES['dok_sertifikat'] ['name'];
            $lokasi = $_FILES['dok_sertifikat'] ['tmp_name'];
            $lokasitujuan = "./img";
            if (empty($namagambar_dok_sertifikat)) {
            $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "' where id_berkas='" . $id . "' ");
        }else if (!empty($namagambar_dok_sertifikat)) {
             $query_tambah = $koneksi->query("UPDATE tbl_berkas SET id_pendaftar='" . $id_pendaftar . "',dok_sertifikat='" . $namagambar_dok_sertifikat . "' where id_berkas='" . $id . "' ");
               $upload_dok_sertifikat = move_uploaded_file($lokasi, $lokasitujuan . "/" . $namagambar_dok_sertifikat);
        }
    }


//jika query berhasil    
    if ($query_tambah) {

        echo '<div class="alert alert-success">Data Berhasil di Edit</div>';
        echo "<meta http-equiv=refresh content=1;url='?m1=berkas&m2=berkas'>";
    }
}


?>
<div class="row">
    <!-- left column -->
    <div class="col-md-4">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Kelola Berkas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="box-body">
                   
                    <input type="hidden" name="id_pendaftar" value="<?= $tampil_edit['id_pendaftar'] ?>">
                    
                    <label><?php echo $field ?></label>
                    <div class="form-group">
                        <a href="img/<?= $tampil_edit[$field] ?>" target="_blank"><img src="./img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" >
                        <input type="file" name="<?php echo $field?>" value="<?=$tampil_edit['dok_ijazah']?>" class="form-control" id="btnimage" >
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