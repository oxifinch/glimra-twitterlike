<html>
	<head>
		<meta charset="utf-8"/>
		<title>Title</title>
		<meta name="description" content="Description"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
	<body>
<?php
    echo "<h3>Username: $username</h3>";
    echo "<p>Session user id: $user_id</p>";
    header("Location: http://localhost:8080/post");
?>
	</body>
</html>
