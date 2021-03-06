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

class Controller_News extends Controller_Base{
    public $template = 'template';

    public function before(){        
        parent::before();
    }
    public function action_index() {
        $data = array();
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('news/index',$data);
    } 
    public function action_detail($idNews) {
        $data = array();
        $infoArticle = Model_Article::getDetailbyID($idNews);
        $data['infoArticle'] = $infoArticle;
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('news/detail',$data);
    } 
}
?>