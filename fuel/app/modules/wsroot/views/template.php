<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Thành Lập - Dashboard</title>

<link href="/public/assets/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="/public/assets/admin/css/datepicker3.css" rel="stylesheet">
<link href="/public/assets/admin/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="/public/assets/admin/js/jquery-1.11.1.min.js"></script>
<script src="/public/assets/admin/js/lumino.glyphs.js"></script>

<script src="/public/assets/admin/js/bootstrap.min.js"></script>
<script src="/public/assets/admin/js/bootstrap-datepicker.js"></script>

<!--[if lt IE 9]>
<script src="/public/assets/admin/js/html5shiv.js"></script>
<script src="/public/assets/admin/js/respond.min.js"></script>
<![endif]-->

</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span>Thành Lập</span> Admin</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                            <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
                            <li><a href="/wsroot/index/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
        
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <!-- <li><a href="/wsroot/product/"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Bài viết mới</a></li> -->
            <li><a href="/wsroot/product/giayphep"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Giấy Phép</a></li>
            <li><a href="/wsroot/product/hosodoanhnghiep"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Hồ Sơ Doanh Nghiệp</a></li>
            <li><a href="/wsroot/product/vanbanphapquy/"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Văn Bản Pháp Quy</a></li>
            <li><a href="/wsroot/product/tinmoitruong"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Tin Môi Trường</a></li>
            <li><a href="/wsroot/cate/"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Loại bài post</a></li>
            <li role="presentation" class="divider"></li>
        </ul>
        <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <?php echo $content; ?>
    </div>  <!--/.main-->

    <script>

        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
        function GoBackWithRefresh(event) {
            if ('referrer' in document) {
                window.location = document.referrer;
                /* OR */
                //location.replace(document.referrer);
            } else {
                window.history.back();
            }
        }
    </script>   
</body>

</html>
