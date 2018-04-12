<?php $linkHost = "http://".$_SERVER['SERVER_NAME'];?>
<script type="text/javascript" src="/public/assets/ckfinder/ckfinder.js"></script>
<script src="/public/assets/ckeditor/ckeditor.js"></script>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="/wsroot/"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li><a href="/wsroot/product/">Danh sách</a></li>
        <li class="active">Bài viết mới</li>
    </ol>
</div><!--/.row-->
    
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default"><!-- 
            <iframe src="http://docs.google.com/gview?url=https://pdfs.semanticscholar.org/2a01/e1f14172a91215931ed787d97dee1301fe7d.pdf&embedded=true" style="width:718px; height:700px;" frameborder="0"></iframe> -->
            <div class="panel-heading"><?=$title?></div>
            <div class="panel-body">
                <?php if(isset($message)){?>
                <div class="alert bg-success" role="alert">
                    <svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg> <?php echo isset($message)?$message:""?> <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <?php } ?>
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tiêu đề bài viết</label>
                            <input type="text" name="title" id="productName" class="form-control" placeholder="Tiêu đề bài viết" value="<?=isset($product['title'])?$product['title']:''?>">
                        </div>
                        <div class="form-group">
                            <label><input type="checkbox" name="status" <?=(isset($product['status'])&&$product['status']==1)?'checked':''?> value="1"> 
                                Hiển thị
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Loại bài:</label>
                            <select name="cate_id" class="form-control" <?=(isset($product['brand_id']) && in_array($product['brand_id'],array(1,2)))?"disabled":""?>>
                                <?php 
                                $brandID = isset($product['cate_id'])?$product['cate_id']:0;
                                foreach ($cate as $key => $value): 
                                    $selected="";
                                    if($value->id == $brandID) $selected="selected";
                                ?>
                                    <option <?=$selected?> value="<?=$value->id?>"><?=$value->value?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Miêu tả ngắn: (30 ký tự để miêu tả bài viết)</label>
                            <textarea name="short_desc" class="form-control" rows="3"><?=isset($product['short_desc'])?$product['short_desc']:''?></textarea>
                        </div>  
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php if ( $brandId == 3 ) { ?>
                                <label>Link bài viết:</label>
                                <input name="content" class="form-control" value="<?=isset($product['content'])?$product['content']:''?>"/>
                            <?php } else {?>
                                <label>Nội dung bài viết: (nội dung bài viết)</label>
                                <textarea id="content" name="content" class="form-control" rows="3"><?=isset($product['content'])?$product['content']:''?></textarea>
                                <script>
                                    if ( typeof CKEDITOR !== 'undefined' ) {
                                        CKEDITOR.addCss( 'img {max-width:100%; height: auto;}' );
                                        var editor = CKEDITOR.replace( 'content', {
                                            height:350
                                        } );
                                        CKFinder.setupCKEditor( editor, '../' ) ;
                                    } else {
                                        document.getElementById( 'description' ).innerHTML = '<div class="tip-a tip-a-alert">This sample requires working Internet connection to load CKEditor from CDN.</div>'
                                    }
                                </script>
                            <?php }?>
                        </div>  
                        <hr>
                        <!-- Upload tài liệu: <input type="file" name="fileToUpload" id="fileToUpload">
                        <?php if(isset($product['pdf']) && $product['pdf']){ ?>
                            <a href="/public/userfiles/<?php if(isset($product['pdf'])) echo $product['pdf']?>"><span class="glyphicon glyphicon-open-file">Download files</span></a>
                            <iframe src="http://docs.google.com/gview?url=<?=$linkHost?>/userfiles/<?=$product['pdf']?>&embedded=true" style="width:100%; height:300px;" frameborder="0"></iframe>
                        <?php }?> -->
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Lưu bài</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

<script>
    $("#productName").keyup(function() {
        curName = $(this).val();
        console.log(curName);
        removeDau = bodauTiengViet(curName);
        seolink = removeDau.replace(/ /g , "-");
        seolink = seolink.replace(/,/g , "");
        seolink = seolink.replace(/\./g , "-");
        seolink = seolink.replace(/\%/g , "");
        $("#linkseo").val(seolink);
    });
    function bodauTiengViet(str) {
        str = str.toLowerCase();
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
        str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
        str = str.replace(/đ/g, "d");
        return str;
    }
</script>