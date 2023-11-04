<?php
// Convert JSON to associative array (true parameter)
$candidatesPerPosition = json_decode(file_get_contents('https://raw.githubusercontent.com/thelasallian/ge2023/main/json/candidates-per-position.json'), true);
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
                        <img src="https://scontent.fmnl30-2.fna.fbcdn.net/v/t39.30808-6/395054616_718672283641990_5322466493134946991_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGDu22caYyHAZzU6Nt9P37NEg5TiAcvMDsSDlOIBy8wOy2eVDaTUOrEs085VlshGQz7TXs1b-MghPBrk8WrY4Hv&_nc_ohc=w-YiuuziDEkAX8O2FyX&_nc_oc=AQmcF_gyW_TFaRxB0hvPaWQruMCSoMg2S0z-Qv4Gghqo4nxlzNwGNe0-wcPtMjix-5w&_nc_ht=scontent.fmnl30-2.fna&oh=00_AfDhbJVVeozrLwlZF14VihXR4Zv46UFsw_1WdrQXjAXJJg&oe=654BB1C4" class="candidate-img">
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