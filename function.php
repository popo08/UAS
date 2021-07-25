<?php
session_start();
$conn = mysqli_connect("localhost","root","","uas");

if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];

    $addtotable = mysqli_query($conn,"insert into data (nim, nama, alamat, prodi) values('$nim ','$nama','$alamat','$prodi') ");
    if($addtotable){
        header('location:index.php');
    }else{
        echo'gagal';
        header('location:index.php');
    }
}

?>