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


use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

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

    public function action_contact_form() {
        $mail = new PHPMailer(true);                             // Passing `true` enables exceptions
        // echo '<pre>',var_dump($mail),'</pre>';die();
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'mail.moitruongthanhlap.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'info@moitruongthanhlap.com.vn';                 // SMTP username
            $mail->Password = 'L7.Z~R8Uat.&';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('info@moitruongthanhlap.com.vn', 'Mailer');
            $mail->addAddress('info@moitruongthanhlap.com.vn', 'Joe User');     // Add a recipient
            $mail->addReplyTo('info@moitruongthanhlap.com.vn', 'Information');

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
        die();
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
User-agent: *";die();
    }
}
?>