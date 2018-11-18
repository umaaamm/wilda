
<div class="row">
<div class="col-md-12">
    <?php
    $query = $koneksi->query("SELECT * FROM tbl_pendaftar");
    // $query_q = $koneksi->query("SELECT * FROM tbl_pendaftar where id_register='".$_SESSION['id_register']."' ");
    // $hasil_e = $query_q->fetch_assoc();
    // $_SESSION['id_pendaftar_temp'] = $hasil_e['id_pendaftar'];
    // print_r($_SESSION['id_pendaftar_temp']);die;
    ?>

    <div class="box box-primary">
        <div class="box-header with border">
            <h3 class="box-title">Data Pendaftar</h3>
        </div>

        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nis</th>
                    <th>Nisn</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                    <th>Tinggi Badan</th>
                    <th>Status Dalam Keluarga</th>
                    <th>Anak Ke</th>
                    <th>Cita-Cita</th>
                    <th>Golongan Darah</th>
                    <th>Jarak Tempuh</th>
                    <th>Alat Transportasi</th>
                    <th>Email</th>
                    <th>Kode Pos</th>
                    <th>Jurusan 1 Yang Dipilih</th>
                    <th>Jurusan 2 Yang Dipilih</th>
                    <th>Nama Ayah</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Pendidikan Ayah</th>
                    <th>Penghasilan Ayah</th>
                    <th>No Telpon Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Pendidikan Ibu</th>
                    <th>No Telpon Ibu</th>
                    <th>Penghasilan Ibu</th>
                    <th>Nama Wali</th>
                    <th>Pekerjaan Wali</th>
                    <th>Pendidikan Wali</th>
                    <th>Penghasilan Wali</th>
                    <th>No Telpon Wali</th>
                    <th>Nama Asal Sekolah</th>
                    <th>Alamat Sekolah Asal</th>
                    <th>Status Sekolah</th>
                    <th>Kabupaten</th>
                    <th>Provinsi</th>
                    <th>Seri Ijazah</th>
                    <th>Seri SKHU</th>
                    <th>Kode Peserta SMP</th>
                    <th>Kode Pos SMP</th>
                    <!-- <th>Action</th> -->
                </tr>
                </thead>

                <?php
                while ($tampil = $query->fetch_assoc()) {

                    @$a++;
                    ?>
                    <tr>
                        <td><?= $a ?></td>
                        <td><?= $tampil['nama'] ?></td>
                        <td><?= $tampil['nis'] ?></td>
                        <td><?= $tampil['nisn'] ?></td>
                        <td><?= $tampil['jenis_kelamin'] ?></td>
                        <td><?= $tampil['ttl'] ?></td>
                        <td><?= $tampil['agama'] ?></td>
                        <td><?= $tampil['alamat'] ?></td>
                        <td><?= $tampil['no_telp_rumah'] ?></td>
                        <td><?= $tampil['tinggi_badan'] ?></td>
                        <td><?= $tampil['status_dalam_keluarga'] ?></td>
                        <td><?= $tampil['anak_ke'] ?></td>
                        <td><?= $tampil['cita_cita'] ?></td>
                        <td><?= $tampil['goldar'] ?></td>
                        <td><?= $tampil['jarak_tempuh'] ?></td>
                        <td><?= $tampil['alat_transportasi_kesekolah'] ?></td>
                        <td><?= $tampil['email'] ?></td>
                        <td><?= $tampil['kode_pos'] ?></td>
                        <td><?= $tampil['jurusan1'] ?></td>
                        <td><?= $tampil['jurusan2'] ?></td>
                        <td><?= $tampil['nama_ayah'] ?></td>
                        <td><?= $tampil['pekerjaan_ayah'] ?></td>
                        <td><?= $tampil['pendidikan_ayah'] ?></td>
                        <td><?= $tampil['penghasilan_ayah'] ?></td>
                        <td><?= $tampil['no_telpon_rumah_ayah'] ?></td>
                        <td><?= $tampil['nama_ibu'] ?></td>
                        <td><?= $tampil['pekerjaan_ibu'] ?></td>
                        <td><?= $tampil['pendidikan_ibu'] ?></td>
                        <td><?= $tampil['no_telpon_rumah_ibu'] ?></td>
                        <td><?= $tampil['penghasilan_ibu'] ?></td>
                        <td><?= $tampil['nama_wali'] ?></td>
                        <td><?= $tampil['pekerjaan_wali'] ?></td>
                        <td><?= $tampil['pendidikan_wali'] ?></td>
                        <td><?= $tampil['penghasilan_wali'] ?></td>
                        <td><?= $tampil['no_telp_wali'] ?></td>
                        <td><?= $tampil['nama_asal_sekolah'] ?></td>
                        <td><?= $tampil['alamat_sekolah_asal'] ?></td>
                        <td><?= $tampil['status_sekolah'] ?></td>
                        <td><?= $tampil['kabupaten'] ?></td>
                        <td><?= $tampil['provinsi'] ?></td>
                        <td><?= $tampil['seri_ijazah'] ?></td>
                        <td><?= $tampil['seri_skhu'] ?></td>
                        <td><?= $tampil['kode_peserta_smp'] ?></td>
                        <td><?= $tampil['kode_pos_smp'] ?></td>
                       <!--  <td><a href="javascript:;" data-id="<? echo $tampil['id_pendaftar'] ?>" data-toggle="modal"
                               data-target="#modal-konfirmasi" class="btn btn-success btn-danger fa fa-trash"></a>&nbsp;<a
                                    href="?m1=daftar&m2=edit_pendaftaran&id_edit=<?= $tampil['id_pendaftar'] ?>" class="
                        btn btn-success btn-warning fa fa-edit"></a></td> -->
                    </tr>

                <?php } ?>
                </tbody>

            </table>
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
                        <a href="javascript:;" class="btn btn-danger" id="hapus-true-data">Hapus</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>

