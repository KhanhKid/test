<?php
namespace Wsroot;
use \View;
use \Input;
use \Session;
use \Response;
use \Model_SearchOptionType;
use \Model_SearchOption;

class Controller_Searchoption extends Controller_Admin{

    public $template = 'template';

    public function action_themmoi()
    {
        $data = array();

        if (\Input::method() == 'POST' && \Security::check_token())
        {
            $data = array(
                    'type' => Input::post('type'),
                    'value' => Input::post('value')
                );
            $searchoption = Model_SearchOption::forge()->set($data);
            $searchoption->save();
            $data['message'] = "Tạo mới thành công";   
        }
        $arrSearchTypes = Model_SearchOptionType::getAllTypes();
        $data['arrSearchTypes'] = $arrSearchTypes;
        $this->template->title = $data['title'] = "Thêm điều kiện tìm kiếm";
        $this->template->content = View::forge('searchoption/themmoi',$data);
    }
    public function action_del($optionID)
    {
        $searchOpt = Model_SearchOption::find($optionID);
        if (\Input::method() == 'POST')
        {
            $searchOpt->delete();
            Response::redirect('/wsroot/searchoption/');
        }
        $arrSearchTypes = \Model_SearchOptionType::getAllTypes();
        $data['arrSearchTypes'] = $arrSearchTypes;
        $data['brand'] = $searchOpt;
        $this->template->title = $data['title'] = "Xóa điều kiện tìm kiếm";
        $this->template->content = View::forge('searchoption/del',$data);
    }
    public function action_index()
    {
        $data = array();
        $arrSearch = \Model_SearchOption::find('all',array('order_by' => 'type'));
        $arrSearchTypes = \Model_SearchOptionType::getAllTypes();
        $data['arrSearch'] = $arrSearch;
        $data['arrSearchTypes'] = $arrSearchTypes;
        $this->template->content = View::forge('searchoption/index',$data);
    }
}
?>
