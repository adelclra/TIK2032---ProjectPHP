<?php
require 'koneksi.php';
$blog = query("SELECT * FROM blog");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="favicon/favicon.ico" rel="icon">
    <link href="favicon/apple-touch-icon.png" rel="apple-touch-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Portfolio Adelia Langitan</title>
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
                    <li><a href="gallery.php">Gallery<span></span></a></li>
                    <li><a href="blog.php" class="active">Blog<span></span></a></li>
                    <li><a href="contact.html">Contact<span></span></a></li>
            </nav>
        </header>

    <h1 class="blog-title1">Blog</h1>

    <section class="blog">
        <div class="section__container">

        <?php foreach ($blog as $b) : ?>
            <div class="blog-post">
                <h2 class="blog-title" onclick="toggleContent(this)"><?= $b["judul"];?></h2>
                <div class="blog-content" style="display: none;">
                    <p><?= $b["konten"];?>
                    </p>
                    <a href=<?= $b["link"];?> style="color: #f4f4f4;">Read more..</a>
                    <img src="artikel/<?= $b["gambar"];?>" alt=<?= $b["judul foto"];?> style="max-width: 100%; height: auto; display: block;" onclick="toggleDescription(this)">
                    <div class="blog-img-description" style="display: block;">
                    <?= $b["deskripsi"];?>
                    </div>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
        </div>
    </section>
    
    <footer class="blog-footer">
        <p>&copy; Adelia Langitan | All rights reserved</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>