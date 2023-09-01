<?php

?>

<div id="nav-sticky" class="sticky-top">
    <div class="container">
        <!-- Logo -->
        <a href="/">
            <img src="assets/all-pages/tls-horizontal-logo-green.svg" id="green-logo">
        </a>
        <!-- Hamburger Icon -->
        <button class="nav-btn" onclick="showLinks()">
            <span class="material-icons">menu</span>
        </button>
    </div>
</div>

<!-- Nav Links -->
<nav id="nav-drawer" class="nav-drawer">
    <!-- Close Button -->
    <button class="nav-btn" id="close-btn" onclick="closeLinks()">
        <span class="material-icons">close</span>
    </button>
    <!-- TLS Logo (White) -->
    <a href="/">
        <img src="assets/all-pages/tls-horizontal-logo-white.svg" id="white-logo">
    </a>
    <!-- Anchor Links -->
    <ul>
        <li>
            <a href="#articles" class="nav-anchor">
                <img src="assets/homepage/articles/03-women.jpg" class="link-img">
                Articles
            </a>
        </li>
        <li>
            <a href="#infographic" class="nav-anchor">
                <img src="assets/homepage/articles/04-voterturnout.jpg" class="link-img">
                Voter turnout through the years
            </a>
        </li>
        <li>
            <a href="#vox-populi" class="nav-anchor">
                <img src="assets/homepage/articles/05-usg.jpg" class="link-img">
                Thoughts on a two-party system
            </a>
        </li>
    </ul>
</nav>