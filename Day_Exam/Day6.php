<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-19 08:37:24
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-19 09:00:39
 */
class Day6{

	public function __construct(){
		$res = $this->get1(10);
		// $res = floor(1/10);
		var_dump($res);die();

	}

	public function get1($param = ''){///123
		$sum = 0;

		for($i=1;$i<=$param;$i++){
			$k = $i;

			for($j=1;$j<=strlen($i);$j++){
				$v = $k%10;
				if($v == 1){
					$sum++;
				}
				$k = floor($k / 10);
			}
			// while($i!=0){
			// 	$v = $i%10;
			// 	if($v == 1){
			// 		$sum++;
			// 	}
			// 	echo $sum;
			// 	$i = floor($i/10);
			}
		return $sum;
	}
}
new Day6();