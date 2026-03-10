

<?php
require_once "db_connect.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

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
    <title>Edit Media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4">Edit Media</h1>

    <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">


    <form method="POST" action="update.php">

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" required>
        </div>

    <div class="mb-3">
            <label class="form-label">Image filename</label>
            <input type="text" name="image" class="form-control" value="<?php echo $row['image']; ?>" required>
    </div>

        <div class="mb-3">
            <label class="form-label">ISBN</label>
            <input type="text" name="isbn" class="form-control" value="<?php echo $row['isbn']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="short_description" class="form-control" required><?php echo $row['short_description']; ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Type</label>
            <select name="type" class="form-select">
                <option <?php if ($row['type'] == "book") echo "selected"; ?>>book</option>
                <option <?php if ($row['type'] == "CD") echo "selected"; ?>>CD</option>
                <option <?php if ($row['type'] == "DVD") echo "selected"; ?>>DVD</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Author First Name</label>
            <input type="text" name="author_first_name" class="form-control" value="<?php echo $row['author_first_name']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Author Last Name</label>
            <input type="text" name="author_last_name" class="form-control" value="<?php echo $row['author_last_name']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Publisher Name</label>
            <input type="text" name="publisher_name" class="form-control" value="<?php echo $row['publisher_name']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Publisher Address</label>
            <input type="text" name="publisher_address" class="form-control" value="<?php echo $row['publisher_address']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Publish Date</label>
            <input type="date" name="publish_date" class="form-control" value="<?php echo $row['publish_date']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="details.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">Cancel</a>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
