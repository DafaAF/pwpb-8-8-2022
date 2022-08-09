<?php
$Id = $_GET['id'];
$Nama = $_GET['nama'];
$Kelas = $_GET['kelas'];
$data = new pdo('mysql:host=localhost;dbname=sek0lah','root','');
$query = $data->query("insert into siswa values('$Id','$Nama','$Kelas')");
