<?php include("config.php"); ?>
<?php
include("config.php");
if( isset($_GET['id']) ){
 // ambil id dari query string
 $id = $_GET['id'];
 // buat query hapus
 $sql = "DELETE FROM dosen WHERE id=$id";
 $query = mysqli_query($conn, $sql);
 // apakah query hapus berhasil?
 if( $query ){
 header('Location: list_dosen.php');
 } else {
 die("gagal menghapus...");
 }
} else {
 die("akses dilarang...");
}
?>