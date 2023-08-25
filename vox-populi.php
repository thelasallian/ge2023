<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags, Favicons, Google Fonts, Bootstrap, etc. -->
    <?php require_once 'php/modules/all-pages/head.php'; ?>
    <link rel="stylesheet" href="css/vox-populi.css">

    <!-- Document Title -->
    <title>Vox Populi</title>
</head>

<body>
    <!-- Header -->
    <?php include_once 'php/modules/vox-populi/header.php'; ?>

    <!-- Photo Grid for Desktop -->
    <?php include_once 'php/modules/vox-populi/photos.php'; ?>

    <!-- Footer -->
    <?php include_once 'php/modules/all-pages/footer.php'; ?>

    <!-- Scripts -->
    <?php require_once 'php/modules/all-pages/scripts.php'; ?>
    <script src="js/vox-populi/filter-photos.js"></script>
    <script src="js/vox-populi/typed-heading.js"></script>
</body>

</html>