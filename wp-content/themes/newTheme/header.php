<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/191c96ceba.js" crossorigin="anonymous"></script>

    <!-- style.css -->


    <!-- font Comfortaa -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Max Blog</title>
    <?php wp_head();?>
</head>
<body>

<!-- HEADER START -->
<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1><a href="/">Max blog</a></h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-house"></i>Главная</a></li>
                    <li><a href="#"><i class="fa-solid fa-note-sticky"></i>Посты</a></li>
                    <li><a href="#"><i class="fa-regular fa-image"></i>Галерея</a></li>
                    <li><a href="#"><i class="fa-solid fa-user"></i>Кабинет</a>
                        <ul>
                            <li><a href="#" style="color: rgba(216, 224, 232, 0.72);">Админка</a></li>
                            <li><a href="#" style="color: rgba(216, 224, 232, 0.72);">Выход</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- HEADER END -->

<!-- Autoplaying carousel Bootstrap  START-->
<div class="container-fluid p-0">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.png" class="d-block w-100" alt="Lego">
            </div>

            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/311.png" class="d-block w-100" alt="Hot Wheels">
            </div>

            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.png" class="d-block w-100" alt="Airplanes">
            </div>
        </div>
    </div>
</div>