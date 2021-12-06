<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link  rel="stylesheet" type="text/css" href="<?php echo base_url('css/css.css'); ?>   " />
</head>
<body>

	<?php
		if (session()->getFlashData("status")) {
			echo "<h3>".session()->getFlashData("status")."<h3>";
		} else {
			echo "sorry";
		}
	?>
	<h1>Write a status!</h1>
	<form action="postController/create_a_post" method="post">
	<input type="text" name="new_status" id="#">
	<input type="submit">
	<a href="<?= base_url("get_statuses")?>">Load all posts!</a>

	<?php 
	if (isset($allPosts)) {
		foreach ($allPosts as $post) {
			echo "<pre>", $post, "</pre>";
		}
	}
	?>

</form>

	<script src="<?php echo base_url('js/js.js'); ?>"></script>
</body>
</html>
