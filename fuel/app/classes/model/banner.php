<?php
class Model_Banner extends \Orm\Model{
    protected static $_primary_key=array("id");
    protected static $_table_name="banner";

    public static function getAllItem()
    {   
        $query = Model_Banner::query()->where('status',1);
    	return $query->get();
    }
}
?>