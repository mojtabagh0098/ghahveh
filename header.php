<?php include 'config.php';?>
<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قهوه شاپ | فروشگاه آنلاین قهوه</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="<?= BASE_URL; ?>/favicon.ico" type="image/x-icon" />
</head>
<body>
    <header class="header-site">
        <div class="header-main">
            <nav class="navbar">
                <a href="<?= BASE_URL; ?>" class="logo">
                    <img src="./img/logo.svg">
                </a>
                <ul class="navbar-nav">
                    <li class="menu-item">
                        <a href="<?= BASE_URL; ?>" class="nav-link">صفحه اصلی</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= BASE_URL; ?>/shop.php" class="nav-link">محصولات</a>
                    </li>
                    <li class="menu-item">
                        <a class="nav-link" href="<?= BASE_URL; ?>/aboutus.php">درباره ما</a>
                    </li>
                    <li class="menu-item">
                        <a class="nav-link" href="<?= BASE_URL; ?>/contactus.php">تماس با ما</a>
                    </li>
                    <li class="menu-item auth">
                        <a class="nav-link call" href="<?= BASE_URL; ?>/register.php">عضویت</a>
                        یا
                        <a class="nav-link call" href="<?= BASE_URL; ?>/login.php">ورود</a>
                    </li>
                </ul>
                <button class="navbar-toggler" type="button" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
                    </svg>

                </button>
            </nav>
        </div>
    </header>