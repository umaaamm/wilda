
<?php
include "koneksi/koneksi.php";
$bobot = array(0.25,0.25,0.35,0.15);

if (isset($_POST['submit'])) {
    $id_pendaftar = $_POST['id_pendaftar'];
    $jurusan = $_POST['jurusan'];
     $query_cek = $koneksi->query("select * from tbl_kuota where jurusan ='".$jurusan."' ");
     $tampil_cek = $query_cek->fetch_assoc();
    
     $query_cek_terima = $koneksi->query("select count(jurusan) as total from tbl_terima where jurusan='".$jurusan."' GROUP BY jurusan");
     $tampil_cek_terima = $query_cek_terima->fetch_assoc();
     // print_r($tampil_cek_terima['total']);
     // print_r($tampil_cek['kuota']);
     // die;
      
     if ($jurusan == 'Tidak Diterima') {
        $query_tambah = $koneksi->query("INSERT INTO tbl_terima (id_pendaftar,jurusan)values ('".$id_pendaftar."','" . $jurusan . "')");
        echo '<div class="alert alert-success">Data Berhasil di Tambah</div>';
        echo "<meta http-equiv=refresh content=1;url='?m1=hasil&m2=hasil'>";
        
     }elseif ($tampil_cek_terima['total'] >= $tampil_cek['kuota']) {
        echo '<div class="alert alert-danger">Kelas Sudah Penuh Silahkan Memilih Jurusan Lain.</div>';
        echo "<meta http-equiv=refresh content=1;url='?m1=hasil&m2=hasil'>";
     }else{
        $query_tambah = $koneksi->query("INSERT INTO tbl_terima (id_pendaftar,jurusan)values ('".$id_pendaftar."','" . $jurusan . "')");
        echo '<div class="alert alert-success">Data Berhasil di Tambah</div>';
        echo "<meta http-equiv=refresh content=1;url='?m1=hasil&m2=hasil'>";
     
    }
}

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
                    <th>Nilai UN</th>
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
                    <th>Nilai UN</th>
                    <th>Rata-Rata Raport</th>
                    <th>Nilai Test</th>
                    <th>Prestasi</th>  
                </tr>
                </thead>

                <?php
                while ($tampil = $sql->fetch_assoc()) {
                    @$v++;
                    ?>
                    <tr>
                        <td><?= $v ?></td>
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

   $sql3 = $koneksi->query("SELECT tbl_pendaftar.id_pendaftar,tbl_pendaftar.jurusan1,tbl_pendaftar.jurusan2,tbl_nilai.id_nilai,tbl_pendaftar.nama,tbl_nilai.rata_un, tbl_nilai.rata_raport,tbl_nilai.nilai_test,tbl_nilai.prestasi,tbl_terima.jurusan as diterima FROM tbl_nilai  LEFT JOIN tbl_pendaftar on tbl_nilai.id_pendaftar = tbl_pendaftar.id_pendaftar LEFT JOIN tbl_terima on tbl_nilai.id_pendaftar = tbl_terima.id_pendaftar WHERE tbl_pendaftar.jurusan1 = 'TEI' ");

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
      'id_pendaftar'=>$dt3['id_pendaftar'],
      'diterima'=>$dt3['diterima'],
      'poin'=>$poin);

foreach ($data as $key => $isi) {
    $nama[$key]=$isi['nama'];
    $jurusan1[$key]=$isi['jurusan1'];
    $jurusan2[$key]=$isi['jurusan2'];
    $jlh[$key]=$isi['jumlah'];
    $poin1[$key]=$isi['poin'];
     $diterima[$key]=$isi['diterima'];
    $id_pendaftar[$key]=$isi['id_pendaftar'];
   }
   array_multisort($poin1,SORT_DESC,$jlh,SORT_DESC,$data);
 }
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Hasil Perhitungan TEKNIK ELEKTRONIKA INDUSTRI</h3>
        </div>

        <div class="box-body">
            <table id="l3" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jurusan 1</th>
                    <th>Jurusan 2</th>
                    <!-- <th>Total Poin</th> -->
                    <th>SAW</th>
                    <th>Keterangan</th>
                    <th>Diterima di ?</th> 
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
                        <!-- <td><?= $item['jumlah']?></td> -->
                        <td><?= $item['poin']?></td>
                        <td><?= $b?></td>
                        <?php if ($item['diterima'] != "Tidak Diterima" && $item['diterima'] != "") { ?>
                            <td>Sudah Diterima di Jurusan <?=$item['diterima']?></td>
                      <?php  }elseif ($item['diterima'] == "Tidak Diterima" ) { ?>
                        <td>Tidak Diterima</td>
                  <?php    }else{ ?>
                        <td>
                            <form method="post" action="">
                                <input type="hidden" name="id_pendaftar" value="<?=$item['id_pendaftar'];?>">
                            <select class="form-control select2" style="width: 100%;" name="jurusan">
                          <option value="Tidak Diterima">TIDAK DITERIMA</option>
                          <option value="TEI">Teknik Elektronika Industri</option>
                          <option value="AKT">Akuntansi</option>  
                          <option value="TKJ">Teknik Komputer Jaringan</option>  
                          <option value="TKR">Teknik Kendaraan Ringan</option>  
                        </select>
                        <div class="box-footer">
                         <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                     </div>
                        </form>
                    </td>
                <?php } ?>
                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div>  

<div class="row">
<div class="col-md-12">
  <?php

   $sql4 = $koneksi->query("SELECT tbl_pendaftar.id_pendaftar,tbl_pendaftar.jurusan1,tbl_pendaftar.jurusan2,tbl_nilai.id_nilai,tbl_pendaftar.nama,tbl_nilai.rata_un, tbl_nilai.rata_raport,tbl_nilai.nilai_test,tbl_nilai.prestasi,tbl_terima.jurusan as diterima FROM tbl_nilai  LEFT JOIN tbl_pendaftar on tbl_nilai.id_pendaftar = tbl_pendaftar.id_pendaftar LEFT JOIN tbl_terima on tbl_nilai.id_pendaftar = tbl_terima.id_pendaftar WHERE tbl_pendaftar.jurusan1 = 'TKJ' ");

       while ($dt4 = $sql4->fetch_assoc()) {
  $jumlah= ($dt4['rata_un'])+($dt4['rata_raport'])+($dt4['nilai_test'])+($dt4['prestasi']);
  $poin= round(
   (($dt4['rata_un']/$max['maxK1'])*$bobot[0])+
   (($dt4['rata_raport']/$max['maxK2'])*$bobot[1])+
   (($dt4['nilai_test']/$max['maxK3'])*$bobot[2])+
   (($dt4['prestasi']/$max['maxK4'])*$bobot[3]),3);

  $dataTKJ[]=array('nama'=>$dt4['nama'],
    'jurusan1'=>$dt4['jurusan1'],
    'jurusan2'=>$dt4['jurusan2'],
      'jumlah'=>$jumlah,
      'id_pendaftar'=>$dt4['id_pendaftar'],
      'diterima'=>$dt4['diterima'],
      'poin'=>$poin);

foreach ($dataTKJ as $key => $isi) {
    $nama[$key]=$isi['nama'];
    $jurusan1[$key]=$isi['jurusan1'];
    $jurusan2[$key]=$isi['jurusan2'];
    $jlh[$key]=$isi['jumlah'];
    $poin1[$key]=$isi['poin'];
     $diterima[$key]=$isi['diterima'];
    $id_pendaftar[$key]=$isi['id_pendaftar'];
   }
   array_multisort($poin1,SORT_DESC,$jlh,SORT_DESC,$dataTKJ);
 }
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Hasil Perhitungan TEKNIK KOMPUTER JARINGAN</h3>
        </div>

        <div class="box-body">
            <table id="t1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jurusan 1</th>
                    <th>Jurusan 2</th>
                    <!-- <th>Total Poin</th> -->
                    <th>SAW</th>
                    <th>Keterangan</th>
                    <th>Diterima di ?</th> 
                </tr>
                </thead>

                    <?php
                      foreach ($dataTKJ as $key => $item) { 
                      $m++?>
                    <tr>
                        <td><?= $m ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['jurusan1'] ?></td>
                        <td><?= $item['jurusan2'] ?></td>
                        <!-- <td><?= $item['jumlah']?></td> -->
                        <td><?= $item['poin']?></td>
                        <td><?= $m?></td>
                        <?php if ($item['diterima'] != "Tidak Diterima" && $item['diterima'] != "") { ?>
                            <td>Sudah Diterima di Jurusan <?=$item['diterima']?></td>
                      <?php  }elseif ($item['diterima'] == "Tidak Diterima" ) { ?>
                        <td>Tidak Diterima</td>
                  <?php    }else{ ?>
                        <td>
                            <form method="post" action="">
                                <input type="hidden" name="id_pendaftar" value="<?=$item['id_pendaftar'];?>">
                            <select class="form-control select2" style="width: 100%;" name="jurusan">
                          <option value="Tidak Diterima">TIDAK DITERIMA</option>
                          <option value="TEI">Teknik Elektronika Industri</option>
                          <option value="AKT">Akuntansi</option>  
                          <option value="TKJ">Teknik Komputer Jaringan</option>  
                          <option value="TKR">Teknik Kendaraan Ringan</option>  
                        </select>
                        <div class="box-footer">
                         <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                     </div>
                        </form>
                    </td>
                <?php } ?>
                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div>  
    <div class="row">
<div class="col-md-12">
  <?php

   $sql5 = $koneksi->query("SELECT tbl_pendaftar.id_pendaftar,tbl_pendaftar.jurusan1,tbl_pendaftar.jurusan2,tbl_nilai.id_nilai,tbl_pendaftar.nama,tbl_nilai.rata_un, tbl_nilai.rata_raport,tbl_nilai.nilai_test,tbl_nilai.prestasi,tbl_terima.jurusan as diterima FROM tbl_nilai  LEFT JOIN tbl_pendaftar on tbl_nilai.id_pendaftar = tbl_pendaftar.id_pendaftar LEFT JOIN tbl_terima on tbl_nilai.id_pendaftar = tbl_terima.id_pendaftar WHERE tbl_pendaftar.jurusan1 = 'AKT' ");

       while ($dt5 = $sql5->fetch_assoc()) {
  $jumlah= ($dt5['rata_un'])+($dt5['rata_raport'])+($dt5['nilai_test'])+($dt5['prestasi']);
  $poin= round(
   (($dt5['rata_un']/$max['maxK1'])*$bobot[0])+
   (($dt5['rata_raport']/$max['maxK2'])*$bobot[1])+
   (($dt5['nilai_test']/$max['maxK3'])*$bobot[2])+
   (($dt5['prestasi']/$max['maxK4'])*$bobot[3]),3);

  $dataAKT[]=array('nama'=>$dt5['nama'],
    'jurusan1'=>$dt5['jurusan1'],
    'jurusan2'=>$dt5['jurusan2'],
      'jumlah'=>$jumlah,
      'id_pendaftar'=>$dt5['id_pendaftar'],
      'diterima'=>$dt5['diterima'],
      'poin'=>$poin);

foreach ($dataAKT as $key => $isi) {
    $nama[$key]=$isi['nama'];
    $jurusan1[$key]=$isi['jurusan1'];
    $jurusan2[$key]=$isi['jurusan2'];
    $jlh[$key]=$isi['jumlah'];
    $poin1[$key]=$isi['poin'];
     $diterima[$key]=$isi['diterima'];
    $id_pendaftar[$key]=$isi['id_pendaftar'];
   }
   array_multisort($poin1,SORT_DESC,$jlh,SORT_DESC,$dataAKT);
 }
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Hasil Perhitungan AKUNTANSI</h3>
        </div>

        <div class="box-body">
            <table id="t2" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jurusan 1</th>
                    <th>Jurusan 2</th>
                    <!-- <th>Total Poin</th> -->
                    <th>SAW</th>
                    <th>Keterangan</th>
                    <th>Diterima di ?</th> 
                </tr>
                </thead>

                    <?php
                      foreach ($dataAKT as $key => $item) { 
                      $u++?>
                    <tr>
                        <td><?= $u ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['jurusan1'] ?></td>
                        <td><?= $item['jurusan2'] ?></td>
                        <!-- <td><?= $item['jumlah']?></td> -->
                        <td><?= $item['poin']?></td>
                        <td><?= $u?></td>
                        <?php if ($item['diterima'] != "Tidak Diterima" && $item['diterima'] != "") { ?>
                            <td>Sudah Diterima di Jurusan <?=$item['diterima']?></td>
                      <?php  }elseif ($item['diterima'] == "Tidak Diterima" ) { ?>
                        <td>Tidak Diterima</td>
                  <?php    }else{ ?>
                        <td>
                            <form method="post" action="">
                                <input type="hidden" name="id_pendaftar" value="<?=$item['id_pendaftar'];?>">
                            <select class="form-control select2" style="width: 100%;" name="jurusan">
                          <option value="Tidak Diterima">TIDAK DITERIMA</option>
                          <option value="TEI">Teknik Elektronika Industri</option>
                          <option value="AKT">Akuntansi</option>  
                          <option value="TKJ">Teknik Komputer Jaringan</option>  
                          <option value="TKR">Teknik Kendaraan Ringan</option>  
                        </select>
                        <div class="box-footer">
                         <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                     </div>
                        </form>
                    </td>
                <?php } ?>
                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div>  
     <div class="row">
<div class="col-md-12">
  <?php

   $sql6 = $koneksi->query("SELECT tbl_pendaftar.id_pendaftar,tbl_pendaftar.jurusan1,tbl_pendaftar.jurusan2,tbl_nilai.id_nilai,tbl_pendaftar.nama,tbl_nilai.rata_un, tbl_nilai.rata_raport,tbl_nilai.nilai_test,tbl_nilai.prestasi,tbl_terima.jurusan as diterima FROM tbl_nilai  LEFT JOIN tbl_pendaftar on tbl_nilai.id_pendaftar = tbl_pendaftar.id_pendaftar LEFT JOIN tbl_terima on tbl_nilai.id_pendaftar = tbl_terima.id_pendaftar WHERE tbl_pendaftar.jurusan1 = 'TKR' ");

       while ($dt6 = $sql6->fetch_assoc()) {
  $jumlah= ($dt6['rata_un'])+($dt6['rata_raport'])+($dt6['nilai_test'])+($dt6['prestasi']);
  $poin= round(
   (($dt6['rata_un']/$max['maxK1'])*$bobot[0])+
   (($dt6['rata_raport']/$max['maxK2'])*$bobot[1])+
   (($dt6['nilai_test']/$max['maxK3'])*$bobot[2])+
   (($dt6['prestasi']/$max['maxK4'])*$bobot[3]),3);

  $dataTKR[]=array('nama'=>$dt6['nama'],
    'jurusan1'=>$dt6['jurusan1'],
    'jurusan2'=>$dt6['jurusan2'],
      'jumlah'=>$jumlah,
      'id_pendaftar'=>$dt6['id_pendaftar'],
      'diterima'=>$dt6['diterima'],
      'poin'=>$poin);

foreach ($dataTKR as $key => $isi) {
    $nama[$key]=$isi['nama'];
    $jurusan1[$key]=$isi['jurusan1'];
    $jurusan2[$key]=$isi['jurusan2'];
    $jlh[$key]=$isi['jumlah'];
    $poin1[$key]=$isi['poin'];
     $diterima[$key]=$isi['diterima'];
    $id_pendaftar[$key]=$isi['id_pendaftar'];
   }
   array_multisort($poin1,SORT_DESC,$jlh,SORT_DESC,$dataTKR);
 }
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Hasil Perhitungan TEKNIK KENDARAAN RINGAN</h3>
        </div>

        <div class="box-body">
            <table id="t3" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jurusan 1</th>
                    <th>Jurusan 2</th>
                    <!-- <th>Total Poin</th> -->
                    <th>SAW</th>
                    <th>Keterangan</th>
                    <th>Diterima di ?</th> 
                </tr>
                </thead>

                    <?php
                      foreach ($dataTKR as $key => $item) { 
                      $l++?>
                    <tr>
                        <td><?= $l ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['jurusan1'] ?></td>
                        <td><?= $item['jurusan2'] ?></td>
                        <!-- <td><?= $item['jumlah']?></td> -->
                        <td><?= $item['poin']?></td>
                        <td><?= $l?></td>
                        <?php if ($item['diterima'] != "Tidak Diterima" && $item['diterima'] != "") { ?>
                            <td>Sudah Diterima di Jurusan <?=$item['diterima']?></td>
                      <?php  }elseif ($item['diterima'] == "Tidak Diterima" ) { ?>
                        <td>Tidak Diterima</td>
                  <?php    }else{ ?>
                        <td>
                            <form method="post" action="">
                                <input type="hidden" name="id_pendaftar" value="<?=$item['id_pendaftar'];?>">
                            <select class="form-control select2" style="width: 100%;" name="jurusan">
                          <option value="Tidak Diterima">TIDAK DITERIMA</option>
                          <option value="TEI">Teknik Elektronika Industri</option>
                          <option value="AKT">Akuntansi</option>  
                          <option value="TKJ">Teknik Komputer Jaringan</option>  
                          <option value="TKR">Teknik Kendaraan Ringan</option>  
                        </select>
                        <div class="box-footer">
                         <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                     </div>
                        </form>
                    </td>
                <?php } ?>
                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div>  
</div>
