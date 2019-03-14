<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-12 20:14:15
 * @Last Modified by:   sharejia
 * @Last Modified time: 2019-03-14 08:27:14
 */

/**
 * 
 */
class Work
{
	
	function __construct()
	{
		// //5的阶乘
		// $res = $this->factorial(5);
		// echo $res;
		

		// //判断首先出现三次的字符
		// $res = $this->getThreeString('Have you ever gone shopping and');
		// echo $res;


		//判断是否是回文
		// $res = $this->isPaliNum('ABCDEDCBA');
		// var_dump($res);
		
		//判断是否是水仙花数
		$res = $this->Daffodil($start=100,$start=999);
	}

	/**
	 * [Daffodil description] 判断是否是水仙花数
	 * @param string $start [description]
	 * @param string $end   [description]
	 */
	public function Daffodil($start = '',$end = ''){
		//定义空数组存放符合条件的数字
		$Daffodil_array = [];

		for($i=$start;$i<=$end;$i++){
			//循环检测这些数字 将数字拆分成数组
			$arr_i = str_split($i);
			//求次数的立方和
			$res = $this->getCubeSum($arr_i,$i);
			//返回值不为空 说明此数字是水仙花数 -> 存入数组
			if(!empty($res))$Daffodil_array[] = $res;
		}

		var_dump($Daffodil_array);
	}

	/**
	 * [getCubeSum description] 计算此数字三位立方之和
	 * 							-> 如果与次数本身相等
	 * 							-> return 此数字
	 * 							
	 * @param  string $arr      [description]
	 * @param  string $this_num [description]
	 * @return [type]           [description]
	 */
	public function getCubeSum($arr = '',$this_num = ''){
		//计算三位立方和是否等于次数
		//个位 十位 百位 
		// $unit = $arr[0]*$arr[0]*$arr[0];
		// $deca = $arr[1]*$arr[1]*$arr[1];
		// $hund = $arr[2]*$arr[2]*$arr[2];


		$unit = ($this_num%10)*($this_num%10)*($this_num%10);
		$deca = floor(($this_num%100)/10)*floor(($this_num%100)/10)*floor(($this_num%100)/10);
		$hund = (floor($this_num/100))*(floor($this_num/100))*(floor($this_num/100));
		$sum = $unit+$deca+$hund;

		if($sum == $this_num){
			return $this_num;
		}
	}

	/**
	 * [isPaliNum description] 判断是否是回文字符串
	 * 思路： 	将参数字符串翻转 
	 * 			和原来的字符串比较是否相等
	 * 			
	 * @param  string  $param [description]
	 * @return boolean        [description]
	 */
	public function isPaliNum($param = ''){
		$rev_param = strrev($param);
		if($rev_param == $param){
			return '是回文字符串';
		}else{
			return '不是回文字符串';
		}
	}

	/**
	 * [factorial description] 5的阶乘
	 * @param  string $value [description]
	 * @return [type]        [description]
	 */
	public function factorial($value = ''){
		$Temp = 1;

		for($i = 0; $i < $value; $i++){
			$Temp *= ($value - $i);
		}

		return $Temp;
	}


	/**
	 * [getThreeString description]  判断首次出现三次的字符
	 * @param  string $param [description]
	 * @return [type]        [description]
	 */
	public function getThreeString($param = ''){
		/**
		 * 思路：将字符串作为数组的键，循环组成一个数组
		 * 利用array_key_exists()函数判断此时的值是否存在数组的键
		 * 
		 * 			->存在   -> 让此键对应的值 +1
		 * 				  	 -> +1后判断此值是否为3 
		 * 				  		-> 若等于3 说明率先出现了3次
		 * 				  		->	则还为出现3次
		 * 				  		
		 * 			->不存在 -> 初始化值为1
		 */
		
		$Temp_arr = [];
		for($i=0; $i <= strlen($param); $i++){
			if(array_key_exists($param[$i],$Temp_arr)){
				//数组已经存在此键
				$Temp_arr[$param[$i]] +=1;
				//判断是否出现了第三次 -> 够三次直接返回此值
				if($Temp_arr[$param[$i]] == 3){
					return $param[$i];
				}
			}else{
				//数组中还未存在此键
				$Temp_arr[$param[$i]] = 1;
			}
		}

	}

}
new Work();