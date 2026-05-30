<?php 

session_start();
ob_start();

# Stop Hacking attempt
define('__APP__', TRUE);

# Variables MUST BE INTEGERS
if(isset($_GET['menu'])) { $menu = (int)$_GET['menu']; }
if(isset($_GET['action'])) { $action = (int)$_GET['action']; }

# Variables MUST BE STRINGS A-Z
if(!isset($_POST['_action_'])) { $_POST['_action_'] = FALSE; }

if (!isset($menu)) { $menu = 1; }

print '
<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="style.css">

        <meta name="viewport" content="width=device-width; initial-scale=1.0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

        <title>SESSION primjer</title>
    </head>

<body>

<header>
    <div';

if ($menu > 1) {
    print ' class="hero-subimage"';
}
else {
    print ' class="hero-image"';
}

print '></div>

<nav>';
include("menu.php");
print '</nav>

</header>

<main' . (isset($_SESSION['news_title_1']) ? ' class="cookie"' : '') . '>';

# Homepage
if (!isset($menu) || $menu == 1) {
    include("home.php");
}

# News
else if ($menu == 2) {
    include("news.php");
}

# Contact
else if ($menu == 3) {
    include("contact.php");
}

# About us
else if ($menu == 4) {
    include("about-us.php");
}

print '
</main>';

if (!empty($_SESSION['news_title_1']) || 
    !empty($_SESSION['news_title_2']) || 
    !empty($_SESSION['news_title_3'])) {

    print '
    <aside>

    <h2 style="text-align:center">ZADNJE PREGLEDANO</h2>';

    if (!empty($_SESSION['news_title_1'])) {
        print '<p>
        <a href="' . $_SESSION['news_link_1'] . '">
        ' . $_SESSION['news_title_1'] . '
        </a>
        </p>';
    }

    if (!empty($_SESSION['news_title_2'])) {
        print '<p>
        <a href="' . $_SESSION['news_link_2'] . '">
        ' . $_SESSION['news_title_2'] . '
        </a>
        </p>';
    }

    if (!empty($_SESSION['news_title_3'])) {
        print '<p>
        <a href="' . $_SESSION['news_link_3'] . '">
        ' . $_SESSION['news_title_3'] . '
        </a>
        </p>';
    }

    print '</aside>';
}

print '
<footer>
    <p>Copyright &copy; ' . date("Y") . ' Alen Šimec</p>
</footer>

</body>
</html>';
?>