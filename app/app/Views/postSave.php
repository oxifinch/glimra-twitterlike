<html>
	<head>
		<meta charset="utf-8"/>
		<title>Title</title>
		<meta name="description" content="Description"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
	<body>
<?php
    echo "<h3>Saving post...</h3>";
    #echo "<a href=\"/post\">Newsfeed</a>";
    # TODO: This probably should not be hardcoded, find a better solution
    header("Location: http://localhost:8080/post");
?>
	</body>
</html>
