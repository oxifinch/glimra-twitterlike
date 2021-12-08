<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Glimma</title>
</head>

<body>
<?=
   $this->include("/partials/registerPartial");
?>
</body>

  <body>
    <h1>Register</h1>
    <hr>
<?php
   echo "<h4>Existing users: </h4>";
   foreach($users as $user) {
       echo "<h3>User: $user->display_name (@$user->user_name)</h3>";
   }
   echo "<hr>";
?>
    <form action="user/registerSave" method="POST">
        <label for="input-user_name">Username</label> 
        <input type="text" name="user_name" id="input-user_name" maxlength="30"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="input-password" maxlength="45"><br>
        <button type="submit">Submit</button>
    </form>
	</body>
  
</html>