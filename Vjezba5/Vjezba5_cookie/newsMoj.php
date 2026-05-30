<?php 

print '
<h1>NEWS</h1>
<div class="news">';

if (!isset($action)) {

    print '

    <a href="index.php?menu=' . $menu . '&action=1">
        <img src="news/_98509359_uscarproduction_getty.jpg">
    </a>

    <h2>
        <a href="index.php?menu=' . $menu . '&action=1">
        US growth faster than expected
        </a>
    </h2>

    <p>
    The growth extended the robust activity reported in the previous quarter.
    <a href="index.php?menu=' . $menu . '&action=1">More ...</a>
    </p>

    <time datetime="2017-10-25">25 October 2017</time>

    <hr>

    <a href="index.php?menu=' . $menu . '&action=2">
        <img src="news/_98453687_w0dskswv.jpg">
    </a>

    <h2>
        <a href="index.php?menu=' . $menu . '&action=2">
        Wall Street: Tech firm surge pushes US markets higher
        </a>
    </h2>

    <p>
    Investors piled into technology giants.
    <a href="index.php?menu=' . $menu . '&action=2">More ...</a>
    </p>

    <time datetime="2017-10-26">26 October 2017</time>

    <hr>

    <a href="index.php?menu=' . $menu . '&action=3">
        <img src="news/_98501093_booking-template_4panel_976x549.jpg">
    </a>

    <h2>
        <a href="index.php?menu=' . $menu . '&action=3">
        Hotel booking sites probed by consumer watchdog
        </a>
    </h2>

    <p>
    Hotel booking sites are to be probed.
    <a href="index.php?menu=' . $menu . '&action=3">More ...</a>
    </p>

    <time datetime="2017-10-27">27 October 2017</time>

    <hr>
    ';
}

else {

    if ($action == 1) {

        setcookie("news_title_1", "US growth faster than expected", time() + 3600);
        setcookie("news_link_1", "index.php?menu=2&action=1", time() + 3600);

        print '
        <h2>US growth faster than expected</h2>

        <p>
        The US economy grew much faster than expected in the first quarter.
        </p>

        <a href="index.php?menu='.$menu.'">Back</a>';
    }

    else if ($action == 2) {

        setcookie("news_title_2", "Wall Street: Tech firm surge pushes US markets higher", time() + 3600);
        setcookie("news_link_2", "index.php?menu=2&action=2", time() + 3600);

        print '
        <h2>Wall Street: Tech firm surge pushes US markets higher</h2>

        <p>
        Investors piled into technology giants such as Amazon and Microsoft.
        </p>

        <a href="index.php?menu='.$menu.'">Back</a>';
    }

    else if ($action == 3) {

        setcookie("news_title_3", "Hotel booking sites probed by consumer watchdog", time() + 3600);
        setcookie("news_link_3", "index.php?menu=2&action=3", time() + 3600);

        print '
        <h2>Hotel booking sites probed by consumer watchdog</h2>

        <p>
        Hotel booking sites are to be probed by the UK competition watchdog.
        </p>

        <a href="index.php?menu='.$menu.'">Back</a>';
    }
}

print '
</div>';

?>