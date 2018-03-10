<script type="text/javascript" src="/assets/datatable/jquery.dataTables.min.js"></script>
<link href="/assets/datatable/jquery.dataTables.min.css" rel="stylesheet">
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Banner</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Banner</h1>
    </div>
</div><!--/.row-->
        

<div class="row list-product">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm Banner Mới (940px * 250px)</div>

            <div class="panel-body">
                <form action="" method="POST"  enctype="multipart/form-data">
                    <?php echo \Form::csrf();?>
                    <input type="file" name="banner" ><br>
                    <button type="submit"  class="btn btn-primary">Thêm mới </button>
                </form>
                <hr>
                <table id="listbrand" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Tool</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Tool</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php 

                            foreach ($listBanner as $key => $value) {
                                $imgStatus = '/assets/img/wsroot/checked.png';
                                if($value['status'] == 0){
                                    $imgStatus = '/assets/img/wsroot/cancel.png';
                                }
                            ?>
                            <tr>
                            <td><?=$value['id']?></td>
                            <td><img width="500px" src="<?=$value['image']?>"></td>
                            <td> <a href="/wsroot/banner/status/<?=$value['id']?>"><img width="24" src="<?=$imgStatus?>"></a></td>
                            <td>
                                <a href="/wsroot/banner/del/<?=$value['id']?>"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"/></svg></a></td>
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
            "columns": [
                { "width": "5%" },
                null,
                null,
              ]
        });
    } );
</script>
