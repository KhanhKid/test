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
                <?php if(isset($message)){?>
                <div class="alert bg-success" role="alert">
                    <svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg> <?php echo isset($message)?$message:""?> <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <?php } ?>
                <form role="form" method="post">
                    <?php echo \Form::csrf();?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Loại tìm kiếm: </label>
                            <select name="type">
                                <?php 
                                    foreach ($arrSearchTypes as $key => $value) {
                                        echo '<option value="'.$key.'">'.$value.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Giá trị</label>
                            <input type="text" name="value" id="productName" class="form-control" placeholder="Placeholder" value="<?=isset($searchOpt['value'])?$searchOpt['value']:''?>">
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Hoàn Thành</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->