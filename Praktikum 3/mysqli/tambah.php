<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['id_jur'];

$sql = "INSERT INTO mahasiswa(nim,nama,foto,id_jur) VALUES('$nim','$nama','$jurusan')";
$query = mysqli_query($koneksi, $sql); 

if($query){
    echo "Data berhasil ditambahkan";
}else{
    echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}

mysqli_close($koneksi);

?>