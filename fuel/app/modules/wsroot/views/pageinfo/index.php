<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Icons</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thông tin website</h1>
    </div>
</div><!--/.row-->
<div class="row list-product">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="POST" action="#"  enctype="multipart/form-data">
                    <table id="listbrand" class="table table-hover"  cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Item</th>
                                <th>Value</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Logo (400x92)</td>
                                <td>
                                    <img src="<?=$logo->value?>"><br>
                                    <input type="file" name="logo">
                                </td>
                            <tr>
                            <tr>
                                <td>Backgroud Logo (980x96)</td>
                                <td>
                                    <img src="<?=$backgroundlogo->value?>"><br>
                                    <input type="file" name="backgroundlogo">
                                </td>
                            <tr>
                            <?php 
                                foreach ($infoPage as $key => $value) {
                                    if(!in_array($key,array('logo','backgroundlogo'))){
                                ?>
                                        <tr>
                                        <td><?=$key?></td>
                                        <td><textarea name="<?=$key?>" rows="4" cols="100"><?=$value?></textarea></td>
                                        </tr>
                                <?php
                                    }
                                }
                            ?>
                            
                        </tbody>
                    </table>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!--/.row-->  
 
