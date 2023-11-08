<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/navigation.css">
    <link rel="stylesheet" href="public/css/blogs.css">
</head>

<body>
    <?php include "framework/header.php"; ?>
    <main>
        <div class="slide"></div>
        <div class="content-grid">
            <?php
            $getContent = new getContentGrid();
            $data = $getContent->__construct();
            ?>
            <a href="">
                <div class="card">
                    <h1><?php echo $data['title']; ?></h1>
                    <img src="<?php echo $data['image']; ?>" alt="">
                    <h2><?php echo $data['meta']; ?></h2>
                </div>
            </a>
            <a href="">
                <div class="card">
                    <h1><?php echo $data['title']; ?></h1>
                    <img src="<?php echo $data['image']; ?>" alt="">
                    <h2><?php echo $data['meta']; ?></h2>
                </div>
            </a>
            <a href="">
                <div class="card">
                    <h1><?php echo $data['title']; ?></h1>
                    <img src="<?php echo $data['image']; ?>" alt="">
                    <h2><?php echo $data['meta']; ?></h2>
                </div>
            </a>
            <a href="">
                <div class="card">
                    <h1><?php echo $data['title']; ?></h1>
                    <img src="<?php echo $data['image']; ?>" alt="">
                    <h2><?php echo $data['meta']; ?></h2>
                </div>
            </a>
        </div>
    </main>
    <?php include "framework/footer.php"; ?>
    <?php include "framework/navigation.php"; ?>
</body>

</html>