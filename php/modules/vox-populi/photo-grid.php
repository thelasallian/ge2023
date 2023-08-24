<?php 
// Load the photos
$json = file_get_contents("json/vox-populi.json"); // Read JSON file
$photos = json_decode($json, true); // Decode JSON to an associative array

// Check if decoding was successful
if ($photos === null) {
    die("Error decoding JSON");
}
?>

<section id="vox-populi">
    <?php if ($photos !== null): // If photos were loaded successfully ?>
        <div class="grid-container">
            <?php foreach ($photos as $p): // For each photo, make a grid item ?>
                <div class="grid-item <?= $p["stand"]; ?>">
                    <img 
                        src="<?= $p["image-path"]; ?>"
                        class="photo <?= $p["stand"]; ?>">
                    <div class="details">
                        <p class="quote"><?= $p["quote"]; ?></p>
                        <p class="byline"><?= $p["byline"]; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
