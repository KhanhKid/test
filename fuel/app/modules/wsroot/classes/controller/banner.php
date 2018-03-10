<?php
namespace Wsroot;
use \View;
use \Input;
use \Session;
use \Response;
use \Model_Banner;

class Controller_Banner extends Controller_Admin{

    public $template = 'template';

    public function action_del($bannerID)
    {
        $banner = Model_Banner::find($bannerID);
        if (\Input::method() == 'POST')
        {
            @unlink(DOCROOT.$banner->image);
            $banner->delete();
            Response::redirect('/wsroot/banner/');
        }
        $data['banner'] = $banner;
        $this->template->title = $data['title'] = "Xoá Banner";
        $this->template->content = View::forge('banner/del',$data);
    }
    public function action_status($ID)
    {
        $item = Model_Banner::find($ID);
        $item->status = ($item->status == 1)?0:1;
        $item->save();
        Response::redirect('/wsroot/banner/');        
    }
    public function action_index()
    {
        $data = array();
        if (\Input::method() == 'POST'  && \Security::check_token())
        {
            if(is_array($_FILES)) {             
                foreach ($_FILES as $key => $value) {
                    if(is_uploaded_file($value['tmp_name'])) {
                        $sourcePath = $value['tmp_name'];
                        $targetPath = "banner/".str_replace(".",date("Ymdhis").".",$value['name']);
                        move_uploaded_file($sourcePath,APPPATH_USERFILE.$targetPath);
                        \Image::load(APPPATH_USERFILE.$targetPath)
                            ->config('bgcolor', '#fff')
                            ->resize(940, 250, true, true)->save(APPPATH_USERFILE.$targetPath);     
                    }
                    $banner = Model_Banner::forge(array(
                        'image' => "/userfiles/".$targetPath,
                    ));
                    $banner->save();
                }   

            }
        }
        $data['listBanner'] = Model_Banner::find('all');
        $this->template->title = "Banner trang chủ";
        $this->template->content = View::forge('banner/index',$data);
    }
}
?>
