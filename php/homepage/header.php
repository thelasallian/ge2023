<div class="header-wrapper">
    <!-- Header -->
    <header id="header">
        <!-- Title and Buttons Wrapper -->
        <div class="title-btns-wrapper">
            <!-- TLS Star -->
            <img 
             src="assets/all-pages/tls-star-white.svg" 
             oncontextmenu="return false;"
             class="tls-star"
             data-aos="fade-in"
             data-aos-delay="1100">

            <!-- Title -->
            <h1 
             class="title"
             data-aos="fade-down"
             data-aos-delay="500"
             data-aos-duration="1000">
                <!-- Typing Animation -->
                <span id="typed"></span>
            </h1>

            <!-- Buttons -->
            <div 
             class="btns-wrapper"
             data-aos="fade-down"
             data-aos-delay="500"
             data-aos-duration="1000">
                <!-- About the Cover Button -->
                <button 
                 id="about-cover-btn" 
                 class="button button-white" 
                 onclick="displayAboutTheCover()">
                    About the Cover
                </button>
                <!-- View Content Button -->
                <a 
                 id="view-content-btn" 
                 href="#articles" 
                 class="button button-white">
                    View Content
                </a>
            </div>
        </div>

        <!-- Art Wrapper -->
        <div class="art-wrapper">
            <!-- Art for Landscape Screens (Faux Image Hack) -->
            <div 
             class="art-landscape" 
             data-aos="fade-up"
             data-aos-delay="500"
             data-aos-duration="1000"></div>
            <!-- Art for Portrait Screens -->
            <img 
             src="assets/homepage/cover/cover-art-portrait.png" 
             class="art-portrait"
             oncontextmenu="return false;"
             data-aos="fade-up"
             data-aos-delay="500"
             data-aos-duration="1000"
             data-aos-offset="-100" />
        </div>
    </header>

    <!-- About the Cover -->
    <section id="about-the-cover">
        <!-- Details -->
        <div class="details">
            <!-- Title -->
            <h2>About the Cover</h2>
            <p>
                The cover explores the evolution of an idea into the University 
                Student Government we know today. It should aim to move forward 
                but not forget; it should strive to stay grounded but never limit 
                itself. We encourage our readers—no matter their personal 
                opinions—to reflect on the origins of the USG, as well as the 
                advancing standards it must meet to keep up with the times.
            </p>
            <!-- Back Button -->
            <button 
             id="about-cover-btn" 
             class="button button-white" 
             onclick="hideAboutTheCover()">
                Back
            </button>
        </div>
        <!-- Art -->
        <div class="atc-art-wrapper">
            <!-- Art for Landscape Screens -->
            <div class="art-landscape"></div>
            <!-- Art for Portrait Screens -->
            <img 
             src="assets/homepage/cover/cover-art-portrait.png" 
             class="art-portrait">
        </div>
    </section>
</div>