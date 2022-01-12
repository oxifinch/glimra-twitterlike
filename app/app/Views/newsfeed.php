<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glimma Twitter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.min.css" />
</head>

<body>

    <?=
    $this->include("/partials/header");
?>

    <main>
        <?php
  foreach($posts as $post) { 
     echo view("/partials/post", ["post" => $post]);
}
?>

<div id="post-form-container" class="hidden">
            <?php  
    echo view("/partials/postForm");
?>
</div>
       

        <div id="togglePostFormBtn" class="btn btn-secondary btn-padding-small">
            <ul class="follower-count remove-liststyle evenly-spaced-list">
                <li id="post-icons">
                    <i class="fa fa-comment" aria-hidden="true"></i>
                    <!-- <i class="fa fa-pencil" aria-hidden="true"></i> -->
                </li>
                <li id="postBtn-text">Post!</li>
            </ul>
        </div>
        <script src="/javascript/clientfunctions.js"></script>
        <script src="/javascript/header.js"></script>
    </main>
</body>

</html>