<?php
namespace Wsroot;
use \View;
use \Input;
use \Session;
use \Response;
use \Model_Article;
use \Model_Brand;
use \Model_Cate;

class Controller_Product extends Controller_Admin{

    public $template = 'template';

    public function action_themmoi($brandId)
    {
        $data = array();
        if (\Input::method() == 'POST')
        {
            $linkbanner ="";
            $linkpdf ="";
            if(is_array($_FILES)) {             
                foreach ($_FILES as $key => $value) {
                    if(is_uploaded_file($value['tmp_name'])) {
                        $sourcePath = $value['tmp_name'];
                        $targetPath = APPPATH_USERFILE.str_replace(".",date("Ymdhis").".",$value['name']);
                        $linkpdf = str_replace(".",date("Ymdhis").".",$value['name']);
                        move_uploaded_file($sourcePath,$targetPath);
                    }
                }
                
            }
            
            $data = array(
                    'title' => Input::post('title'),
                    'status' => isset($_POST['status'])?1:0,
                    'short_desc' => Input::post('short_desc'),
                    'content' => Input::post('content'),
                    'cate_id' => Input::post('cate_id'),
                    'brand_id' => $brandId,
                    'pdf' => $linkpdf,
                    'reg_datetime' => date("Y-m-d H:i:s"),
                );
            $product = Model_Article::forge()->set($data);
            $product->save();

            $data['message'] = "Đăng thành công";   
        }
        $data['cate'] = \Model_Cate::getListItem($brandId);
        $data['brandId'] =$brandId;
        $this->template->title = $data['title'] = "Thêm mới bài viết";
        $this->template->content = View::forge('product/themmoi',$data);
    }

    public function action_chinhsua($proID)
    {
        $product = Model_Article::getDetailbyID($proID);
        if(!$product) die("400");
        if (\Input::method() == 'POST')
        {
            $linkbanner ="";
            $linkpdf ="";
            $product->title = Input::post('title');
            $product->status = isset($_POST['status'])?1:0;
            $product->short_desc = Input::post('short_desc');
            $product->content = Input::post('content');
            if(!is_null(Input::post('cate_id'))) {
                $product->cate_id = Input::post('cate_id');
            }

            $linkpdf ="";
            if(is_array($_FILES)) {             
                foreach ($_FILES as $key => $value) {
                    if(is_uploaded_file($value['tmp_name'])) {
                        $sourcePath = $value['tmp_name'];
                        $targetPath = APPPATH_USERFILE.str_replace(".",date("Ymdhis").".",$value['name']);
                        $linkpdf = str_replace(".",date("Ymdhis").".",$value['name']);
                        move_uploaded_file($sourcePath,$targetPath);
                    }
                }
                
            }
            if($linkpdf != "") $product->pdf = $linkpdf;
            
            $product->save();
            $data['message'] = "Sửa sản phẩm thành công";   
        }
        $data['brandId'] = $product->brand_id;
        $data['product'] = $product;
        $data['cate'] = \Model_Cate::getListItem($product->brand_id);
        $this->template->title = $data['title'] = "Chỉnh sửa bài viết";
        $this->template->content = View::forge('product/themmoi',$data);
    }
    public function action_index()
    {
        $data = array();
        $brandId = (isset($_GET["b"]))?(int)$_GET["b"]:null;
        if ($brandId == null ) Response::redirect('/wsroot/product/?b=1');
        $data['listProduct'] = Model_Article::getAllItem($brandId);
        $data['listCate'] = Model_Cate::getListCate();
        $brandList = Model_Brand::getListBrand();
        $this->template->title = $data['title']= "Danh Sách ".$brandList[$brandId];
        $this->template->content = View::forge('product/index',$data);
    }
    public function action_hosodoanhnghiep()
    {
        $data = array();
        $brandId = 2;
        $data['listProduct'] = Model_Article::getAllItem($brandId);
        $data['listCate'] = Model_Cate::getListCate();
        $brandList = Model_Brand::getListBrand();
        $this->template->title = $data['title']= "Danh Sách ".$brandList[$brandId];
        $this->template->content = View::forge('product/giayphep',$data);
    }
    public function action_giayphep()
    {
        $data = array();
        $brandId = 1;
        $data['listProduct'] = Model_Article::getAllItem($brandId);
        $data['listCate'] = Model_Cate::getListCate();
        $brandList = Model_Brand::getListBrand();
        $this->template->title = $data['title']= "Danh Sách ".$brandList[$brandId];
        $this->template->content = View::forge('product/giayphep',$data);
    }
    public function action_tinmoitruong()
    {
        $data = array();
        $brandId = 4;
        $data['listProduct'] = Model_Article::getAllItem($brandId);
        $data['listCate'] = Model_Cate::getListCate();
        $data['brandId'] = $brandId;
        $brandList = Model_Brand::getListBrand();
        $this->template->title = $data['title']= "Danh Sách ".$brandList[$brandId];
        $this->template->content = View::forge('product/index',$data);
    }
    public function action_vanbanphapquy()
    {
        $data = array();
        $brandId = 3;
        $data['listProduct'] = Model_Article::getAllItem($brandId);
        $data['listCate'] = Model_Cate::getListCate();
        $brandList = Model_Brand::getListBrand();
        $this->template->title = $data['title']= "Danh Sách ".$brandList[$brandId];
        $this->template->content = View::forge('product/vanbanphapquy',$data);
    }
    public function action_del($proID)
    {
        $data['listCate'] = Model_Cate::getListCate();
        $product = Model_Article::find($proID);
        if (\Input::method() == 'POST')
        {
            $product->delete();
            Response::redirect('/wsroot/product/');
        }
        $data['product'] = $product;
        $this->template->title = $data['title'] = "Xóa sản phẩm";
        $this->template->content = View::forge('product/del',$data);
    }
    public function action_status($proID)
    {
        $product = Model_Article::find($proID);
        $product->status = ($product->status == 1)?0:1;
        $product->save();
        Response::redirect('/wsroot/product/');        
    }
}
?>
