<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointdb";

$kapcsolat = new mysqli($servername,$username,$password,$dbname);

if (mysqli_connect_errno())
{
echo ("Nincs kapcsolat!");
die();
}
else {
    echo "<p style='color:white; font-size:20px;'></p>";
}

    ?>