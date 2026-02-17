

<?php
require_once "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

$title = mysqli_real_escape_string($conn, $_POST["title"]);
$image = mysqli_real_escape_string($conn, $_POST["image"]);
$isbn = mysqli_real_escape_string($conn, $_POST["isbn"]);
$short_description = mysqli_real_escape_string($conn, $_POST["short_description"]);
$type = mysqli_real_escape_string($conn, $_POST["type"]);
$author_first_name = mysqli_real_escape_string($conn, $_POST["author_first_name"]);
$author_last_name = mysqli_real_escape_string($conn, $_POST["author_last_name"]);
$publisher_name = mysqli_real_escape_string($conn, $_POST["publisher_name"]);
$publisher_address = mysqli_real_escape_string($conn, $_POST["publisher_address"]);
$publish_date = mysqli_real_escape_string($conn, $_POST["publish_date"]);

$sql = "INSERT INTO biglibrary_safe
(title, image, isbn, short_description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date)
VALUES
('$title', '$image', '$isbn', '$short_description', '$type', '$author_first_name', '$author_last_name', '$publisher_name', '$publisher_address', '$publish_date')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit;
}   else {
    echo "Error: " . mysqli_error($conn);
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Create Media</title>
</head>
<body>
    <div class="container mt-4" style="max-width: 600px;">
    <h1>Add New Media</h1>

    <form method="POST">

        <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" required>
</div>


        <div class="mb-3">
            <label class="form-label">Image filename</label>
            <input type="text" name="image" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">ISBN</label>
            <input type="text" name="isbn" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="short_description" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Type</label>
            <select name="type" class="form-select">
                <option>book</option>
                <option>CD</option>
                <option>DVD</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Author First Name</label>
            <input type="text" name="author_first_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Author Last Name</label>
            <input type="text" name="author_last_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Publisher Name</label>
            <input type="text" name="publisher_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Publisher Address</label>
            <input type="text" name="publisher_address" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Publish Date</label>
            <input type="date" name="publish_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Media</button>

    </form>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>



</html>