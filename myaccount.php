<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html wp-template wp-template-export-as="index.php" wp-template-define-master-page="true">
<head>
    <title>Vore</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
</head>
<body class="is-preload">
<!-- Wrapper -->
<div id="wrapper">
    <!-- Header -->
    <header id="header">
        <div class="content">
            <div class="inner">
                <h1>kyro's epic website</h1>
                <p>Heya! im kyro! </p>
                <p>He/they&nbsp; &nbsp;</p>
                <script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "fda8872f803b4c369cf5e795605ee26a"}'></script>
            </div>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#work">Work</a>
                </li>
                <li>
                    <a href="#update">Updates</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
                <!--<li><a href="#elements">Elements</a></li>-->
            </ul>
        </nav>
    </header>
    <!-- Main -->
    <div id="main">
        <!-- Intro -->

        <!-- Work -->
        <article id="work">
            <h2 class="major">Work</h2>

            <p>Hi! My commissions are on (indefinite) hiatus. Work and other stuff are really catching up rn. Sorry!</p>

        </article>
        <!-- About -->
        <article id="about">
            <h2 class="major">About</h2>

            <p>Heya, I'm Kyro. I live in the Bay Area (CA) where I attend school. I'm your average tech nerd. Because of how my brain functions, I have many projects. Most of them are discarded after like 2 weeks but some have been going on for a while!<br /> If you want to fuel my needy brain with interesting things, feel free to reach out!</p>

            <p>Check back soon to find my Twitch! Will be streaming coding streams or work or whatever. </p>
        </article>

        <!--UPDATES -->

        <article id="update">
            <h2 class="major">Updates</h2>

            <p>This is where future updates for commission statuses, project updates, and notifications for Plus Members will be shown. If you were given Backstage Access, please login through this form.</p>

            <p>You are currently on the beta version of the webpage. The logout button is on the footer.</p>

        </article>


        <!-- Contact -->
        <article id="contact">
            <h2 class="major">Contact</h2>
            <form method="post" action="#">
                <p>Below are my contacts</p>
                <p>Discord: kyro#0100 <br>Telegram: <a href="https://t.me/mangofurr" target="_blank" rel="noopener noreferrer">@mangofurr</a> <br>Email: <a href="mailto:kyro@onlykyro.live" target="_blank" rel="noopener noreferrer">kyro (at) onlykyro (dot) live</a></p>
                <p>
                    I will most likely answer within a week. Please do not contact me with advertisements, innapropriate images/words, and/or anything that you think I wouldn't want to see in my inbox.  </p>
            </form>
        </article>


        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">copyright ©2022 source. All rights reserved. Protection by source amos.</p>
            <p>
                <a href="logout.php">Log Out</a>
            </p>
        </footer>
    </div>
    <!-- BG -->
    <div id="bg"></div>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "fda8872f803b4c369cf5e795605ee26a"}'></script>
</body>
</html>
