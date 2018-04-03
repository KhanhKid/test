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
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
        
        require(DOCROOT.'recaptcha/src/autoload.php');
        $recaptcha = new \ReCaptcha\ReCaptcha("6LeoLVAUAAAAAB2NrVkpRmeeRBXKLMw3t8DmDqTw");
        $gRecaptchaResponse = Input::post("g-recaptcha-response");
        $arrResult = array();
        $resp = $recaptcha->verify($gRecaptchaResponse, $_SERVER['REMOTE_ADDR']);
        if (!$resp->isSuccess()) {
            $subject = Input::post("subject");
            $name = Input::post("name");
            $email = Input::post("email");
            $message = Input::post("message");

            $clientMsg = file_get_contents(APPPATH."files/client_template.html");
            $adminMsg = file_get_contents(APPPATH."files/admin_template.html");

            $clientMsg = str_replace("%name%",$name,$clientMsg);
            $adminMsg = sprintf($adminMsg,$name,$email,$subject,$message);
            $results =  self::send_mail( "moitruongthanhlap.mttl@gmail.com","[MoiTruongThanhLap] Co yeu cau moi",$adminMsg);
            $results =  self::send_mail( $email,"[MoiTruongThanhLap] Da nhan duoc yeu cau" ,$clientMsg);
            if($results == true){
                $arrResult = array("data"=>"success");
            } else {
                $arrResult = array("data"=>"error", "error" => "Something wrong 1!");
            }
        } else {
            $arrResult = array("data"=>"error", "error" => "Mã xác nhận sai!");
        }
        echo json_encode($arrResult);die();
    }

    function send_mail($sentTo, $subject, $body, $altBody = "") {
        require_once DOCROOT.'../vendor/phpmailer/phpmailer/src/Exception.php';
        require_once DOCROOT.'../vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require_once DOCROOT.'../vendor/phpmailer/phpmailer/src/SMTP.php';
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'moitruongthanhlap.mttl@gmail.com';                 // SMTP username
            $mail->Password = 'aB123456789';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('thanhlapcom@yahoo.com', 'Moi Truong Thanh Lap');
            $mail->addAddress($sentTo);     // Add a recipient
            $mail->addReplyTo('thanhlapcom@yahoo.com', 'Moi Truong Thanh Lap');

            $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
            );
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = $altBody;
            $mail->send();
            return true;
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
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