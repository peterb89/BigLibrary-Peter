

<?php
require_once "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST["id"];
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

    $sql = "UPDATE biglibrary_safe SET
            title = '$title',
            image = '$image',
            isbn = '$isbn',
            short_description = '$short_description',
            type = '$type',
            author_first_name = '$author_first_name',
            author_last_name = '$author_last_name',
            publisher_name = '$publisher_name',
            publisher_address = '$publisher_address',
            publish_date = '$publish_date'
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: details.php?id=$id");
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
