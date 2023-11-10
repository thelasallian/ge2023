<?php
// Convert JSON to associative array (true parameter)
$candidatesPerPosition = json_decode(file_get_contents('https://raw.githubusercontent.com/thelasallian/ge2023/main/json/candidates-per-position.json'), true);
// $candidatesPerPosition = json_decode(file_get_contents('json/candidates-per-position.json'), true);
?>

<div class="container">
    <div id="fastTalkGrid">
        <!-- For each position, make a grid item -->
        <?php foreach ($candidatesPerPosition["positions"] as $position) : ?>
            <div class="fastTalkGrid-Item <?= $position["class"]; ?>">
                <!-- Position Label -->
                <span class="tag tag-gray">
                    <?= $position["position_name"]; ?>
                </span>
                <!-- Cards -->
                <?php foreach ($position["candidates"] as $candidate) : ?>
                    <div class="candidateCard">
                        <!-- Image -->
                        <img src="assets/fast-talk/candidates/<?= strtolower($candidate["surname"]); ?>.JPG" class="candidate-img">
                        <div class="candidate-info">
                            <span class="candidate-name">
                                <span class="candidate-surname"><?= $candidate["surname"]; ?></span>
                                <span class="candidate-comma" style="margin-left: -4px;">,</span>
                                <span class="candidate-firstname"> <?= $candidate["first_name"]; ?></span>
                            </span>
                            <span class="candidate-party">
                                <?= ucfirst($candidate["party"]); ?>
                            </span>
                        </div>
                        <div class="candidate-standWrapper">
                            <img src="assets/fast-talk/white.svg" id="<?= $candidate["identifier"]; ?>" class="candidate-stand">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php endforeach; ?>
    </div>
</div>