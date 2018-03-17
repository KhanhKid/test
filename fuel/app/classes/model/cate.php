<?php
class Model_Cate extends \Orm\Model{
    protected static $_primary_key=array("id");
    protected static $_table_name="category";
    
    public static function getAllItem()
    {
    	return Model_Cate::query()->order_by('id', 'desc')->get();
    }
	public static function getListCate()
    {
		$allCate = Model_Cate::find('all', array(
            'where' => array(
                array('status', 1),
            ),
        ));
    	$results = array();
    	foreach ($allCate as $key => $value) {
    		 $results[$value['id']] = $value['value'];
    	}
    	return $results;
    }
	public static function getListCateGroupBrand()
    {
		$allCate = Model_Cate::find('all', array(
            'where' => array(
                array('status', 1),
            ),
        ));
    	$results = array();
    	foreach ($allCate as $key => $value) {
    		 $results[$value['brand_id']][$value['id']] = $value['value'];
    	}
    	return $results;
    }
}
?>