<section id="vox-populi-desktop-grid" class="vox-populi-grid">
    <div class="container-fluid">
        <div class="row row-cols-3 g-4 g-lg-5">
            <?php
            // Read the JSON file
            $jsonString = file_get_contents('json/vox-populi-all.json');

            // Convert the JSON string to a PHP array
            $photos = json_decode($jsonString, true);

            // Check if decoding was successful
            if ($photos === null) {
                // Handle the error if decoding fails
                die('Error decoding JSON');
            }

            foreach ($photos as $photo) :
            ?>

                <div class="col">
                    <div class="ds-photo-wrapper">
                        <div class="ds-photo-quote-wrapper">
                            <p class="ds-quote"><?php echo $photo["quote"]; ?></p>
                            <p class="ds-byline"><?php echo $photo["byline"]; ?></p>
                        </div>
                        <img src="<?php echo $photo["image-path"]; ?>" alt="" class="ds-photo-img">
                    </div>
                </div>

            <?php  
            endforeach;
            ?>
        </div>
    </div>
</section>