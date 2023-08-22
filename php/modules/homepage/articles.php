<?php 
// Read list of articles
$jsonString = file_get_contents('json/articles.json'); // Read the articles JSON file
$articles = json_decode($jsonString, true); // Convert the JSON string to a PHP array

// Check if decoding was successful
if ($articles === null) {
    die('Error decoding JSON'); // Handle the error if decoding fails
}

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
                        Article <?= $count; ?>
                    </div>

                    <?php $count++; // For article-$ class ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>