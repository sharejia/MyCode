<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-15 09:32:09
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-15 10:14:00
 */
/**
 * 
 */
class Data{
	
	public $_Page;
	public $_Pdo;
	function __construct($Page = ''){
		$this->_Page = $Page;

		$this->_Pdo = new PDO('mysql:host=47.94.233.238;dbname=yii','root','sharejia');
	}

	public function GetData(){
		//数据量
		$data_sum = $this->_Pdo->query("select count(`user_id`) as count from userinfo")->fetchAll();
		$data_sum = $data_sum[0]['count'];
		
		//计算总页数
		$page_sum = ceil($data_sum/2);

		//查询数据  计算偏移量
		$offset = ($this->_Page-1) * 2;

		$data = $this->_Pdo->query("select * from userinfo limit $offset,2")->fetchAll();

		$all = ['data'=>$data,'page_sum'=>$page_sum];
		return $all;
	}
}					