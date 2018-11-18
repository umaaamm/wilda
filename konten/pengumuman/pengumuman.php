
<?php

$quer_id=$koneksi->query("select * from tbl_pendaftar where id_register = '".$_SESSION['id_register']."'");
$tampil_id = $quer_id->fetch_assoc(); 
$query = $koneksi->query("SELECT * FROM tbl_terima where id_pendaftar='".$tampil_id['id_pendaftar']."'");
$tampil = $query->fetch_assoc();
$row = $query->num_rows;


?>
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Pengumuman Hasil</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
                <div class="box-body">
            <?php
            if ($row == '0') { ?>
              <div class="callout callout-warning">
                     <h4>Belum Ada Pengumuman.</h4>
                     </div>
        <?php    }else{
                if ($tampil['jurusan'] == "Tidak Diterima") { ?>
                    <div class="callout callout-danger">
                     <h4>Mohon Maaf, Anda Tidak Diterima.</h4>
                     </div>
              <?php  }else{  ?>        
                   
            <div class="callout callout-success">
                <h4>Selamat Anda Diterima.</h4>


                          <?php
                            if ($tampil['jurusan'] == 'TEI') { ?>
                          <p>Dengan jurusan <h4><b>Teknik Elektronika Industri</b></h4></p>
                          <?php  }elseif ($tampil['jurusan'] == 'AKT') {?>
                             
                             <p>Dengan jurusan <h4><b>Akuntansi</b></h4></p>
                           <?php }elseif ($tampil['jurusan'] == 'TKJ') {?>
                            
                             <p>Dengan jurusan <h4><b>Teknik Komputer Jaringan</b></h4></p>
                          <?php  }elseif ($tampil['jurusan'] == 'TKR') {?>
                             <p>Dengan jurusan <h4><b>Teknik Kendaraan Ringan</b></h4></p>
                          <?php  }
                          ?>



                
              </div>
              <?php
          } }
              ?>
        </div>
    </div>
</div>
<!-- ------------ -->


</div>
<!-- --------- -->