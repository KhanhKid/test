<?php
class Model_SearchOptionType extends \Orm\Model{
    protected static $_primary_key=array("id");
    protected static $_table_name="search_option_type";

    public static function getAllTypes()
    {
    	$listTypes = \Model_SearchOptionType::find('all');
    	$arrResult = array();
    	foreach ($listTypes as $key => $value) {
    		$arrResult[$value->id] = $value->type;
    	}
    	return $arrResult;
    }
}
?>