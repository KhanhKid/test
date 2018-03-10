<?php
class Model_Product extends \Orm\Model{
    protected static $_primary_key=array("id");
    protected static $_table_name="product";
    protected static $_mysql_timestamp = true;

    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events'          => array('before_insert'),
            'mysql_timestamp' => true,
            'property'        => 'timestamp',
        ),
    );


    public static function getAllItem($brandID =0,$cateID=0,$status =0)
    {
        $query = Model_Product::query()->select('id','link_seo','status','brandID','cateID','img','name','price','shortdetail')->order_by('id', 'desc');
        if($brandID != 0){
            $query->where('brandID',$brandID);
        }
        if($status == 1){
            $query->where('status',1);
        }
        if($cateID != 0){
            foreach ($cateID as $key => $value) {
                $query->where('cateID','like',"%,".$value.",%");
            }
        }
        return $query->get();
    }

    public static function searchProduct($params)
    {
    	$query = Model_Product::query()->select('id','link_seo','status','brandID','cateID','img','name','price','shortdetail')->where('status',"=",1)->order_by('id', 'desc');
        if(isset($params["name"]) && $params["name"] != ""){
            $query->where('name','like',"%".$params["name"]."%");
        }
        if(isset($params["thuonghieu"]) && $params["thuonghieu"] != 0){
            $query->where('brandID',(int)$params["thuonghieu"]);
        }
        if(isset($params["brand"]) && $params["brand"] != 0){
            $query->where('cateID',(int)$params["brand"]);
        }
        if(isset($params["ram"]) && $params["ram"] != 0){
            $query->where('str_search','like',"%ram:".$params["ram"]."%");
        }
        if(isset($params["ssd"]) && $params["ssd"] != 0){
            $query->where('str_search','like',"%ssd:".$params["ssd"]."%");
        }
        if(isset($params["hdd"]) && $params["hdd"] != 0){
            $query->where('str_search','like',"%hdd:".$params["hdd"]."%");
        }
        if(isset($params["vga"]) && $params["vga"] != 0){
            $query->where('str_search','like',"%vga:".$params["vga"]."%");
        }
        if(isset($params["cpu"]) && $params["cpu"] != 0){
            $query->where('str_search','like',"%".$params["cpu"]."%");
        }
        if(isset($params["screen"]) && $params["screen"] != 0){
            $query->where('str_search','like',"%manhinh:".$params["screen"]."%");
        }
        if(isset($params["quality"]) && $params["quality"] != 0){
            $query->where('str_search','like',"%chuanmanhinh:".$params["quality"]."%");
        }
    	return $query->get();
    }
    public static function getDetailbyName($name)
    {
        //->where('status', 1)
        return Model_Product::query()->where('link_seo',$name)->get_one();
    }
    public static function getDetailbyID($id)
    {
    	//->where('status', 1)
    	return Model_Product::query()->where('id',$id)->get_one();
    }
}
?>