

<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "efswd2_peter_bozso_biglibrary";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>