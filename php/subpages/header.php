<?php 
// The following is a template that uses echo to output the HTML for the header of a subpage.
// You can use this by including this file using require_once(). But before that,
// define the following variables: $id, $title, $author_1, $author_2, $description.
// An example can be found in php/vox-populi/header.php
?>

<header class="subpage-header" id="<?= $id; ?>">
    <div class="container d-flex flex-column align-items-center">
        <!-- Back Button -->
        <a
         id="back-button" 
         href="index.php" 
         class="button button-white align-self-start"
         data-aos="fade-in"
         data-aos-delay="1100">
            ← Back
        </a>
        <!-- Title -->
        <h1 
         class="title"
         data-aos="fade-down"
         data-aos-duration="1000">
            <?= $title; ?>
        </h1>
        <!-- Subtitle -->
        <h2 
         class="subtitle"
         data-aos="fade-down"
         data-aos-duration="1000">
            <span id="typed"></span>
        </h2>
        <!-- Authors -->
        <p 
         class="author-byline"
         data-aos="fade-down"
         data-aos-duration="1000">
            by <span class="author"><?= $author_1; ?></span> & 
            <span class="author"><?= $author_2; ?></span>
        </p>
        <!-- Description -->
        <p 
         class="description"
         data-aos="fade-up"
         data-aos-duration="1000">
            <?= $description; ?>
        </p>
    </div>
</header>