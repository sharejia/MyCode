<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-04-03 09:57:23
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-04-03 14:00:01
 */
class Day19{

	public function __construct(){
		$money = 20;
		$res = $this->sell($money);


		//二进制转换十进制
		$res = $this->dec(10);	

		//上楼梯问题 递归
		$res = $this->floor(1000);	

		//上楼梯问题 不递归
		$res = $this->floor2(1000);

		//实验
		$res = $this->sss();
		var_dump($res);
	}

	/**
	 * [sell description] 买饮料问题
	 * @param  integer $money [description]
	 * @return [type]         [description]
	 */
	public function sell($money = 0){
		return $money;
	}

	/**
	 * [dec description] 二进制转换十进制
	 * @param  string $param [description]
	 * @return [type]        [description]
	 */
	public function dec($param = ''){
		$sum = 0;
		$param = strrev($param);

		for($i=0;$i<strlen($param);$i++){
			$sum += ($param[$i] * pow(2,$i));
		}
		return $sum;
	}

	/**
	 * [floor description] 上楼梯问题递归
	 * @return [type] [description]
	 */
	public function floor($floorNums = 0){
		if($floorNums == 1)return 1;
		if($floorNums == 2)return 2;
		if($floorNums == 3)return 4;

		return $sum = (floor($floorNums-1) + floor($floorNums-2) + floor($floorNums-3));
	}

	public function floor2($param = 0){
		for($i=1;$i<=$param;$++){
			
		}
	}

	public function sss(){
		$arr = [];
		for($i=1;$i<=10;$i++){
			// $arr[] = $
		}
	}

}
new Day19();