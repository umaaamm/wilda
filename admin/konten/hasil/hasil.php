
<?php
include "koneksi/koneksi.php";
$bobot = array(0.25,0.25,0.35,0.15);
?>

<div class="row">
<div class="col-md-12">
   <?php
   $sql = $koneksi->query("SELECT tbl_nilai.id_nilai,tbl_pendaftar.nama,tbl_nilai.rata_un, tbl_nilai.rata_raport,tbl_nilai.nilai_test,tbl_nilai.prestasi FROM tbl_nilai  LEFT JOIN tbl_pendaftar on tbl_nilai.id_pendaftar = tbl_pendaftar.id_pendaftar");
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Matrik Awal</h3>
        </div>

        <div class="box-body">
            <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Rata-Rata UN</th>
                    <th>Rata-Rata Raport</th>
                    <th>Nilai Test</th>
                    <th>Prestasi</th>  
                </tr>
                </thead>

                <?php
                while ($tampil = $sql->fetch_assoc()) {
                    @$a++;
                    ?>
                    <tr>
                        <td><?= $a ?></td>
                        <td><?= $tampil['nama'] ?></td>
                        <td><?= $tampil['rata_un'] ?></td>
                        <td><?= $tampil['rata_raport'] ?></td>
                        <td><?= $tampil['nilai_test'] ?></td>
                        <td><?= $tampil['prestasi'] ?></td>
                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div> 

<div class="row">
<div class="col-md-12">
   <?php
   $crMax = $koneksi->query("SELECT max(rata_un) as maxK1, 
      max(rata_raport) as maxK2,
      max(nilai_test) as maxK3,
      max(prestasi) as maxK4 
   FROM tbl_nilai");
  $max = $crMax->fetch_assoc();

   $sql = $koneksi->query("SELECT tbl_nilai.id_nilai,tbl_pendaftar.nama,tbl_nilai.rata_un, tbl_nilai.rata_raport,tbl_nilai.nilai_test,tbl_nilai.prestasi FROM tbl_nilai  LEFT JOIN tbl_pendaftar on tbl_nilai.id_pendaftar = tbl_pendaftar.id_pendaftar");
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Matrik Normalisasi</h3>
        </div>

        <div class="box-body">
            <table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Rata-Rata UN</th>
                    <th>Rata-Rata Raport</th>
                    <th>Nilai Test</th>
                    <th>Prestasi</th>  
                </tr>
                </thead>

                <?php
                while ($tampil = $sql->fetch_assoc()) {
                    @$a++;
                    ?>
                    <tr>

                     
                        <td><?= $a ?></td>
                        <td><?= $tampil['nama'] ?></td>
                        <td><?= round($tampil['rata_un']/$max['maxK1'],2)?></td>
                        <td><?= round($tampil['rata_raport']/$max['maxK2'],2)?></td>
                        <td><?= round($tampil['nilai_test']/$max['maxK3'],2)?></td>
                        <td><?= round($tampil['prestasi']/$max['maxK4'],2)?></td>
                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div> 

<div class="row">
<div class="col-md-12">
  <?php

   $sql3 = $koneksi->query("SELECT tbl_pendaftar.jurusan1,tbl_pendaftar.jurusan2,tbl_nilai.id_nilai,tbl_pendaftar.nama,tbl_nilai.rata_un, tbl_nilai.rata_raport,tbl_nilai.nilai_test,tbl_nilai.prestasi FROM tbl_nilai  LEFT JOIN tbl_pendaftar on tbl_nilai.id_pendaftar = tbl_pendaftar.id_pendaftar");

       while ($dt3 = $sql3->fetch_assoc()) {
  $jumlah= ($dt3['rata_un'])+($dt3['rata_raport'])+($dt3['nilai_test'])+($dt3['prestasi']);
  $poin= round(
   (($dt3['rata_un']/$max['maxK1'])*$bobot[0])+
   (($dt3['rata_raport']/$max['maxK2'])*$bobot[1])+
   (($dt3['nilai_test']/$max['maxK3'])*$bobot[2])+
   (($dt3['prestasi']/$max['maxK4'])*$bobot[3]),3);

  $data[]=array('nama'=>$dt3['nama'],
    'jurusan1'=>$dt3['jurusan1'],
    'jurusan2'=>$dt3['jurusan2'],
      'jumlah'=>$jumlah,
      'poin'=>$poin);

foreach ($data as $key => $isi) {
    $nama[$key]=$isi['nama'];
    $jurusan1[$key]=$isi['jurusan1'];
    $jurusan2[$key]=$isi['jurusan2'];
    $jlh[$key]=$isi['jumlah'];
    $poin1[$key]=$isi['poin'];
   }
   array_multisort($poin1,SORT_DESC,$jlh,SORT_DESC,$data);
 }
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Hasil Perhitungan</h3>
        </div>

        <div class="box-body">
            <table id="l3" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jurusan 1</th>
                    <th>Jurusan 2</th>
                    <th>Total Poin</th>
                    <th>SAW</th>
                    <th>Keterangan</th>  
                </tr>
                </thead>

                    <?php
                      foreach ($data as $key => $item) { 
                      $b++?>
                    <tr>
                        <td><?= $b ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['jurusan1'] ?></td>
                        <td><?= $item['jurusan2'] ?></td>
                        <td><?= $item['jumlah']?></td>
                        <td><?= $item['poin']?></td>
                        <td><?= $b ?></td>
                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div>  

</div>
