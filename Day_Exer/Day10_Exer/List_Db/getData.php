<?php
/**
 * Created by PhpStorm.
 * User: 贾鑫晨
 * Date: 2019/3/22
 * Time: 16:33
 */
include('Model.php');
class getData{

    public function __construct(){
        $method = $_SERVER['REQUEST_METHOD'];

        switch($method){
            case "GET":
                $this->getData();
                break;
            case "POST":
                break;
            case "DELETE":
                break;
            case "PUT":
                break;
        }

    }

    public function getData(){
        $page = isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : 1;
        $Model = new Model();

        //查询总条数
        $nums = $Model->table('goods')->Select();
        $nums = count($nums);
        $nums = ceil($nums / 3);

        //计算偏移
        $offset = ($page - 1) *3;

        //查询数据
        $data = $Model->table('goods')->limit("$offset",3)->Select();

        echo json_encode(['data'=>$data,'page_nums'=>$nums]);
    }


}
new getData();