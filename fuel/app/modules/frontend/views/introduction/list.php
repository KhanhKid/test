
<link href="/public/assets/frontend/news/css/clean-blog.min.css" rel="stylesheet">
<!-- Main Content -->
<div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">

        <?php 
            foreach ($listPost as $key => $value):
                $urlLink = ($value['brand_id'] == 3)?$value['content']:"/news/{$value['id']}/";
            ?>
                <div class="post-preview">
                <a href="<?=$urlLink?>" target="_blank">
                    <h2 class="post-title">
                    <?=$value['title']?>
                    </h2>
                    <h3 class="post-subtitle">
                        <?=$value['short_desc']?>
                    </h3>
                </a>
                <p class="post-meta">Đăng bởi
                    <a href="#">thanhlapadmin</a>
                    vào <?=date("M d,Y",strtotime($value['reg_datetime']))?></p>
                </div>
                <hr>
            <?php
            endforeach;
        ?>
        

        <!-- Pager -->
        <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Tiếp Theo &rarr;</a>
        </div>
    </div>
    </div>
</div>

<hr>