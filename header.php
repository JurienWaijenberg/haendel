<!doctype html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="BOFESTO">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/svg+xml" href="images/favicon.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>

    <!-- <meta name="theme-color" content="#E63226" /> -->
    <script src="https://kit.fontawesome.com/5c7d6381f7.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <!--header-bottom-->
        <section class="max-width">
            
            <a href="#">
                <!-- <i class="fa-solid fa-user"></i> -->
            </a>
            <a href="/"><img src="" alt="Logo Haendel"></a>
             <section class="menu-desktop">
                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
             </section>
            
            <section class="mobile-nav">
                <nav>
                    <div class="navbar">
                        <div class="container nav-container">
                            <input class="checkbox" type="checkbox" name="" id="" />
                            <div class="hamburger-lines">
                                <span class="line line1"></span>
                                <span class="line line2"></span>
                                <span class="line line3"></span>
                            </div>
                            <div class="menu-items">
                                <?php wp_nav_menu(array('theme_location' => 'extra-menu')); ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </section>
        </section>
        <script>document.addEventListener("touchstart", function() {}, true);</script>
    </header>
    <main>