<?php $linkHost = "http://".$_SERVER['SERVER_NAME'];?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Icons</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?=$title?></h1>
    </div>
</div><!--/.row-->
    
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?=$title?></div>
            <div class="panel-body">
                <form role="form" action="#" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group">
                            ID: <label><?=$product['id']?></label>
                        </div>
                        <div class="form-group">
                            Tên Sản Phẩm: <label><?=$product['title']?></label>
                        </div>
                        <div class="form-group">
                            Loại: <?=isset($listBrand[$product['brand_id']])?$listBrand[$product['brand_id']]:"Chưa có thương hiệu";?> <br> 
                            Dòng: <?php 
                            $cate = explode(",",$product['cate_id']);
                            foreach ($cate as $k_cate => $k_cateValue): 
                                if(isset($listCate[$k_cateValue])){
                                    echo $listCate[$k_cateValue].",";
                                }
                            endforeach ?>
                        </div>
                        <div class="form-group">
                            Mô tả ngắn: 
                        </div>
                        <div class="form-group">
                            <?=html_entity_decode($product['content'])?>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Xóa</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->