<?php
namespace Wsroot;
use \View;
use \Input;
use \Session;
use \Response;
use \Model_Product;
use \Model_Brand;
use \Model_Cate;

class Controller_Cate extends Controller_Admin{

    public $template = 'template';

    public function action_themmoi()
    {
        $data = array();
        if (\Input::method() == 'POST' && \Security::check_token())
        {
            $data = array(
                    'value' => Input::post('name'),
                    'brand_id' => (int)Input::post('brand_id'),
                    'status' => isset($_POST['status'])?1:0,
                );
            $cate = Model_Cate::forge()->set($data);
            $cate->save();
            $data['message'] = "Tạo mới thành công";   
        }
        $data['convertBrand'] = Model_Brand::getListBrand();
        $this->template->title = $data['title'] = "Thêm mới loại bài viết";
        $this->template->content = View::forge('cate/themmoi',$data);
    }
    public function action_del($cateID)
    {
        $cate = Model_Cate::find($cateID);
        if (\Input::method() == 'POST')
        {
            $cate->delete();
            Response::redirect('/wsroot/cate/');
        }
        $data['cate'] = $cate;
        $this->template->title = $data['title'] = "Xóa dòng";
        $this->template->content = View::forge('cate/del',$data);
    }
    public function action_status($cateID)
    {
        $item = Model_Cate::find($cateID);
        $item->status = ($item->status == 1)?0:1;
        $item->save();
        Response::redirect('/wsroot/cate/');        
    }
    public function action_chinhsua($cateID)
    {
        $cate = Model_Cate::find($cateID);
        if(!$cate) die("400");
        if (\Input::method() == 'POST' && \Security::check_token())
        {
            $cate->value = Input::post('name');
            $cate->status = isset($_POST['status'])?1:0;
            $cate->brand_id = (int) Input::post('brand_id');
            $cate->save();
            $data['message'] = "Sửa sản phẩm thành công";   
        }

        $data['cate'] = $cate;
        $data['convertBrand'] = Model_Brand::getListBrand();
        $this->template->title = $data['title'] = "Chỉnh sửa dòng";
        $this->template->content = View::forge('cate/themmoi',$data);
    }
    public function action_index()
    {
        $data = array();
        $data['listCate'] = Model_Cate::find('all');

        $data['listBrand'] = Model_Brand::find('all');
        $data['convertBrand'] = Model_Brand::getListBrand();
        $this->template->title = "Danh sách dòng";
        $this->template->content = View::forge('cate/index',$data);
    }
}
?>
