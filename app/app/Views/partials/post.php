<div class="module-container-background">
    <section class="module-container">
        <header class="profile-header">
            <div class="profile-info">
                <a href="#" class="image-container commenter-avatar"><img
                        src="/assets/profileimgs/<?= $post->user_name[0] ?>.jpeg" 
                        alt="profile image for <?= $post->user_name?>" width="100" height="100"></a>
                <div class="list-container">
                    <ul class="remove-liststyle evenly-spaced-list">
                        <li class="username"><?= $post->user_name ?></li>
                        <li class="profile-name">
                            <h4>@<?= $post->user_name ?></h4>
                        </li>
                    </ul>
                </div>
                <h2><?php echo $post->post_id ?> </h2>
                <div class="header-aside">
                    <small class="post-date">GIVE DATE</small>
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
                    <a href="#"><i class="reaction-icons fa fa-thumbs-up" aria-hidden="true"></i> 356</a>
                </div>
                <div class="post-option">
                    <a href="#"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        <hr>

        <section class="comment-felid">

            <div class="comment-heading">
                <h3><i class="fa fa-comments unclickable-icons" aria-hidden="true"></i> Comments</h3>
            </div>

            <!-- TODO fix this -->
<?php
foreach($post->comments as $comment) {
    echo view("/partials/comment", ["comment" => $comment]);
}
?>
<?php 
    echo view("/partials/commentForm", ["post" => $post]);
?>

        </section>
    </section>
</div>
