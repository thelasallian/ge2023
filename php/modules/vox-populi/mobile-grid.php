<section id="vox-populi-mobile-grid" class="vox-populi-grid">
    <div class="container-fluid">

        <ul>
            <li><button onclick="showVoxPopYes()">Yes</button></li>
            <li><button onclick="showVoxPopUndecided()">Undecided</button></li>
            <li><button onclick="showVoxPopNo()">No</button></li>
        </ul>

        <!-- Yes -->
        <div id="vox-populi-yes" class="row row-cols-1 g-4 g-lg-5 bg-primary">
            <?php
            // Read the JSON file
            $jsonString = file_get_contents('json/vox-populi-yes.json');

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
                    <div class="mb-photo-wrapper">
                        <img src="<?php echo $photo["image-path"]; ?>" alt="" class="mb-photo-img">
                    </div>
                    <div class="mb-photo-quote-wrapper">
                        <p class="mb-quote"><?php echo $photo["quote"]; ?></p>
                        <p class="mb-byline"><?php echo $photo["byline"]; ?></p>
                    </div>
                </div>

                

            <?php  
            endforeach;
            ?>
        </div>

        <!-- Undecided -->
        <div id="vox-populi-undecided" class="row row-cols-1 bg-success g-4 g-lg-5">
            <?php
            // Read the JSON file
            $jsonString = file_get_contents('json/vox-populi-undecided.json');

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
                    <div class="mb-photo-wrapper">
                        <img src="<?php echo $photo["image-path"]; ?>" alt="" class="mb-photo-img">
                    </div>
                    <div class="mb-photo-quote-wrapper">
                        <p class="mb-quote"><?php echo $photo["quote"]; ?></p>
                        <p class="mb-byline"><?php echo $photo["byline"]; ?></p>
                    </div>
                </div>

            <?php  
            endforeach;
            ?>
        </div>

        <!-- No -->
        <div id="vox-populi-no" class="bg-danger row row-cols-1 g-4 g-lg-5">
            <?php
            // Read the JSON file
            $jsonString = file_get_contents('json/vox-populi-no.json');

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
                    <div class="mb-photo-wrapper">
                        <img src="<?php echo $photo["image-path"]; ?>" alt="" class="mb-photo-img">
                    </div>
                    <div class="mb-photo-quote-wrapper">
                        <p class="mb-quote"><?php echo $photo["quote"]; ?></p>
                        <p class="mb-byline"><?php echo $photo["byline"]; ?></p>
                    </div>
                </div>

            <?php  
            endforeach;
            ?>
        </div>
    </div>
</section>