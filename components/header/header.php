<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dish Diary</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../components/header/header.css">
</head>
<body>
    <header class="border-bottom mb-4">
    <?php
        $current_page = basename($_SERVER['PHP_SELF']);
        if ($current_page == 'landingPage.php'): ?>
            <div class="row py-2 align-items-center justify-content-between mx-5 px-0">
                <div class="nav-left d-flex align-items-center">
                    <a href="" class="nav-link">About Us</a>
                    <a href="" class="nav-link">F&Q</a>
                </div>
                <div class="nav-right d-flex align-items-center">
                    <a href="" class="nav-link">Login</a>
                </div>
            </div>
        <?php else: ?>
            <div class="row py-2 align-items-center justify-content-between mx-5 px-0">
                <div class="nav-left d-flex align-items-center">
                    <a href="../../pages/home/home.php" class="nav-link <?= ($current_page == 'home.php') ? 'active' : '' ?>">Home</a>
                    <a href="../../pages/recipes/recipes.php" class="nav-link <?= ($current_page == 'recipes.php') ? 'active' : '' ?>">My Recipe</a>
                    <a href="../../pages/favorites/favorites.php" class="nav-link <?= ($current_page == 'favorites.php') ? 'active' : '' ?>">Favorite</a>
                </div>
                <div class="title text-center font-weight-bold">Dish Diary</div>
                <div class="nav-right d-flex align-items-center">
                    <a href="../../pages/account/account.php" class="nav-link <?= ($current_page == 'account.php') ? 'active' : '' ?>">Account</a>
                    <div class="profile-logo ml-2"></div>
                </div>
            </div>
        <?php endif; ?>
    </header>
    <main>
