<script type="text/javascript" src="/public/assets/datatable/jquery.dataTables.min.js"></script>
<link href="/public/assets/datatable/jquery.dataTables.min.css" rel="stylesheet">
<div class="row">
    <ol class="breadcrumb">
        <li><a href="/wsroot/"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Danh sách</li>
    </ol>
</div><!--/.row-->

<div class="row"></div><!--/.row-->

<div class="row list-product">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Nhóm bài viết</div>
            <div class="panel-body">
                <a href="/wsroot/cate/themmoi" class="btn btn-primary">+ Thêm mới</a>
                <hr>
                <table id="listbrand" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tên</th>
                            <th>Menu</th>
                            <th>Hiển thị</th>
                            <th>Công cụ</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tên</th>
                            <th>Menu</th>
                            <th>Hiển thị</th>
                            <th>Công cụ</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php 
                            
                            // echo '<pre>',var_dump($convertBrand),'</pre>';die();
                            foreach ($listCate as $key => $value) {
                                $imgStatus = '/public/assets/img/wsroot/checked.png';
                                if($value['status'] == 0){
                                    $imgStatus = '/public/assets/img/wsroot/cancel.png';
                                }
                            ?>
                            <tr>
                            <td><?=$value['id']?></td>
                            <td><?=$value['value']?></td>
                            <td><?=$convertBrand[$value['brand_id']]?></td>
                            <td><a href="/wsroot/cate/status/<?=$value['id']?>"><img width="24" src="<?=$imgStatus?>"></a></td>
                            <td>
                                <a href="/wsroot/cate/del/<?=$value['id']?>"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"/></svg></a>
                                |
                                <a href="/wsroot/cate/<?=$value['id']?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg></a>
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

<div class="row list-product">
    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">List menu</div>
            <div class="panel-body">
                <table id="listcate" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php 
                            foreach ($listBrand as $key => $value) {
                                $imgStatus = '/public/assets/img/wsroot/checked.png';
                                if($value['status'] == 0){
                                    $imgStatus = '/public/assets/img/wsroot/cancel.png';
                                }
                            ?>
                            <tr>
                            <td><?=$value['id']?></td>
                            <td><?=$value['value']?></td>
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
        $('#listbrand').DataTable({
            "pageLength": 50,
            "columns": [
                { "width": "5%" },
                null,
                null,
                null,
                null
              ]
        });
        $('#listcate').DataTable({
            "columns": [
                { "width": "5%" },
                null,
                null,
                null,
                null
              ]
        });
    } );
</script>
