
<link href="/public/assets/frontend/news/css/clean-blog.min.css" rel="stylesheet">
<!-- Main Content -->
<div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">

        <?php 
            // echo '<pre>',var_dump($listPost),'</pre>';die();
            foreach ($listPost as $key => $value):
            ?>
                <div class="post-preview">
                <a href="/news/<?=$value['id']?>/">
                    <h2 class="post-title">
                    <?=$value['title']?>
                    </h2>
                    <h3 class="post-subtitle">
                        <?=$value['short_desc']?>
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">thanhlapadmin</a>
                    on <?=date("M d,Y",strtotime($value['reg_datetime']))?></p>
                </div>
                <hr>
            <?php
            endforeach;
        ?>
        

        <!-- Pager -->
        <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
    </div>
    </div>
</div>

<hr>