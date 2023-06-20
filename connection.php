<?php
    $host = 'yuvaraj-mysqlserver.mysql.database.azure.com';
    $username = 'yuvaraj';
    $password = 'Brooklyn44144';
    $database = 'autoinventory_db';

    $conn = mysqli_init();
    mysqli_ssl_set($conn, NULL, NULL, "/ssl/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
    mysqli_real_connect($conn, $host, $username, $password, $database, 13306, MYSQLI_CLIENT_SSL);

    if(mysqli_connect_errno()){
        die("Failed to conect to MySQL: ".mysqli_connect_error());
    }
    else{
        echo("<script>console.log('connection successfull')</script>");
    }

?>
