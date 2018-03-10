<?php
namespace Frontend;
use \View;
use \Response;
use \Request;
use \Auth;
use \Input;
use \Session;
use \Model_Product;

class Controller_Index extends Controller_Base{
    public $template = 'template';

    public function before(){
    	parent::before();
    }
    public function action_index(){
        $data = array();
        $listProduct = Model_Product::getAllItem(0,0,1);
        $data['listProduct'] = $listProduct;
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('index/index',$data);
    } 
    public function action_laptop($seo){
        $arrTemp = explode("-",$seo);
        $data = array();
        $listProduct = Model_Product::getAllItem((int)$arrTemp[0],0,1);
        $data['listProduct'] = $listProduct;
        $data['brandID'] = (int)$arrTemp[0];
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('index/index',$data);
    } 
    public function action_search(){
        $data = array();
        $arrSearch = Input::get();
        $listProduct = Model_Product::searchProduct($arrSearch);
        $arrSearch = \Model_SearchOption::getAllSearchOption();
        $arrSearchTypes = \Model_SearchOptionType::getAllTypes();
        $data['arrSearch'] = $arrSearch;
        $data['listProduct'] = $listProduct;
        $data['arrSearchTypes'] = $arrSearchTypes;
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('index/search',$data);
    } 
    public function action_cateajax(){
        header('Content-Type: application/json');

        $brandID = (int) Input::post("brandID");
        $cateID = Input::post("cateID");
        $listProduct = Model_Product::getAllItem($brandID,$cateID,1);
        $result = array();
        foreach ($listProduct as $key => $value) {
            $temp = $value->to_array();
            $temp['price'] = number_format( $temp['price'] );
            $result[]=$temp;

        }
        return json_encode($result);
    } 
    public function action_error(){
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('index/error');
    }
    
    public function action_404(){
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('_404_');
    }
    public function action_detail($nameProduct){
        $arr = explode("-",$nameProduct);
        $product = Model_Product::find($arr[0]);
        $data['product'] = $product;
        $this->template->meta = $this->metaTag();
        $this->template->content = View::forge('index/detail',$data);
    }
}
?>