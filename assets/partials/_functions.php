<?php
function db_connect()
{
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = '';

    $conn = mysqli_connect($servername, $username, $password, $database);
    return $conn;
}
?>