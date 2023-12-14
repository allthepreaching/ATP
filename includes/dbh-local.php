<?php

$sname = 'localhost';
$uname = 'root';
$upass = '';
$dname = 'alltdjli_pas';

$conn = mysqli_connect($sname, $uname, $upass, $dname);
if (!$conn) {
    die('Connection Failed! ' . mysqli_connect_error());
}
