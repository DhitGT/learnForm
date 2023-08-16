<?php
    function connect(){
        $conn = mysqli_connect("localhost", "root","","db_sekolah");
        return $conn;
    }
?>