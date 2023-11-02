<?php
// Convert JSON to associative array (true parameter)
$h2h_eb = json_decode(file_get_contents('https://raw.githubusercontent.com/thelasallian/ge2023/main/json/h2h-eb.json'), true);
$h2h_cp = json_decode(file_get_contents('https://raw.githubusercontent.com/thelasallian/ge2023/main/json/h2h-cp.json'), true);
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

    <div class="h2hGrid" id="h2h-CP">
        <?php foreach ($h2h_cp as $cp) : ?>
            <div class="h2hArticle">
                <a href="<?= $cp["link"]; ?>">
                    <div class="h2hArticle-imgWrapper">
                        <img src="<?= $cp["visual"]; ?>" alt="" class="h2hArticle-img">
                    </div>
                    <div class="h2hArticle-Info">
                        <span class="tag tag-green">
                            <?= $cp["position"]; ?>
                        </span>
                        <h2 class="h2hArticle-title">
                            <?= $cp["title"]; ?>
                        </h2>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>