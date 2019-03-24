<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-22 19:36:04
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-23 11:46:09
 */
class Compute{

	public function __construct(){
		$res = $this->xiangjin([1,2,3,4,5,6,7,8,9,10   ]);
		var_dump($res);
	}

	public function xiangjin($param = []){
		sort($param);
		//							1    2   3 		   1	2	3	1	2		  3    2    1
		//							(1) (3) (4)       (5) (5) (6) (8) (10)      (11) (12) (14)
		$length = count($param);

		$arr_1 = [];
		$arr_2 = [];
		$arr_3 = [];

		for($i=0;$i<floor($length/2);$i++){
			$name = 'arr_'.($i+1);
			$$name[] = $param[$i];
			$$name[] = $param[$length-$i-1];

			unset($param[$i]);
			unset($param[$length-$i-1]);

			if($i == 2){
				break;
			}
		}

		var_dump($arr_1);
		var_dump($arr_2);
		var_dump($arr_3);

		echo "<hr>";

		//处理剩余的数据
		$param = array_values($param);
		rsort($param); //从大到小

		// var_dump($param);die();

		foreach ($param as $k => $v) {

			//求数组最小和的数组是谁  假设为arr_1
			$Max_arr_name = 'arr_1';
			if(array_sum($$Max_arr_name) > array_sum($arr_2)){
				$Max_arr_name = 'arr_2';
			}
			if(array_sum($$Max_arr_name) > array_sum($arr_3)){
				$Max_arr_name = 'arr_3';
			}

			// echo "最小的数组".($k+1).$Max_arr_name;
			// echo "<pre>";

			// $name = 'arr_'.($k+1);
			$$Max_arr_name[] = $v;
			// unset($param[$k]);
			// if($k == 2){
			// 	$param = array_values($param);
			// }
		}



		var_dump($arr_1);
		var_dump($arr_2);
		var_dump($arr_3);
		// var_dump($param);
		die();
		return $param;


	}



}

new Compute();