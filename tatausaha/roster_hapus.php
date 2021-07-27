<?php
include "koneksi.php";
$kode = $_GET['id'];

mysqli_query($conn, "delete from tb_jadwal where id_jadwal = '$kode'") or die (mysqli_error());
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="index.php?page=lihatroster";
</script>