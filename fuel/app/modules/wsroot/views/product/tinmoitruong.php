<script type="text/javascript" src="/public/assets/datatable/jquery.dataTables.min.js"></script>
<link href="/public/assets/datatable/jquery.dataTables.min.css" rel="stylesheet">
<div class="row">
    <ol class="breadcrumb">
        <li><a href="/wsroot/"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Danh sách    </li>
    </ol>
</div><!--/.row-->

<div class="row list-product">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Danh sách bài viết</div>

            <div class="panel-body">
                <a href="/wsroot/product/themmoi/<?=$brandId?>" class="btn btn-primary">+ Thêm mới</a>
                <hr>
                <table id="listproduct" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Ngày Tạo</th>
                            <th>Tool</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Ngày Tạo</th>
                            <th>Tool</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php 
                            foreach ($listProduct as $key => $value) {
                                $imgStatus = '/public/assets/img/wsroot/checked.png';
                                if($value['status'] == 0){
                                    $imgStatus = '/public/assets/img/wsroot/cancel.png';
                                }
                                ?>
                            <tr>
                            <td><?=$value['id']?></td>
                            <td><?=$value['title']?></td>
                            <td>
                                <?=$listCate[$value['cate_id']]?>
                            </td>
                            <td><?=$value['reg_datetime']?></td>
                            <td>
                                <a href="javascript:void(0)" class="btnstatus" data-id="<?=$value['id']?>"><img width="24" alt="Thay đổi status" src="<?=$imgStatus?>"></a>
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
            "order": [[ 4, "desc" ]],
            "columns": [
                { "width": "5%" },
                null,
                null,
                null,
                null
              ]
        });
        $(document).on("click",".btnstatus", function () {
            id = $(this).attr("data-id");
            obj = $(this);
            $.ajax({
                type: "POST",
                url: "/wsroot/product/status",
                data: {id:id},
                dataType: "json",
                success: function (response) {
                    if(response.success == 1) {
                        if (response.status == 1) {
                            obj.html('<img width="24" alt="Thay đổi status" src="/public/assets/img/wsroot/checked.png">');
                        } else {
                            obj.html('<img width="24" alt="Thay đổi status" src="/public/assets/img/wsroot/cancel.png">');
                        }
                    }
                }
            });
        });
    } );
</script>
