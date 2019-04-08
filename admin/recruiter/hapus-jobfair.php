<?php
    include "../config/koneksi.php";

    $id = $_GET['id'];

    $query = ("SELECT * FROM user_daftar WHERE id='$id'");
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($sql);

        $query2 = ("DELETE FROM user_daftar WHERE id='$id'");
        $sql2 = mysqli_query($connect, $query2);

            if($sql2){

                header('location:index.php?pages=jobfair');
            }

            else {

                echo "<script language='javascript'>window.alert('Maaf, Data gagal dihapus '), window.location = 'index.php?pages=jobfair';</script>";
            }
?>
