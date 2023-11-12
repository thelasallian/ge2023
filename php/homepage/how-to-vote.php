<section id="how-to-vote">
    <div class="container">
        <div id="howToVote-wrapper">
            <div id="howToVote-container">
                <img src="https://raw.githubusercontent.com/thelasallian/ge2023/main/assets/homepage/how-to-vote.png" class="howToVote-img">
                <div id="howToVote-info">
                    <span class="tag tag-green">Infographic</span>
                    <h2 class="title">How to Vote</h2>
                    <p class="desc">
                    DLSU Comelec confirmed that this year's elections will remain online. This infographic provides a step-by-step guide on how to lock in your vote.
                    </p>

                    <?php 
                    $contentUpdates = json_decode(file_get_contents('https://github.com/thelasallian/ge2023/blob/main/json/content-updates.json?raw=true'), true);
                    ?>

                    <?php if ($contentUpdates["how-to-vote"] == " "): ?>
                        <a class="button button-black" style="cursor: not-allowed;">Coming Soon</a>
                    <?php else: ?>
                        <a href="#" class="button button-black">View Infographic</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>