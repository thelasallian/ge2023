<!-- Header -->
<header class="subpage-header" id="<?= $id; ?>">
    <div class="container d-flex flex-column align-items-center">
        <!-- Back Button -->
        <a
         id="back-button" 
         href="index.php" 
         class="button button-white align-self-start"
         data-aos="fade-in"
         data-aos-delay="1100">
            ← Back
        </a>
        <!-- Subtitle -->
        <h2 
         class="subtitle"
         data-aos="fade-down"
         data-aos-duration="1000">
            <span id="typed"></span>
        </h2>
        <!-- Description -->
        <p 
         class="description mb-4"
         data-aos="fade-up"
         data-aos-duration="1000">
         Curabitur blandit tempus ardua ridiculus sed magna. Sed haec quis possit intrepidus aestimare tellus. Quisque ut dolor gravida, placerat libero vel, euismod. Plura mihi bona sunt, inclinet, amari petere vellent.
        </p>
        <!-- View as Infog -->
        <a href="#" class="button button-white">View as Infographic</a>
    </div>
</header>

<!-- Navbar -->
<nav class="sticky-top">
    <div class="container">
        <select name="select-issue" id="select-issue">
            <option selected disabled>Select an Issue</option>
            <optgroup label="Yes or No" id="yes-or-no-optgroup">
                <option value="issue1">issue1</option>
                <option value="issue2">issue2</option>
                <option value="issue3">issue3</option>
                <option value="issue4">issue4</option>
                <option value="issue5">issue5</option>
                <option value="issue6">issue6</option>
                <option value="issue7">issue7</option>
            </optgroup>
            <optgroup label="0.0 to 4.0" id="graded-optgroup">
                <option value="issue8">issue8</option>
                <option value="issue9">issue9</option>
                <option value="issue10">issue10</option>
                <option value="issue11">issue11</option>
                <option value="issue12">issue12</option>
                <option value="issue13">issue13</option>
                <option value="issue14">issue14</option>
            </optgroup>
        </select>
    </div>
</nav>