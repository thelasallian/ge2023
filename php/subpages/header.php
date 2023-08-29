<header class="subpage-header" id="<?= $id; ?>">
    <div class="container d-flex flex-column align-items-center">
        <a
         id="back-button" 
         href="index.php" 
         class="button button-white align-self-start"
         data-aos="fade-in"
         data-aos-delay="1100">
            ← Back
        </a>
        <h1 
         class="title"
         data-aos="fade-down"
         data-aos-duration="1000">
            <?= $title; ?>
        </h1>
        <h2 
         class="subtitle"
         data-aos="fade-down"
         data-aos-duration="1000">
            <span id="typed"></span>
        </h2>
        <p 
         class="author-byline"
         data-aos="fade-down"
         data-aos-duration="1000">
            <!-- TODO: Verify if these are the only author -->
            by <span class="author"><?= $author_1; ?></span> & 
            <span class="author"><?= $author_2; ?></span>
        </p>
        <p 
         class="description"
         data-aos="fade-up"
         data-aos-duration="1000">
            <?= $description; ?>
        </p>
    </div>
</header>