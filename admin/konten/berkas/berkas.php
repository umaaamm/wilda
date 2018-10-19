<div class="row">
<div class="col-md-12">
   <?php
   $query = $koneksi->query("SELECT tbl_pendaftar.nama,tbl_berkas.dok_ijazah,tbl_berkas.dok_kartu_ujian,tbl_berkas.dok_raport,tbl_berkas.dok_kk,tbl_berkas.dok_surat_sehat,tbl_berkas.dok_ktp_ortu,tbl_berkas.dok_KIP,tbl_berkas.dok_pas_foto,tbl_berkas.dok_sertifikat FROM tbl_berkas LEFT JOIN tbl_pendaftar ON tbl_berkas.id_pendaftar = tbl_pendaftar.id_pendaftar");
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Data Berkas</h3>
        </div>

        <div class="box-body">
            <table id="example3" class="table table-bordered table-striped">
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
                    
                </tr>
                </thead>

                <?php
                while ($tampil = $query->fetch_assoc()) {
                    @$a++;
                    ?>
                    <tr>
                        <td><?= $a ?></td>
                        <td><?= $tampil['nama'] ?></td>
                        <td align="center"><a href="../img/<?= $tampil['dok_ijazah'] ?>" target="_blank"><img src="../img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ></a></td>
                        
                        <td align="center"><a href="../img/<?= $tampil['dok_kartu_ujian'] ?>" target="_blank"><img src="../img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ></a></td>
                        <td align="center"><a href="../img/<?= $tampil['dok_raport'] ?>" target="_blank"><img src="../img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ></a></td>
                        <td align="center"><a href="../img/<?= $tampil['dok_kk'] ?>" target="_blank"><img src="../img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ></a></td>
                        <td align="center"><a href="../img/<?= $tampil['dok_surat_sehat'] ?>" target="_blank"><img src="../img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ></a></td>
                        <td align="center"><a href="../img/<?= $tampil['dok_ktp_ortu'] ?>" target="_blank"><img src="../img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ></a></td>
                        <td align="center"><a href="../img/<?= $tampil['dok_KIP'] ?>" target="_blank"><img src="../img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ></a></td>
                        <td align="center"><a href="../img/<?= $tampil['dok_pas_foto'] ?>" target="_blank"><img src="../img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ></a></td>
                        <td align="center"><a href="../img/<?= $tampil['dok_sertifikat'] ?>" target="_blank"><img src="../img/pdf.ico" class="img-thumbnail img-responsive"
                             style="width:50px; hegith:50px;margin-bottom:10px;" id="picturebox" ></a></td>


                    </tr>

                <?php } ?> 
                </tbody>

            </table>
        </div>
    </div>	

</div>