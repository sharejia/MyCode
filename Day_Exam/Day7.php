<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-20 08:37:17
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-20 08:44:01
 */
class Day7{

	public function __construct(){
		$res = $this->chou(10);
		var_dump($res);
	}


	public function chou($param = ''){
		for($i=1;$i<=$param;$i++){
			$arr[] = $i;
			$nums = $i;

			while($nums%2==0){
				$nums = $nums / 2;
			}

			while($nums%3==0){
				$nums = $nums / 3;
			}

			while($nums%5==0){
				$nums = $nums / 5;
			}

			if($nums != 1){
				array_pop($arr);
			}
		}

		return $arr;
	}




}
new Day7();