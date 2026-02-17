

<?php
require_once "db_connect.php";

if (isset($_GET['search']) && $_GET['search'] !== "") {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT * FROM biglibrary_safe WHERE title LIKE '%$search%' OR author_first_name LIKE '%$search%' OR author_last_name LIKE '%$search%'";
    
} else {
    $sql = "SELECT * FROM biglibrary_safe";
}
$result = mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Big Library</title>
</head>
<body>
    <div class="container-fluid mt-4" style="padding-left: 40px;">
<h1>Big Library - Media List</h1>
<form method="GET" action="index.php" class="d-flex mb-4" style="max-width: 400px;">
    <input type="text" name="search" class="form-control me-2" placeholder="Search by title or author">
    <button type="submit" class="btn btn-success">Search</button>
</form>
<br>


<a href="create.php" class="btn btn-primary mb-3">Add New Media</a>
<br><br>

<?php
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
echo "<div class='card mb-3 ms-2' style='max-width: 540px;'>";
echo "  <div class='row g-0'>";
echo "    <div class='col-md-4'>";
echo "      <img src='images/" . $row['image'] . "' class='img-fluid rounded-start' alt='cover'>";
echo "    </div>";
echo "    <div class='col-md-8'>";
echo "      <div class='card-body'>";
echo "        <h5 class='card-title'>" . $row['title'] . "</h5>";
echo "        <p class='card-text'><strong>Author:</strong> " . $row['author_first_name'] . " " . $row['author_last_name'] . "</p>";
echo "        <p class='card-text'><strong>Type:</strong> " . $row['type'] . "</p>";
echo "        <p class='card-text'><strong>Publisher:</strong> 
                <a href='publisher.php?publisher=" . urlencode($row['publisher_name']) . "'>
                    " . $row['publisher_name'] . "
                </a>
              </p>";
echo "        <a href='details.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Details</a>";
echo "      </div>";
echo "    </div>";
echo "  </div>";
echo "</div>";

}
} else {
    echo "No media found.";
}




?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</div>

</body>
</html>