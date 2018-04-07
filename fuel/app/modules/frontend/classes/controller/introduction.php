<?php
namespace Frontend;
use \View;
use \Response;
use \Request;
use \Auth;
use \Input;
use \Session;
use \Asset;
use \Model_Article;

class Controller_Introduction extends Controller_Base{
    public $template = 'template';

    public function before(){        
        parent::before();
    }
    public function action_gioithieu() {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/gioithieu',$data);
    } 
    public function action_vanchuyenthugom() {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/vanchuyenthugom',$data);
    } 
    public function action_thumuaphelieu() {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/thumuaphelieu',$data);
    } 
    public function action_thieuhuyhanghoa() {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/thieuhuyhanghoa',$data);
    } 
    public function action_tuvanmoitruong() {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/tuvanmoitruong',$data);
    } 

    // NEWS

    public function action_giayphep() {
        $data = array();
        $brandId = 1;
        $cateId = (isset($_GET["c"]))?(int)$_GET["c"]:null;
        $infoPost = Model_Article::getInfobyCateId($cateId);
        $data['infoPost'] = $infoPost;
        $data['cateId'] = $cateId;
        $this->template->title = $data["title"] = "GIẤY PHÉP";
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/giayphep',$data);
    } 

    public function action_congtykhachhang() {
        $data = array();
        $infoPost = Model_Article::getInfobyCateId(6);
        $data['infoPost'] = $infoPost;
        $this->template->content = View::forge('introduction/congtykhachhang',$data);
    } 
    public function action_thietbicongnghe() {
        $data = array();
        $infoPost = Model_Article::getInfobyCateId(7);
        $data['infoPost'] = $infoPost;
        $this->template->content = View::forge('introduction/thietbicongnghe',$data);
    } 
    public function action_hosonangluc() {
        $data = array();
        $brandId = 2;
        $cateId = (isset($_GET["c"]))?(int)$_GET["c"]:null;
        $listPost = Model_Article::getListCateDetail($brandId, $cateId);

        $this->template->title = $data["title"] = "HỒ SƠ NĂNG LỰC";
        $data['listPost'] = $listPost;
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/list',$data);
    } 
    public function action_vanbanphapquy() {
        $data = array();
        $brandId = 3;
        $cateId = (isset($_GET["c"]))?(int)$_GET["c"]:null;
        $listPost = Model_Article::getListCateDetail($brandId, $cateId);

        $this->template->title = $data["title"] = "VĂN BẢNG PHÁP QUY";
        $data['listPost'] = $listPost;
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/list',$data);
    }
    public function action_tinmoitruong() {
        $data = array();
        $brandId = 4;
        $cateId = (isset($_GET["c"]))?(int)$_GET["c"]:null;
        $listPost = Model_Article::getListCateDetail($brandId, $cateId);

        $this->template->title = $data["title"] = "Tin môi trường";
        $data['listPost'] = $listPost;
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/list',$data);
    } 
    public function action_detail($id) {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/detail',$data);
    } 
}
?>