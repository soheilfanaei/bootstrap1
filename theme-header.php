<?php
session_start();
?>
<!DOCTYPE html>
<link rel="stylesheet" href="b">
<html lang="fa">
<head>
    <!-- لینک به فایل‌های CSS بوت‌استرپ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- فونت دلخواه -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="moket.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-rtl.css">
    <link rel="stylesheet" href="index.css">
</head>
<body dir="rtl">
    <nav class="container">
        <ul class="row bg-dark">
            <li class="col-12 col-md h5"><span class="text-muted">ابزار الات سهیل </span></li>
            <li class="col-12 col-md h6"><a class="text-muted" href="index.php">خانه</a></li>
            <li class="col-12 col-md h6"><a class="text-muted" href="about.php">درباره ما</a></li>
            <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
                <li class="col-12 co+l-md h6"><a class="text-muted" href="news_add.php">مدیریت</a></li>
            <?php }else{ ?>
                
            <?php } ?>
                <li class="col-12 col-md h6"><a class="text-muted" href="sellform.php"> فرم خرید</a></li>
            <?php if(isset($_SESSION["login"])){ ?>

            <?php } ?>
                <li class="col-12 col-md h6"><a class="text-muted" href="register.php">ثبت نام</a></li>
            <?php if(isset($_SESSION["login"])){ ?>
                <li class="col-12 col-md h6"><a class="text-muted" href="logout.php">خروج</a></li>
            <?php }else{ ?>
            <li class="col-12 col-md h6"><a class="text-muted" href="login.php">ورود</a></li>
            <?php } ?>
        </ul>
    </nav>
    

    <main class="container">
