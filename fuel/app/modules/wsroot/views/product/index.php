<script type="text/javascript" src="/public/assets/datatable/jquery.dataTables.min.js"></script>
<link href="/public/assets/datatable/jquery.dataTables.min.css" rel="stylesheet">
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Bài Viết</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Bài Viết</h1>
    </div>
</div><!--/.row-->
        

<div class="row list-product">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Bài Viết</div>

            <div class="panel-body">
                <a href="/wsroot/product/themmoi" class="btn btn-primary">+ Thêm mới</a>
                <hr>
                <table id="listproduct" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Files</th>
                            <th>Ngày Tạo</th>
                            <th>Tool</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Files</th>
                            <th>Ngày Tạo</th>
                            <th>Tool</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php 
                            foreach ($listProduct as $key => $value) {
                                $imgStatus = '/public/assets/img/wsroot/checked.png';
                                if($value['status'] == 1){
                                    $imgStatus = '/public/assets/img/wsroot/cancel.png';
                                }
                                ?>
                            <tr>
                            <td><?=$value['id']?></td>
                            <td><?=$value['title']?></td>
                            <td>
                                Loại: <?=isset($listBrand[$value['brand_id']])?$listBrand[$value['brand_id']]:"Chưa có thương hiệu";?> <br> 
                            </td>
                            <td>
                                Dòng: <?php 
                                $cate = explode(",",$value['cate_id']);
                                foreach ($cate as $k_cate => $k_cateValue): 
                                    if(isset($listCate[$k_cateValue])){
                                        echo $listCate[$k_cateValue].",";
                                    }
                                endforeach ?>
                            </td>
                            <td>
                                <?php if(isset($value['pdf']) && $value['pdf']){ ?>
                                    <a href="/public/userfiles/<?php if(isset($value['pdf'])) echo $value['pdf']?>"><span class="glyphicon glyphicon-open-file">file</span></a>
                                <?php }?>
                            </td>
                            <td><?=$value['reg_datetime']?></td>
                            <td>
                                <a href="/wsroot/product/status/<?=$value['id']?>"><img width="24" alt="Thay đổi status" src="<?=$imgStatus?>"></a>
                                |
                                <a href="/wsroot/product/del/<?=$value['id']?>"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"/></svg></a>
                                |
                                <a href="/wsroot/product/<?=$value['id']?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg></a>
                            </td>
                            </tr>
                            <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!--/.row-->  
 
<script type="text/javascript">
    $(document).ready(function() {
        $('#listproduct').DataTable({
            "searching": true,
            "columns": [
                { "width": "5%" },
                null,
                null,
                null,
                null,
                null
              ]
        });
    } );
</script>
