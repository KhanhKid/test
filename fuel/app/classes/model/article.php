<?php
class Model_Article extends \Orm\Model{
    protected static $_primary_key=array("id");
    protected static $_table_name="article";

    public static function getAllItem()
    {   
        // $query = Model_Article::query()->where('status',1);
        $query = Model_Article::find('all', array(
            'order_by' => array('reg_datetime' => 'desc'),
        ));
    	return $query;
    }
    
	// public static function getListCateDetail($cateId = null)
    // {   
    //     $results = "";
    //     $arrWhere = array(array('status', 1));
    //     if (!is_null($cateId)) $arrWhere[] = array('cate_id', $cateId);
	// 	    $results = Model_Article::find('all', array(
    //             'where' => $arrWhere,
    //             'order_by' => array('reg_datetime' => 'desc'),
    //         ));
    // 	return $results;
    // }

	public static function getListCateDetail($brandId, $cateId = null)
    {   
        $results = "";        
        $query = DB::select("article.id","title","content","reg_datetime","short_desc")->from('article');
        $query->join('category');
        $query->on('category.id', '=', 'article.cate_id');
        $query->where('article.status', 1);
        $query->where('brand_id', $brandId);
        if (!is_null($cateId)) $query->where('cate_id', $cateId);

    	return $query->execute();
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