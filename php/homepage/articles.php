<?php 
// Read list of articles
$jsonString = file_get_contents('json/articles.json'); // Read the articles JSON file
$articles = json_decode($jsonString, true); // Convert the JSON string to a PHP array

// Check if decoding was successful
if ($articles === null) {
    die('Error decoding JSON'); // Handle the error if decoding fails
}

// Counter for article no.
$count = 1;
?>

<section id="articles">
    <div class="container">
        <?php if ($articles !== null): // If articles were decoded successfully, display grid ?>
            <!-- Grid -->
            <div class="articles-grid">
                <?php foreach ($articles as $a): // Create grid item per article, use count for class name ?>
                    <!-- Article <?= $count; ?> -->
                    <div class="article article-<?= $count; ?>">
                        <!-- Visual -->
                        <div class="visual-container">
                            <a href="<?= $a["article-url"]; ?>">
                                <img src="<?= $a["image-path"]; ?>" class="visual">
                            </a>
                        </div>

                        <!-- Details -->
                        <div class="details">
                            <!-- Tag -->
                            <span class="tag"><?= $a["tag"]; ?></span>

                            <!-- Title -->
                            <a href="<?= $a["article-url"]; ?>">
                                <h3 class="title"><?= $a["title"]; ?></h3>
                            </a>

                            <!-- Excerpt -->
                            <?php if ($count < 4): // Display only excerpt for Articles 1-3 ?>
                                <p class="excerpt"><?= $a["excerpt"]; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php $count++; // For article-$ class ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>