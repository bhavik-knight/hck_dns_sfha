<!DOCTYPE html>
<html lang="en">

<!-- start of header -->
<?php include "header.php"; ?>
<!-- end of header -->

<body>
    <!--  start of navbar -->
    <?php include "navbar.php"; ?>
    <!-- end of navbar -->

    <?php
    $pages = array(
        "header.php",
        "navbar.php",
        "main.php",
        "menu.php",
        "admin-add.php",
        "admin-confirm.php",
        "all-adventures.php",
        "book.php",
        "thank-you.php",
        "footer.php",
        "ty.php"
    );

    # check whether the particular page is set via get method
    # if true load set page to this page variable, otherwise set the main page
    $page = NULL;
    if (isset($_POST["q"])) {
        $page = $_POST["q"];
    } else {
        $page = isset($_GET["q"]) ? $_GET["q"] : "main.php";
    }


    # if this page in our website, load that page, otherwise throw 404 error
    if (in_array($page, $pages)) {
        include $page;
    }
    ?>

    <!-- start of footer -->
    <?php include "footer.php"; ?>
    <!-- end of footer -->

    <!-- jquery google api -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- manual script -->
    <script type="text/javascript" src="src/index.js"></script>
</body>

</html>