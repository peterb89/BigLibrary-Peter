

<?php
require_once "db_connect.php";

if (isset($_GET['publisher'])) {
    $publisher = mysqli_real_escape_string($conn, $_GET['publisher']);

    $sql = "SELECT * FROM biglibrary_safe WHERE publisher_name = '$publisher'";
    $result = mysqli_query($conn, $sql);
} else {
    echo "NO publisher specified.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher: <?php echo $publisher; ?></title>
</head>
<body>
    
<h1>Media from publisher: <?php echo $publisher; ?></h1>

<a href='index.php'>Back to home</a>
<br></br>

<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px;'>";
        echo "<img src='images/" . $row['image'] . "' width='120'><br>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p> Type: " . $row['type'] . "</p>";
        echo "<p> Author: " . $row['author_first_name'] . " " . $row['author_last_name'] . "</p>";
        echo "<a href='details.php?id=" . $row['id'] . "'>Show details</a>";
        echo "</div>";
    }
    } else  {
        echo "<p> No media  found for this publisher.</p>";
}
?>



</body>
</html>