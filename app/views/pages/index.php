<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glimma Twitter</title>
    <link rel="stylesheet" href="../../public/css/css.css">
</head>

<!-- http://localhost/views/pages/ -->

<body>
    <h2>Header:</h2>
    <?php
include "../partials/header.php";
?>

    <h2>Profile:</h2>
    <?php
include "../partials/profile.php";
?>

    <h2>Posts:</h2>
    <?php
include "../partials/post.php";
?>

    <?php
include "../partials/postForm.php";
?>

    <div id="loginPartialContainer" class="hidden">
        <section>
            <p>You need to log in! <span id="closeLoginPartialContainer">X</span></p>
            <?php include "../partials/loginPartial.php"; ?>
        </section>
    </div>


    <script src="../../public/js/test.js"></script>
</body>

</html>