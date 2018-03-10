<?php
class Model_InfoPage extends \Orm\Model{
    protected static $_primary_key=array("item");
    protected static $_table_name="info_page";

    public static function getInfoPage($type = 0)
    {
        $info = Model_InfoPage::find('all');
        $arrResult = array();
        foreach ($info as $key => $value) {
            $arrResult[$value['item']] = $value['value'];
        }
        return $arrResult;
    }
}
?>