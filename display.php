<?php
include 'connection.php';

$sql = "SELECT * FROM blogs";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curious - All Blogs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Curious</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blogs.html">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="compose.html">Compose</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="header">
        <h1>All Blogs</h1>
        <p>Read all the latest blogs from different categories!</p>
    </div>

    <div class="container">
        <?php while ($row = mysqli_fetch_assoc($result)) {
            $category = $row['category'];
            $image = "default-$category.jpg"; 
        ?>
        <div class="blog-post">
            <img src="<?php echo $image; ?>" alt="<?php echo ucfirst($category); ?> Blog">
            <div class="blog-content">
                <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                <p><?php echo htmlspecialchars($row['content']); ?></p>
                <a href="<?php echo htmlspecialchars($row['link']); ?>">Read More</a>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="footer">
        <h2>Visit Again!</h2>
    </div>

</body>
</html>
