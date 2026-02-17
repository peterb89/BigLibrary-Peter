

<?php
require_once "db_connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM biglibrary_safe WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Media not found.";
        exit;
    }
} else {
    echo "No ID provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Media Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4" style="max-width: 800px;">
<h1 class="mb-4">Media Details</h1>

    <div class="card mb-3">
        <div class="row g-0">

            <div class="col-md-4">
                <img src="images/<?php echo $row['image']; ?>" class="img-fluid rounded-start" alt="cover">
            </div>

            <div class="col-md-8">
                <div class="card-body">

                <h3 class="card-title"><?php echo $row['title']; ?></h3>

                <p class="card-text"><strong>Author:</strong>
                        <?php echo $row['author_first_name'] . " " . $row['author_last_name']; ?>
                </p>

                <p class="card-text"><strong>ISBN:</strong> <?php echo $row['isbn']; ?></p>

                <p class="card-text"><strong>Type:</strong> <?php echo $row['type']; ?></p>

                <p class="card-text"><strong>Publisher:</strong> <?php echo $row['publisher_name']; ?></p>

                <p class="card-text"><strong>Publisher Address:</strong> <?php echo $row['publisher_address']; ?></p>

                <p class="card-text"><strong>Publish Date:</strong> <?php echo $row['publish_date']; ?></p>

                <p class="card-text"><strong>Description:</strong><br>
                <?php echo $row['short_description']; ?>
                </p>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning mt-3">Edit</a>

                <a href="index.php" class="btn btn-secondary mt-3">Back to Home</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>"
                class="btn btn-danger mt-3"
                onclick="return confirm('Are you sure you want to delete this item?');">
                Delete</a>
                </div>
            </div>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

