<?php
namespace Wsroot;
use \View;
use \Input;
use \Session;
use \Response;
use \Model_InfoPage;

class Controller_pageinfo extends Controller_Admin{

    public $template = 'template';
    public function action_index()
    {
        $data = array();
        $infoPage = Model_InfoPage::getInfoPage();
        if (\Input::method() == 'POST'){
            foreach ($_FILES as $key => $value) {
                $sourcePath = $value['tmp_name'];
                if(is_uploaded_file($value['tmp_name']) && $sourcePath!="") {
                    if ($key == "logo"){
                        $targetPath = "assets/frontend/image/data/logo.png";
                        move_uploaded_file($sourcePath,DOCROOT.$targetPath);
                        $item = Model_InfoPage::find("logo");
                        $item->value = "/".$targetPath."?v=".date("Ymdhis");
                        $item->save();
                    }else{
                        $targetPath = "assets/frontend/image/data/backgroundlogo.png";
                        move_uploaded_file($sourcePath,DOCROOT.$targetPath);
                        $item = Model_InfoPage::find("backgroundlogo");
                        $item->value = "/".$targetPath."?v=".date("Ymdhis");
                        $item->save();
                    }
                }
            }
            foreach ($infoPage as $key => $value) {
                if(!in_array($key,array('logo','backgroundlogo'))){
                    $item = Model_InfoPage::find($key);
                    $item->value = Input::post($key);
                    $item->save();
                }
            }
        }
        $data['infoPage'] = Model_InfoPage::getInfoPage();
        $data['logo'] = Model_InfoPage::find("logo");
        $data['backgroundlogo'] = Model_InfoPage::find("backgroundlogo");
        $this->template->title = "Danh sách Thương hiệu";
        $this->template->content = View::forge('pageinfo/index',$data);
    }
}
?>
