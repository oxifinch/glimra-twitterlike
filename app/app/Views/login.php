<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Glimma twitter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link  rel="stylesheet" type="text/css" href="css/glimworks_css/main.css"/> -->
    <link rel="stylesheet" type="text/css" href="/css/main.min.css" />
</head>

<body>
    <?=
    $this->include("/partials/header");
?>
<main>

<?php
  if(isset($errMessageText)) {
    echo view("/partials/errorBox", ["errMessageText" => $errMessageText]);
  }
?>
   
    <?=
   $this->include("/partials/loginPartial");
?>

    <script src="/javascript/header.js"></script>

</main>

</body>

</html>