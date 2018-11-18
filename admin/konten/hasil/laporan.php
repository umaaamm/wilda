

<div class="row">
<div class="col-md-12">
   <?php
   $sql = $koneksi->query("SELECT tbl_pendaftar.* , tbl_terima.jurusan from tbl_terima LEFT JOIN tbl_pendaftar ON tbl_terima.id_pendaftar = tbl_pendaftar.id_pendaftar WHERE tbl_terima.jurusan = 'TEI'");
    ?> <!-- <option value="TEI">Teknik Elektronika Industri</option>
                          <option value="AKT">Akuntansi</option>  
                          <option value="TKJ">Teknik Komputer Jaringan</option>  
                          <option value="TKR">Teknik Kendaraan Ringan</option>  --> 

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Kelas Teknik Elektronika Industri</h3>
        </div>

        <div class="box-body">
            <table id="t1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Pendaftaran</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                </tr>
                </thead>

                <?php
                while ($tampil = $sql->fetch_assoc()) {
                    @$a++;
                    ?>
                    <tr>
                        <td><?= $a ?></td>
                        <td><?= $tampil['id_pendaftar'] ?></td>
                        <td><?= $tampil['nama'] ?></td>
                        
                          <?php
                            if ($tampil['jurusan'] == 'TEI') { ?>
                               <td>Teknik Elektronika Industri</td>
                          <?php  }elseif ($tampil['jurusan'] == 'AKT') {?>
                             <td>Akuntansi</td>
                           <?php }elseif ($tampil['jurusan'] == 'TKJ') {?>
                             <td>Teknik Komputer Jaringan</td>
                          <?php  }elseif ($tampil['jurusan'] == 'TKR') {?>
                             <td>Teknik Kendaraan Ringan</td>
                          <?php  }
                          ?>
                         
                       
                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div> 

<div class="row">
<div class="col-md-12">
   <?php
   $sql = $koneksi->query("SELECT tbl_pendaftar.* , tbl_terima.jurusan from tbl_terima LEFT JOIN tbl_pendaftar ON tbl_terima.id_pendaftar = tbl_pendaftar.id_pendaftar WHERE tbl_terima.jurusan = 'AKT'");
    ?> <!-- <option value="TEI">Teknik Elektronika Industri</option>
                          <option value="AKT">Akuntansi</option>  
                          <option value="TKJ">Teknik Komputer Jaringan</option>  
                          <option value="TKR">Teknik Kendaraan Ringan</option>  --> 

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Kelas Akuntansi</h3>
        </div>

        <div class="box-body">
            <table id="t2" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Pendaftaran</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                </tr>
                </thead>

                <?php
                while ($tampil = $sql->fetch_assoc()) {
                    @$a++;
                    ?>
                    <tr>
                        <td><?= $a ?></td>
                        <td><?= $tampil['id_pendaftar'] ?></td>
                        <td><?= $tampil['nama'] ?></td>
                        
                          <?php
                            if ($tampil['jurusan'] == 'TEI') { ?>
                               <td>Teknik Elektronika Industri</td>
                          <?php  }elseif ($tampil['jurusan'] == 'AKT') {?>
                             <td>Akuntansi</td>
                           <?php }elseif ($tampil['jurusan'] == 'TKJ') {?>
                             <td>Teknik Komputer Jaringan</td>
                          <?php  }elseif ($tampil['jurusan'] == 'TKR') {?>
                             <td>Teknik Kendaraan Ringan</td>
                          <?php  }
                          ?>
                         
                       
                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div> 


    <div class="row">
<div class="col-md-12">
   <?php
   $sql = $koneksi->query("SELECT tbl_pendaftar.* , tbl_terima.jurusan from tbl_terima LEFT JOIN tbl_pendaftar ON tbl_terima.id_pendaftar = tbl_pendaftar.id_pendaftar WHERE tbl_terima.jurusan = 'TKJ'");
    ?> <!-- <option value="TEI">Teknik Elektronika Industri</option>
                          <option value="AKT">Akuntansi</option>  
                          <option value="TKJ">Teknik Komputer Jaringan</option>  
                          <option value="TKR">Teknik Kendaraan Ringan</option>  --> 

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Kelas Teknik Komputer Jaringan</h3>
        </div>

        <div class="box-body">
            <table id="t3" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Pendaftaran</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                </tr>
                </thead>

                <?php
                while ($tampil = $sql->fetch_assoc()) {
                    @$a++;
                    ?>
                    <tr>
                        <td><?= $a ?></td>
                        <td><?= $tampil['id_pendaftar'] ?></td>
                        <td><?= $tampil['nama'] ?></td>
                        
                          <?php
                            if ($tampil['jurusan'] == 'TEI') { ?>
                               <td>Teknik Elektronika Industri</td>
                          <?php  }elseif ($tampil['jurusan'] == 'AKT') {?>
                             <td>Akuntansi</td>
                           <?php }elseif ($tampil['jurusan'] == 'TKJ') {?>
                             <td>Teknik Komputer Jaringan</td>
                          <?php  }elseif ($tampil['jurusan'] == 'TKR') {?>
                             <td>Teknik Kendaraan Ringan</td>
                          <?php  }
                          ?>
                         
                       
                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div> 


    <div class="row">
<div class="col-md-12">
   <?php
   $sql = $koneksi->query("SELECT tbl_pendaftar.* , tbl_terima.jurusan from tbl_terima LEFT JOIN tbl_pendaftar ON tbl_terima.id_pendaftar = tbl_pendaftar.id_pendaftar WHERE tbl_terima.jurusan = 'TKR'");
    ?> <!-- <option value="TEI">Teknik Elektronika Industri</option>
                          <option value="AKT">Akuntansi</option>  
                          <option value="TKJ">Teknik Komputer Jaringan</option>  
                          <option value="TKR">Teknik Kendaraan Ringan</option>  --> 

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Kelas Teknik Kendaraan Ringan</h3>
        </div>

        <div class="box-body">
            <table id="t4" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Pendaftaran</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                </tr>
                </thead>

                <?php
                while ($tampil = $sql->fetch_assoc()) {
                    @$a++;
                    ?>
                    <tr>
                        <td><?= $a ?></td>
                        <td><?= $tampil['id_pendaftar'] ?></td>
                        <td><?= $tampil['nama'] ?></td>
                        
                          <?php
                            if ($tampil['jurusan'] == 'TEI') { ?>
                               <td>Teknik Elektronika Industri</td>
                          <?php  }elseif ($tampil['jurusan'] == 'AKT') {?>
                             <td>Akuntansi</td>
                           <?php }elseif ($tampil['jurusan'] == 'TKJ') {?>
                             <td>Teknik Komputer Jaringan</td>
                          <?php  }elseif ($tampil['jurusan'] == 'TKR') {?>
                             <td>Teknik Kendaraan Ringan</td>
                          <?php  }
                          ?>
                         
                       
                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div> 
    <!-- </div>   --> 

</div>
