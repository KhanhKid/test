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
    public function action_tuvanmoitruong() {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/tuvanmoitruong',$data);
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
    public function action_giayphep() {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/giayphep',$data);
    } 
    public function action_hosonangluc() {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/hosonangluc',$data);
    } 
    public function action_vanbanphapquy() {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/vanbanphapquy',$data);
    }
    public function action_thieuhuyhanghoa() {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/thieuhuyhanghoa',$data);
    } 
    public function action_detail($id) {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('introduction/detail',$data);
    } 
}
?>