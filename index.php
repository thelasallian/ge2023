<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags, Favicons, Google Fonts, Bootstrap, etc. -->
    <?php require_once 'php/modules/all-pages/head.php'; ?>
    <link rel="stylesheet" href="css/homepage.css">

    <!-- Document Title -->
    <title>On different pages - The LaSallian GE 2023 Special</title>
</head>

<body>
    <!-- Header/Cover -->
    <?php include_once 'php/modules/homepage/header.php'; ?>

    <!-- Navbar -->
    <?php include_once 'php/modules/all-pages/navbar.php'; ?>

    <!-- Articles -->
    <?php include_once 'php/modules/homepage/articles.php'; ?>

    <!-- Infographic -->
    <?php include_once 'php/modules/homepage/infographic-homepage.php'; ?>

    <!-- Vox Populi -->
    <?php include_once 'php/modules/homepage/vox-populi-homepage.php'; ?>

    <!-- Editor's Note -->
    <?php include_once 'php/modules/homepage/editors-note.php'; ?>

    <!-- Footer -->
    <?php include_once 'php/modules/all-pages/footer.php'; ?>

    <!-- Scripts -->
    <?php require_once 'php/modules/all-pages/scripts.php'; ?>
    <script src="js/about-the-cover.js"></script>
    <script>
        // Typing animation for "On different pages"
        var typed = new Typed('#typed', {
            strings: ['On different pages'],
            typeSpeed: 100,
            onComplete: function(self) {
                self.cursor.remove()
            }
        });
    </script>
</body>

</html>