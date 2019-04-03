<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-04-03 08:42:02
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-04-03 09:11:20
 */
class Day19{

	public function __construct(){
		header("Content-type:text/html;charset=utf-8");
		//非递归
		// $res = $this->com(8);
		


		$arr = [1,2,3,4,5,6,7];
		$res = $this->com2(5,floor(count($arr)/2),$arr);
		var_dump($res);
	}



	public function com($param = ''){
		$arr = [1,2,3,4,5,6,7,8];
		$count = count($arr);

		$middle = floor($count / 2);
		if($arr[$middle] == $param){
			return '下标为：'.$middle;
		}elseif($arr[$middle] > $param){
			$new_arr = array_splice($arr,0,$middle);
			$posi = array_search($param,$new_arr);
			return '下标为：'.$posi;
		}elseif($arr[$middle] < $param){
			$new_arr = array_splice($arr,$middle);
			$posi = array_search($param,$new_arr);
			return '下标为：'.($posi+$middle);
		}
	}

	public function com2($param = 0,$half = 0,$arr = []){
		if($arr[$half] == $param){
			return "位置是：".$half;
		}

		/**
		 * 判断中间数比目标数大还是小
		 */
		if($arr[$half] > $param){
			$new_arr = array_splice($arr,0,$half);
		}else{
			$new_arr = array_splice($arr,$half);
		}

		$this->com2($param,floor(count($new_arr) / 2),$arr);
	}


}
new Day19();