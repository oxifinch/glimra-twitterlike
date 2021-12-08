<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Glimma twitter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link  rel="stylesheet" type="text/css" href="css/glimworks_css/main.css"/> -->
    <link  rel="stylesheet" type="text/css" href="css/main.min.css"/>
</head>
<body>
<?=
   $this->include("/partials/loginPartial");
?>
  	<body>
        <h1>Glimra</h1>
        <h2>Log In</h2>
        <form action="/user/loginSave" method="POST">
            <label for="input-user_name">Username</label><br>
            <input type="text" name="user_name" id="input-user_name"><br>
            <label for="input-password">Password</label><br>
            <input type="password" name="password" id="input-password"><br>
            <button type="submit">Submit</button>
        </form>

        <p>Don't have an account?</p><a href="register">Register here!</a>
<?php

?>
	</body>
  
</body>
</html>