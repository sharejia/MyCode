<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-15 15:41:30
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-15 15:57:51
 */
class Db{
	//数据库和实例化
	private static $Db = null;
	private static $Instance = null;

	private function __construct(){
		if(self::$Db == null){
			self::$Db = new PDO("mysql:host=127.0.0.1;dbname=0927","root","root");
		}
	}

	private function __clone(){

	}

	/**
	 * [GetInstance description] 检查实例化Db类的状态
	 */
	public static function GetInstance(){
		if(self::$Instance instanceof Db){
			return self::$Instance;
		}else{
			self::$Instance = new Db();
		}
	}

	public static function GetData(){
		$sql = "select * from tp_user";
		$data = self::$Db->query($sql)->fetchAll();
		return $data;
	}



}