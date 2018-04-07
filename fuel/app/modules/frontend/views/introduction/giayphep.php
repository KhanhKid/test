
<link href="/public/assets/frontend/news/css/clean-blog.min.css" rel="stylesheet">
<!-- Main Content -->
<div class="container">
    <div class="row">
    <div class="col-lg-10 col-md-10 mx-auto">
        <p>
            <h2 class="color_green"><?=\Model_Cate::getCateName($cateId);?></h2>
        </p>
        <img src="<?=$infoPost['content']?>"/>
    </div>
    </div>
</div>

<hr>