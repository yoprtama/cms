<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'u242847602_blog';

$link=mysqli_connect($host,$user,$password,$db) or die (mysqli_error());

$perhalaman = 5;
$halaman    = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
$start      = ($halaman > 1) ? ($halaman * $perhalaman) - $perhalaman : 0;

$result = mysqli_query($link, "SELECT * FROM berita");
$total  = mysqli_num_rows($result);

$pages  = ceil($total/$perhalaman);
?>
