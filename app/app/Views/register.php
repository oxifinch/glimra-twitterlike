<html>
	<head>
		<meta charset="utf-8"/>
		<title>Title</title>
		<meta name="description" content="Create users"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
	<body>
        <h1>Create User</h1>
        <hr>
<?php
   echo "<h3>Hello from 'register'!</h3>";
   foreach($users as $user) {
       echo "<h3>User: $user->display_name (@$user->user_name)</h3>";
   }
?>
	</body>
</html>
