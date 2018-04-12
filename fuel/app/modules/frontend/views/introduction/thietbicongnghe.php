
<link href="/public/assets/frontend/news/css/clean-blog.min.css" rel="stylesheet">
<!-- Main Content -->
<div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-10 mx-auto">
        <h1 class="color_green" style="text-align: center;">THIẾT BỊ - CÔNG NGHỆ</h1>
        <hr>
        <ul>
            <li><label class="btn_up"> Hệ thống lò đốt 
                <img src="/public/assets/frontend/img/down.png" width="20px"/></label>
                <div class="content" style="display:none">
                    <p><img src="/public/assets/frontend/img/thietbidungcu/1.png" width="100%"/></p>
                    <p>+ Quy trình xử lý:</p>
                    <p><img src="/public/assets/frontend/img/thietbidungcu/2.png" width="100%"/></p>
                </div>    
            </li>
            <li><label class="btn_up">Hệ thống xử lý nước thải 
                <img src="/public/assets/frontend/img/down.png" width="20px"/></label>
                <div class="content" style="display:none">
                    <p>+ Quy trình xử lý:</p>
                    <p><img src="/public/assets/frontend/img/thietbidungcu/3.png" width="100%"/></p>
                </div>    
            </li>
            <li><label class="btn_up"> Hệ thống tái chế dầu nhớt thải
                <img src="/public/assets/frontend/img/down.png" width="20px"/></label>
                <div class="content" style="display:none">
                    <p>+ Quy trình xử lý:</p>
                    <p><img src="/public/assets/frontend/img/thietbidungcu/4.png" width="100%"/></p>
                </div>    
            </li>
            <li><label class="btn_up"> Hệ thống xử lý bóng đèn
                <img src="/public/assets/frontend/img/down.png" width="20px"/></label>
                <div class="content" style="display:none">
                    <p>+ Quy trình xử lý:</p>
                    <p><img src="/public/assets/frontend/img/thietbidungcu/5.png" width="100%"/></p>
                </div>    
            </li>
            <li><label class="btn_up"> Hệ thống ổn định hóa rắn
                <img src="/public/assets/frontend/img/down.png" width="20px"/></label>
                <div class="content" style="display:none">
                    <p>+ Quy trình xử lý:</p>
                    <p><img src="/public/assets/frontend/img/thietbidungcu/6.png" width="100%"/></p>
                </div>    
            </li>
            <li><label class="btn_up"> Hệ thống súc rửa thùng phuy, bao bì   
                <img src="/public/assets/frontend/img/down.png" width="20px"/></label>
                <div class="content" style="display:none">
                    <p>+ Quy trình xử lý:</p>
                    <p><img src="/public/assets/frontend/img/thietbidungcu/7.png" width="100%"/></p>
                </div>    
            </li>
            <li><label class="btn_up"> Hệ thống tháo dỡ ắc quy và thu hồi phế liệu 
                <img src="/public/assets/frontend/img/down.png" width="20px"/></label>
                <div class="content" style="display:none">
                    <p>+ Quy trình xử lý:</p>
                    <p><img src="/public/assets/frontend/img/thietbidungcu/8.png" width="100%"/></p>
                </div>    
            </li>
            <li><label class="btn_up"> Hệ thống xử lý linh kiện điện tử  
                <img src="/public/assets/frontend/img/down.png" width="20px"/></label>
                <div class="content" style="display:none">
                    <p>+ Quy trình xử lý:</p>
                    <p><img src="/public/assets/frontend/img/thietbidungcu/9.png" width="100%"/></p>
                </div>    
            </li>
            <li><label class="btn_up"> Hệ thống tái chế dung môi thải
                <img src="/public/assets/frontend/img/down.png" width="20px"/></label>
                <div class="content" style="display:none">
                    <p><img src="/public/assets/frontend/img/thietbidungcu/10.png" width="100%"/></p>
                </div>    
            </li>
            <li><label class="btn_up"> Hệ thống tẩy rửa chất thải nhiễm dầu mỡ   
                <img src="/public/assets/frontend/img/down.png" width="20px"/></label>
                <div class="content" style="display:none">
                    <p>+ Quy trình xử lý:</p>
                    <p><img src="/public/assets/frontend/img/thietbidungcu/11.png" width="100%"/></p>
                </div>    
            </li>

        </ul> 
    </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(document).on('click','.btn_up', function (e) { 
            $(this).next(".content").fadeIn("fast");
            $(this).find("img").attr("src","/public/assets/frontend/img/up.png");         
            $(this).attr("class","btn_down");         
        });
        $(document).on('click','.btn_down', function () {
            $(this).next(".content").fadeOut("fast");
            $(this).find("img").attr("src","/public/assets/frontend/img/down.png");         
            $(this).attr("class","btn_up");   
        });
    });
</script>