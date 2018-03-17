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
    
}
?>