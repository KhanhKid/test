<div id="content-home">
    <?php require 'lazy/menu.phtml' ?>
    <h1>Tìm kiếm sản phẩm</h1>
    <form action="#" method="GET">
        <p>Tên sản phẩm: <input type="text"  class="inputBox" name="name" value="<?= isset($_GET['name'])?$_GET['name']:'' ?>"></p>
        <p>
            Thương hiệu: 
            <select name="thuonghieu">
                <option value="0">Vui lòng chọn giá trị</option>
                <?php
                    $selected = ""; 
                    foreach ($listBrand as $key => $value) {
                      $selected = (isset($_GET['thuonghieu']) && $_GET['thuonghieu'] == $value['id'])?"selected":"";
                      echo '<option '.$selected.' value="'.$value['id'].'">'.$value['value'].'</option>';
                    }
                    ?>
            </select>
        </p>
        <p>
            Dòng Máy: 
            <select name="brand">
                <option value="0">Vui lòng chọn giá trị</option>
                <?php
                    $selected = ""; 
                    foreach ($listCate as $key => $value) {
                      $selected = (isset($_GET['brand']) && $_GET['brand'] == $value['id'])?"selected":"";
                      echo '<option '.$selected.' value="'.$value['id'].'">'.$value['value'].'</option>';
                    }
                    ?>
            </select>
        </p>
        <p>
            Dung lượng Ram: 
            <select name="ram">
                <option value="0">Vui lòng chọn giá trị</option>
                <?php
                    $selected = ""; 
                    foreach ($arrSearch[1] as $key => $value) {
                      $selected = (isset($_GET['ram']) && $_GET['ram'] === $value)?"selected":"";
                      echo '<option '.$selected.' value="'.$value.'">'.$value.'</option>';
                    }
                    ?>
            </select>
        </p>
        <p>
            CPU: 
            <select name="cpu">
                <option value="0">Vui lòng chọn giá trị</option>
                <?php
                    $selected = ""; 
                    foreach ($arrSearch[2] as $key => $value) {
                      $selected = (isset($_GET['cpu']) && $_GET['cpu'] === $value)?"selected":"";
                      echo '<option '.$selected.' value="'.$value.'">'.$value.'</option>';
                    }
                    ?>
            </select>
        </p>
        <p>
            SSD: 
            <select name="ssd">
                <option value="0">Vui lòng chọn giá trị</option>
                <?php
                    $selected = ""; 
                    foreach ($arrSearch[3] as $key => $value) {
                      $selected = (isset($_GET['ssd']) && $_GET['ssd'] === $value)?"selected":"";
                      echo '<option '.$selected.' value="'.$value.'">'.$value.'</option>';
                    }
                    ?>
            </select>
            G
        </p>
        <p>
            HDD: 
            <select name="hdd">
                <option value="0">Vui lòng chọn giá trị</option>
                <?php
                    $selected = ""; 
                    foreach ($arrSearch[4] as $key => $value) {
                      $selected = (isset($_GET['hdd']) && $_GET['hdd'] === $value)?"selected":"";
                      echo '<option '.$selected.' value="'.$value.'">'.$value.'</option>';
                    }
                    ?>
            </select>
            G
        </p>
        <p>
            VGA: 
            <select name="vga">
                <option value="0">Vui lòng chọn giá trị</option>
                <?php
                    $selected = ""; 
                    foreach ($arrSearch[5] as $key => $value) {
                      $selected = (isset($_GET['vga']) && $_GET['vga'] === $value)?"selected":"";
                      echo '<option '.$selected.' value="'.$value.'">'.$value.'</option>';
                    }
                    ?>
            </select>
            G
        </p>
        <p>
            Màn Hình: 
            <select name="screen">
                <option value="0">Vui lòng chọn giá trị</option>
                <?php
                    $selected = ""; 
                    foreach ($arrSearch[6] as $key => $value) {
                      $selected = (isset($_GET['screen']) && $_GET['screen'] === $value)?"selected":"";
                      echo '<option '.$selected.' value="'.$value.'">'.$value.'</option>';
                    }
                    ?>
            </select>
            inch
        </p>
        <p>
            Chuẩn Màn Hình: 
            <select name="quality">
                <option value="0">Vui lòng chọn giá trị</option>
                <?php
                    $selected = ""; 
                    foreach ($arrSearch[7] as $key => $value) {
                      $selected = (isset($_GET['quality']) && $_GET['quality'] === $value)?"selected":"";
                      echo '<option '.$selected.' value="'.$value.'">'.$value.'</option>';
                    }
                    ?>
            </select>
        </p>
        <button type="submit">Tìm Kiếm</button>
    </form>
    <h1>Kết quả</h1>
    <div class="box">
        <div class="box-content">
            <div class="box-product" id="listProduct">
                <?php if(count($listProduct) == 0) echo "<strong>Hiện tại chưa có sản phẩm nào</strong>" ?>
                <?php foreach ($listProduct as $key => $value) { 
                    ?>
                <div class="boxover">
                    <div class="image"><a href="<?=$linkHost?>/detail/<?=$value['id']?>-<?=$value['link_seo']?>"><img src="/userfiles/<?=$value['img']?>" alt="<?=$value['name']?>" /></a></div>
                    <div class="name"><a href="<?=$linkHost?>/detail/<?=$value['id']?>-<?=$value['link_seo']?>"><?=$value['name']?></a></div>
                    <div class="price">
                        <?=number_format($value['price'])?> VND &nbsp;
                    </div>
                    <div class="description">
                        <?=$value['shortdetail']?>
                    </div>
                    <!-- them show len -->
                    <div class="boxover_info">
                        <span class="name"><?=$value['name']?></span><br/><br/><br/>
                        <span class="name1">Tính năng nổi bật:</span> <br/><br/>
                        <p>
                            <?=$value['shortdetail']?>
                        </p>
                        <div class="boxover_price">
                            <span class="price"><?=number_format($value['price'])?> VND</span>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>