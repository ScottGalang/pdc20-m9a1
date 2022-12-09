<?php
$dbconnect = mysqli_connect("localhost", "PDC20user", "abc123", "pdc20-scott");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}
?>