<div class="module-container-background">
            <section class="module-container">
                <header class="profile-header">
                    <div class="profile-info">
                        <a href="#" class="image-container commenter-avatar"><img src="/assets/sadman.jpeg" alt=""
                                width="100" height="100"></a>
                        <div class="list-container">
                            <ul class="remove-liststyle evenly-spaced-list">
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