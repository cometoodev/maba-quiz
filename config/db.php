<?php
// Set zona waktu agar log akurat (WITA)
date_default_timezone_set('Asia/Makassar');

$host = "localhost";
$user = "root"; // Ubah jika di hosting
$pass = "";     // Ubah jika di hosting
$db   = "maba_battle";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Gagal Konek Database: " . mysqli_connect_error());
}
?>