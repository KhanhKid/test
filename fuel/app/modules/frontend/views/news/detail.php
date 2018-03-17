<link href="/public/assets/frontend/news/css/clean-blog.min.css" rel="stylesheet">
<!-- Page Header -->
<header class="masthead" style="background-image: url('/public/assets/frontend/news/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
            <h1><?=$infoArticle['title']?></h1>
            <!-- <h2 class="subheading">Problems look mighty small from 150 miles up</h2> -->
            <span class="meta">Posted by
            <a href="#">Start Bootstrap</a>
            on <?=date("M d,Y",strtotime($infoArticle['reg_datetime']))?></span>
        </div>
        </div>
    </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <?= html_entity_decode($infoArticle['content'])?>
        </div>
    </div>
    </div>
</article>

<hr>