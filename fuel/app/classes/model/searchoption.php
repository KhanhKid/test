<?php
class Model_SearchOption extends \Orm\Model{
    protected static $_primary_key=array("id");
    protected static $_table_name="search_option";

    public static function getAllSearchOption()
    {
        $listSearch = Model_SearchOption::find('all',array('order_by' => 'type'));
        $arrResult = array();
        $key = 0;
        foreach ($listSearch as $key => $value) {
            $arrResult[$value['type']][] = $value['value'];
        }
        return $arrResult;
    }
}
?>