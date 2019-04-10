<?php
/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-04-03 11:32:42
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-04-03 16:06:34
 */
namespace app\controllers;
use app\models\NewsModel;

class NewsController{

	public function show(){
		$Model = new NewsModel();
		$data = $Model->select("tp5exer","aaa");
		return View("list",['data' => $data]);
	}

	public  function find(){
	    $user_id = $_GET['user_id'];
	    if(empty($user_id)){
	        return "无参数";
        }

        $Model = new NewsModel();
	    $data = $Model->find("exernight","userinfo","user_id = $user_id");

	    return View("detail",$data);
    }


}