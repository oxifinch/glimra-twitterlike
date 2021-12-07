<html>
	<head>
		<meta charset="utf-8"/>
		<title>Title</title>
		<meta name="description" content="Create users"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
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
    <form action="registerSave" method="POST">
        <label for="input-user_name">Username</label> 
        <input type="text" name="user_name" id="input-user_name" maxlength="30"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="input-password" maxlength="45"><br>
        <button type="submit">Submit</button>
    </form>
	</body>
</html>
