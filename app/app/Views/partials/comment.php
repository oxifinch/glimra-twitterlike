<section class="comment-module-container">
        <header class="profile-header">
            <div class="profile-info">
                <a href="#" class="image-container commenter-avatar"><img
                        src="/assets/profileimgs/<?= $comment->user_name[0] ?>.jpeg"
                        alt="profile image for <?= $comment->user_name?>" width="100" height="100"></a>
                <div class="list-container">
                    <ul class="remove-liststyle evenly-spaced-list">
                        <li class="username"><?= $comment->user_name ?></li>
                        <li class="profile-name">
                            <h4>@<?= $comment->user_name ?></h4>
                        </li>
                    </ul>
                </div>
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
                <p><?= $comment->text_content ?></p>
            </div>

        </div>
        <div class="reaction-container container-fluid">
            <div class="row">
                <div class="reaction-list">
                <a href="#"><i class="reaction-icons fa fa-thumbs-up" aria-hidden="true"></i> <?php echo $comment->likes ?></a>
                </div>
                <div class="post-option">
                    <a href="#"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
