<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glimma Twitter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link  rel="stylesheet" type="text/css" href="css/glimworks_css/main.css"/> -->
    <link rel="stylesheet" type="text/css" href="/css/main.min.css" />
</head>

<body>

    <div class="container-fluid">
        <?php
  foreach($posts as $post) { ?>
        <div class="module-container-background">
            <section class="module-container">
                <header class="profile-header">
                    <div class="profile-info">
                        <a href="#" class="image-container commenter-avatar"><img src="/assets/sadman.jpeg" alt=""
                                width="100" height="100"></a>
                        <div class="list-container">
                            <ul class="remove-liststyle">
                                <li class="username"><?= $post->user_name ?></li>
                                <li class="profile-name">
                                    <h4>@<?= $post->user_name ?></h4>
                                </li>
                            </ul>
                        </div>
                        <div class="header-aside">
                            <small class="post-date">Posted on 12/12/2001</small>
                        </div>
                    </div>
                    <!-- <a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a> -->
                </header>

                <div class="post-content">
                    <!-- <img class="img-content" src="assets/sadman.jpeg" alt="" width="300" height="300"> -->
                    <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal_img -->
                    <div class="text-content">
                        <p><?= $post->text_content ?></p>
                    </div>

                </div>
                <div class="reaction-container container-fluid">
                    <div class="row">
                        <div class="reaction-list">
                            <a href="#"><i class="reaction-icons fa fa-thumbs-up" aria-hidden="true"></i>: 356</a>
                            <a href="#"><i class="reaction-icons fa fa-smile-o" aria-hidden="true"></i>: 13</a>
                            <a href="#"><i class="reaction-icons fa fa-frown-o" aria-hidden="true"></i>: 123k</a>
                            <a href="#"><i class="reaction-icons fa fa-leaf" aria-hidden="true"></i>: 14</a>
                        </div>
                        <div class="post-option">
                            <a href="#"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
}
?>
    </div>

    <form action="/post/postSave" method="POST">
        <label for="input-text_content">Post</label><br>
        <textarea name="text_content" id="input-text_content" cols="40" rows="10" maxlength="260"
            placeholder="What's on your mind? (260 characters max)"></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>