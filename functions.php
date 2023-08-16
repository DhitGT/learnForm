<?php
    $conn = mysqli_connect("localhost", "root","","db_sekolah");


    function query($qbebas){
        global $conn;
        $result = mysqli_query($conn, $qbebas);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows []= $row;
        }
        return $rows;
    }

    function search(){
        echo "kak";
    }


    function hapus($Id){
        global $conn;
        mysqli_query($conn, "DELETE FROM siswa WHERE Id = $Id");
    }

?>