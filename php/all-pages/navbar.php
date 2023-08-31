<?php

?>

<nav class="sticky-top">
    <div class="container">
        <!-- Logo -->
        <a href="/">
            <img src="assets/all-pages/tls-horizontal-logo-green.svg" id="green-logo">
        </a>
        <!-- Hamburger Icon -->
        <button class="nav-btn" onclick="showLinks()">
            <span class="material-icons">menu</span>
        </button>
        <!-- Nav Links -->
        <div id="links-container" class="links-container">
            <button class="nav-btn" id="close-btn" onclick="closeLinks()">
                <span class="material-icons">close</span>
            </button>
            <a href="/">
                <img src="assets/all-pages/tls-horizontal-logo-white.svg" id="white-logo">
            </a>
            <ul>
                <li>
                    <a href="#articles">
                        <img src="assets/homepage/articles/03-women.jpg" class="link-img">
                        Articles
                    </a>
                </li>
                <li>
                    <a href="#infographic">
                        <img src="assets/homepage/articles/04-voterturnout.jpg" class="link-img">
                        Voter turnout through the years
                    </a>
                </li>
                <li>
                    <a href="#vox-populi">
                        <img src="assets/homepage/articles/05-usg.jpg" class="link-img">
                        Thoughts on a two-party system
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>