<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-22 08:38:09
 * @Last Modified by:   sharejia
 * @Last Modified time: 2019-03-22 09:49:58
 */

class Day9{

	public function __construct(){
		$res = $this->number([4,3,2,1,7]);
		// var_dump($res);
	}

	public function number($param = ''){
		//将两个数字进行拼接 前后交换位置，判断谁小，数字顺序按照小的数值的顺序排列
		for($i=0;$i<count($param);$i++){
			for($j=$i+1;$j<count($param);$j++){

				$letf = $param[$i];
				$right = $param[$j];
				$Temp = '';
				if($letf.$right > $right.$letf){
					$Temp = $letf;
					$letf = $right;
					$right = $Temp;

					$param[$i] = $letf;
					$param[$j] = $right;
				}


				echo "<pre>";
				echo $i.','.$j;
				// echo "<pre>";
				// var_dump($param);
			}
		}
	}


}
new Day9();