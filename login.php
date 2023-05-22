<?php
        require 'koneksi.php';
        $input_nama = $_POST["Nama"];
        $input_user = $_POST["Username"];
        $input_NIP = $_["NIP"];
        $input_password = $_POST["Password"];

        $query_sql = "INSERT INTO 'database_login' (Nama, Username, NIP, Password)
                    VALUES ('$input_nama','$input_user','$input_NIP','input_password')";

        if(mysqli_query($conn, $query_sql)){
            header("Location: login.php");
        }else {
            echo "Login Gagal : " . mysqli_error($conn);
        }