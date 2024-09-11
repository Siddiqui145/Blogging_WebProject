<?php
session_start();

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Get posted data
    $author = $_POST['display'];
    $category = $_POST['category'];
    $content = $_POST['blog'];

    if (!empty($author) && !empty($category) && !empty($content)) {

        $query = "INSERT INTO blogs (author, category, content) VALUES ('$author', '$category', '$content')";
        mysqli_query($con, $query);

        header("Location: home.html");
        die;
    } else {
        echo "Please enter valid data!";
    }
}
?>
