<?php
// Convert JSON to associative array (true parameter)
$h2h_eb = json_decode(file_get_contents('https://raw.githubusercontent.com/thelasallian/ge2023/main/json/h2h-eb.json'), true);
$hsh_cp = json_decode(file_get_contents('https://raw.githubusercontent.com/thelasallian/ge2023/main/json/h2h-cp.json'), true);
?>

<div class="container">
    <div class="h2hGrid" id="h2h-EB">
        <?php foreach ($h2h_eb as $eb) : ?>
            <div class="h2hArticle">
                <a href="<?= $eb["link"]; ?>">
                    <div class="h2hArticle-imgWrapper">
                        <img src="<?= $eb["visual"]; ?>" alt="" class="h2hArticle-img">
                    </div>
                    <div class="h2hArticle-Info">
                        <span class="tag tag-green">
                            <?= $eb["position"]; ?>
                        </span>
                        <h2 class="h2hArticle-title">
                            <?= $eb["title"]; ?>
                        </h2>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>