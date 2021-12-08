<html>
	<head>
		<meta charset="utf-8"/>
		<title>Newsfeed | Glimra</title>
		<meta name="description" content="Newsfeed"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
        <style>
            .post {
                border: 2px solid black;
                border-radius: 10px;
                box-shadow: 0 0 10px 1px black;
            }
            
            textarea {
                resize: none;
            }
        </style>
	</head>
	<body>
        <h1>News Feed</h1>
<?php
    foreach($posts as $post) {
        echo "<div class=\"post\">";
        echo "<h4>$post->user_name</h4>";
        echo "<p>$post->text_content</p>";
        echo "</div>";
    }    
?>
        <form action="/post/postSave" method="POST">
            <label for="input-text_content">Post</label><br>
            <textarea name="text_content" id="input-text_content" cols="40" rows="10" maxlength="260" placeholder="What's on your mind? (260 characters max)"></textarea><br>
            <button type="submit">Submit</button>
        </form>
	</body>
</html>
