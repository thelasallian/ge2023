<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags, Favicons, Google Fonts, Bootstrap, all-pages.css etc. -->
    <?php require_once 'php/all-pages/head.php'; ?>
    <link rel="stylesheet" href="css/homepage.css">

    <!-- Document Title -->
    <title>On different pages - The LaSallian GE 2023 Special</title>
</head>

<body>
    <!-- Header/Cover -->
    <?php include_once 'php/homepage/header.php'; ?>

    <!-- Navbar -->
    <?php include_once 'php/all-pages/navbar.php'; ?>

    <!-- Articles -->
    <?php include_once 'php/homepage/articles.php'; ?>

    <!-- Voter turnout -->
    <?php include_once 'php/homepage/voter-turnout-preview.php'; ?>

    <!-- Vox Populi -->
    <?php include_once 'php/homepage/vox-populi-preview.php'; ?>

    <!-- Editor's Note -->
    <?php include_once 'php/homepage/editors-note.php'; ?>

    <!-- Footer -->
    <?php include_once 'php/all-pages/footer.php'; ?>

    <!-- Scripts -->
    <?php require_once 'php/all-pages/scripts.php'; ?>
    <script src="js/homepage/navbar.js"></script>
    <script src="js/homepage/about-the-cover.js"></script>
    <script src="js/homepage/typed-heading.js"></script>
</body>

</html>