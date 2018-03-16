<?php
class Model_Article extends \Orm\Model{
    protected static $_primary_key=array("id");
    protected static $_table_name="article";

    public static function getAllItem()
    {   
        // $query = Model_Article::query()->where('status',1);
        $query = Model_Article::query();
    	return $query->get();
    }
    public static function getDetailbyID($artID)
    {   
        $query = Model_Article::find('first', array(
            'where' => array(
                array('id', $artID),
            ),
        ));
        // $query = Model_Article::query();
    	return $query;
    }
}
?>