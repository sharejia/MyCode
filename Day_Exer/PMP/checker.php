<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-04-07 16:20:43
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-04-07 16:54:55
 */
class checker{

	public function __construct(){
		$res = $this->res(4,4);
		var_dump($res);
	}

	public function res($x = 0,$y = 0){
		if($x == 0 && $y ==0){
			return 0;
		}

		if($x == 0 || $y == 0){
			return 1;
		}

		//假设x=4 y=5 他的值为 4,4 + 3,5
		return $this->res($x-1,$y) + $this->res($x,$y-1);
	}


}
new checker();