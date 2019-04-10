<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-19 13:53:13
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-19 14:44:55
 */
class Model{
	public $filed = '*';
	public $where = '1=1 ';
	public $table = '';


	/**
	 * [filed description] 函数目的：接收字段条件filed
	 * @param  [type] $filed [description]
	 * @return [type]        [description]
	 */
	public function filed($filed){
		$this->filed = $filed;
		return $this;
	}

	public function table($table){
		$this->table = $table;
		return $this;
	}

	/**
	 * [where description] 函数目的：接收where条件
	 * @param  [type] $where [description]
	 * @return [type]        [description]
	 */
	public function where($where){
		$this->where = $where;
		return $this;
	}

	/**
	 * [Sql description] 函数目的：根据条件拼接出完整的SQL语句
	 */
	public function Sql(){
		$sql = "select ";

		/**
		 * 拼接字段条件
		 */
		if(is_array($this->filed)){
			foreach ($this->filed as $k => $v) {
				$sql .= '`'.$v.'`,';
			}
			$sql = substr($sql,0,-1);
			$sql .= " from ";
		}else{
			$sql .= " $this->filed ";
			$sql .= " from ";
		}


		/**
		 * 拼接table表名
		 */
		$sql .= $this->table." ";


		/**
		 * 拼接where条件
		 */
		$sql .= "where ";
		if(is_array($this->where)){
			foreach ($this->where as $k => $v) {
				$sql .= $k.' = '.'\''.$v.'\''.' and '; 
			}
			$sql = substr($sql,0,-4);
		}else if(is_string($this->where) && !strstr($this->where,',')){
			$sql .= "$this->where".' ';
		}elseif (strstr($this->where,',')) {
			$where_arr = explode(',',$this->where);
			foreach ($where_arr as $k => $v) {
				$sql .= $v.' and ';
			}
			$sql = substr($sql,0,-4);
			var_dump($sql);die();
		}




		
		return $sql;
	}


	public function select(){
		$sql = $this->Sql();
		return $sql;
	}






}