<?php
/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-04-03 11:32:54
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-04-03 16:04:18
 */
namespace app\models;
class DbHelp{
		/**
		 * 定义变量  -> 
		 * 1.连接数据库信息PDO
		 */
		private $_db = "";	//1.


		/**
		 * 连接数据库
		 * @param string $table [description]
		 */
		public function __construct($dbname = ''){
			$this->_db = new \PDO("mysql:host=47.94.233.238;dbname=$dbname;","root","sharejia");
			$this->_db->exec("SET CHARACTER SET UTF8");
		}	


		/**
		 * 查询数据方法
		 * @param  string $sql [description]
		 * @return [type]      [description]
		 */
		public function select($table = ''){
		    $sql = "select * from $table";
			$data = $this->_db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
			return $data;
		}

		public function find($table = '',$condition = ''){
		    $sql = "select * from $table where  $condition";
		    $data = $this->_db->query($sql)->fetch(\PDO::FETCH_ASSOC);
		    return $data;
        }



}