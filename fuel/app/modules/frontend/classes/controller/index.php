<?php
namespace Frontend;
use \View;
use \Response;
use \Request;
use \Auth;
use \Input;
use \Session;
use \Asset;
use \Model_Product;

class Controller_Index extends Controller_Base{
    public $template = 'template';

    public function before(){
    	parent::before();
    }
    public function action_index() {    
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('index/index',$data);
    } 
    public function action_sitemap()
    {
        header('Content-type: application/xml');
        echo '<?xml version="1.0" encoding="UTF-8"?>
        <urlset
            xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
            xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
            xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
                    http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
        <!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->
        <url>
        <loc>http://moitruongthanhlap.com.vn/</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>1.00</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/gioi-thieu</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/van-chuyen-thu-gom</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/thieu-huy-hang-hoa</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/thu-mua-phe-lieu</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/tu-van-moi-truong</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/giay-phep</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/giay-phep?c=1</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/giay-phep?c=2</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/giay-phep?c=4</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/giay-phep?c=5</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/ho-so-nang-luc</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/ho-so-nang-luc?c=6</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/ho-so-nang-luc?c=7</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/van-ban-phap-quy</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/van-ban-phap-quy?c=8</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/van-ban-phap-quy?c=9</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/van-ban-phap-quy?c=10</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/van-ban-phap-quy?c=11</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/tin-moi-truong</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url>
        <url>
        <loc>http://moitruongthanhlap.com.vn/giay-phep?c=3</loc>
        <lastmod>2018-03-19T10:11:59+00:00</lastmod>
        <priority>0.80</priority>
        </url></urlset>';
        die();
    }
    public function action_robot() 
    {
        header('Content-type: text/plain');
        echo "User-agent: SpamBot
Disallow: /
User-agent: *
Disallow: /";die();
    }
}
?>