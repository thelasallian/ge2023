<section id="articles">
    <div class="container">
        <!-- Get articles -->
        <?php 
            // Read the JSON file
            $jsonString = file_get_contents('json/articles.json');

            // Convert the JSON string to a PHP array
            $articles = json_decode($jsonString, true);

            // Check if decoding was successful
            if ($articles === null) {
                // Handle the error if decoding fails
                die('Error decoding JSON');
            }

            // Get the number of articles
            $numArticles = count($articles);
        ?>

        <!-- Article 1 -->
        <div id="articles-first-row" class="row gx-5">
            <?php $article = $articles[0]; ?>
            <div class="col">
                <div class="article first-row-article">
                    <!-- Visual -->
                    <img src="<?php echo $article["image-path"]; ?>" alt="" class="article-visual ">
                    <div class="article-text">
                        <span class="tag"><?php echo $article["tag"]; ?></span>
                        <a href="<?php echo $article["article-url"]; ?>">
                            <h3 class="article-title"><?php echo $article["title"]; ?></h3>
                        </a>
                        <p class="article-excerpt"><?php echo $article["excerpt"]; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 2-3 -->
        <div id="articles-second-row" class="row gx-5">
            <?php 
                for ($i = 1; $i <= 2; $i++):
                    $article = $articles[$i];
            ?>
                <div class="col">
                    <div class="article second-row-article">
                        <!-- Visual -->
                        <img src="<?php echo $article["image-path"]; ?>" alt="" class="article-visual">
                        <div class="article-text">
                            <span class="tag"><?php echo $article["tag"]; ?></span>
                            <a href="<?php echo $article["article-url"]; ?>">
                                <h3 class="article-title"><?php echo $article["title"]; ?></h3>
                            </a>
                            <p class="article-excerpt"><?php echo $article["excerpt"]; ?></p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <!-- Article 4-7 -->
        <div id="articles-third-row" class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gx-4">
            <?php 
                for ($i = 3; $i <= 6; $i++):
                    $article = $articles[$i];
            ?>
                <div class="col">
                    <div class="article third-row-article">
                        <!-- Visual -->
                        <img src="<?php echo $article["image-path"]; ?>" alt="" class="article-visual">
                        <div class="article-text">
                            <span class="tag"><?php echo $article["tag"]; ?></span>
                            <a href="<?php echo $article["article-url"]; ?>">
                                <h3 class="article-title"><?php echo $article["title"]; ?></h3>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

    </div>
</section>