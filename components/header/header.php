<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dish Diary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php if(basename($_SERVER['PHP_SELF']) == 'home.php'){ ?>
        <link href="../../pages/home/home.css" rel="stylesheet" media="all"/>
    <?php } 
        elseif(basename($_SERVER['PHP_SELF']) == 'recipes.php'){
    ?>
        <link href="../../pages/recipes/recipes.css" rel="stylesheet" media="all"/>
    <?php } 
        elseif(basename($_SERVER['PHP_SELF']) == 'favorites.php'){
    ?>
        <link href="../../pages/favorites/favorites.css" rel="stylesheet" media="all"/>
    <?php } 
        elseif(basename($_SERVER['PHP_SELF']) == 'profile.php'){
    ?>
        <link href="../../pages/profile/profile.css" rel="stylesheet" media="all"/>
    <?php } 
        elseif(basename($_SERVER['PHP_SELF']) == 'landingPage.php'){
    ?>
        <link href="../../pages/landingPage/landingPage.css" rel="stylesheet" media="all"/>
    <?php } ?>
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
    <?php
        // Echo or print the current page name
        echo "Current Page: $current_page";
        echo "Style: $css_file";
    ?>
    </header>
    <main>
