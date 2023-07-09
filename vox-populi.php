<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags, Favicons, Google Fonts, Bootstrap, etc. -->
    <?php require_once 'php/modules/all-pages/head.php'; ?>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/vox-populi.css">

    <!-- Document Title -->
    <title>Vox Populi</title>
</head>
<body>
    <!-- Navbar -->
    <?php //include_once 'php/modules/all-pages/navbar.php'; ?>

    <!-- Header -->

    <!-- Photo Grid for Desktop -->
    <?php include_once 'php/modules/vox-populi/desktop-grid.php'; ?>

    <!-- Photo Grid for Mobile -->
    <?php include_once 'php/modules/vox-populi/mobile-grid.php'; ?>

    <!-- Footer -->
    <?php //include_once 'php/modules/all-pages/footer.php'; ?>
    
    <!-- Scripts -->
    <?php require_once 'php/modules/all-pages/scripts.php'; ?>
    <script src="js/vox-populi.js"></script>
</body>
</html>