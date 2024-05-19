<?php
require 'koneksi.php';
$gallery = query("SELECT * FROM gallery");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="favicon/favicon.ico" rel="icon">
    <link href="favicon/apple-touch-icon.png" rel="apple-touch-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Portfolio Adelia Langitan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Adelia L.</a>

        <div class="menu-toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="nav-content">
                    <li><a href="index.html">Home<span></span></a></li>
                    <li><a href="gallery.php" class="active">Gallery<span></span></a></li>
                    <li><a href="blog.php">Blog<span></span></a></li>
                    <li><a href="contact.html">Contact<span></span></a></li>
            </nav>
        </header>

    <h1 class="gallery-title">My Gallery</h1> 

    <section class="gallery">
        <?php foreach ($gallery as $g) : ?>
        <div class="image-container">
            <img src="images/<?= $g["gambar"];?>" height="350" width="400" alt=<?= $g["judul foto"];?>>
            <p class="image-description"><?= $g["deskripsi"];?></p>
        </div>
        <?php endforeach; ?>
    </section>

    <footer class="gallery-footer">
        <p>&copy; Adelia Langitan | All rights reserved</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>