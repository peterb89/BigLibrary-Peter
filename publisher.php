

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher: <?php echo $publisher; ?></title>
</head>
<body>
    
<div class="container mt-4">
    <h1 class="mb-3">Media from publisher: <?php echo $publisher; ?></h1>
    <a href="index.php" class="btn btn-secondary mb-4">Back to home</a>
</div>


<?php
if (mysqli_num_rows($result) > 0) {
    echo "<div class='container'>";
    echo "<div class='row'>";


    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='col-12 col-md-6 col-lg-4'>";
        echo "<div class='card mb-3'>";
        echo "<img src='img/" . $row['image'] . "' class='card-img-top img-fluid' alt='cover'>";
        echo "<div class='card-body'>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p> Type: " . $row['type'] . "</p>";
        echo "<p> Author: " . $row['author_first_name'] . " " . $row['author_last_name'] . "</p>";
        echo "<a href='details.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Show details</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }

        echo "</div>";
    } else  {
        echo "<p> No media  found for this publisher.</p>";
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>