$(document).ready(function(){
 
$('#modal-konfirmasi').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
 
// Untuk mengambil nilai dari data-id="" yang telah kita tempatkan pada link hapus
var id = div.data('id')
 
var modal = $(this)
 
// Mengisi atribut href pada tombol ya yang kita berikan id hapus-true pada modal .
modal.find('#hapus-true-data-berkas').attr("href","?m1=berkas&m2=berkas&id_delete="+id);
modal.find('#hapus-true-data').attr("href","?m1=daftar&m2=pendaftaran&id_delete="+id);
modal.find('#hapus-true-data-nilai').attr("href","?m1=nilai&m2=nilai&id_delete="+id);
modal.find('#hapus-true-data-admin').attr("href","?m1=admin&m2=admin&id_delete="+id);
})
 
});
