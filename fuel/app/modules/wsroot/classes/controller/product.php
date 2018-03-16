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

    public function action_themmoi()
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
                    'content' => Input::post('content'),
                    'brand_id' => Input::post('brand_id'),
                    'cate_id' => Input::post('cate_id'),
                    'pdf' => $linkpdf,
                );
            $product = Model_Article::forge()->set($data);
            $product->save();

            $data['message'] = "Đăng thành công";   
        }
        $data['brand'] = \Model_Brand::getAllItem();
        $data['cate'] = \Model_Cate::getAllItem();
        $this->template->title = $data['title'] = "Thêm mới sản phẩm";
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
            $product->content = Input::post('content');
            $product->brand_id = Input::post('brand_id');
            $product->cate_id = Input::post('cate_id');

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

        $data['product'] = $product;
        $data['brand'] = \Model_Brand::getAllItem();
        $data['cate'] = \Model_Cate::getAllItem();
        $this->template->title = $data['title'] = "Chỉnh sửa sản phẩm";
        $this->template->content = View::forge('product/themmoi',$data);
    }
    public function action_index()
    {
        $data = array();
        $data['listProduct'] = Model_Article::getAllItem();
        $data['listBrand'] = Model_Brand::getListBrand();
        $data['listCate'] = Model_Cate::getListCate();
        $this->template->title = "Danh sách sản phẩm";
        $this->template->content = View::forge('product/index',$data);
    }
    public function action_del($proID)
    {
        
        $data['listBrand'] = Model_Brand::getListBrand();
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
