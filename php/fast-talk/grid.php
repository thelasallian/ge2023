<?php
// Convert JSON to associative array (true parameter)
$candidatesPerPosition = json_decode(file_get_contents('json/candidates-per-position.json'), true);
?>

<div class="container">
    <div id="fastTalkGrid">
        <!-- For each position, make a grid item -->
        <?php foreach ($candidatesPerPosition["positions"] as $position) : ?>
            <div class="fastTalkGrid-Item">
                <!-- Position Label -->
                <span class="tag tag-gray">
                    <?= $position["position_name"]; ?>
                </span>
                <!-- Cards -->
                <?php foreach ($position["candidates"] as $candidate) : ?>
                    <div class="candidateCard">
                        <!-- Image -->
                        <img src="assets/vox-populi/bongaros.jpg" class="candidate-img">
                        <div class="candidate-info">
                            <span class="candidate-name">
                                <?= $candidate["surname"]; ?>,
                                <?= $candidate["first_name"]; ?>
                            </span>
                            <span class="candidate-party">
                                <?= ucfirst($candidate["party"]); ?>
                            </span>
                        </div>
                        <div class="candidate-standWrapper">
                            <img src="assets/fast-talk/white.svg" id="<?= $candidate["surname"]; ?>" class="candidate-stand">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php endforeach; ?>
    </div>
</div>