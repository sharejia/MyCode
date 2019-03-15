<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-15 08:38:01
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-15 08:44:43
 */
class Day3{

	public function __construct(){
		//递归实现斐波那契数列
		$res = self::Fei(5);
		var_dump($res);

		echo "<hr>";

		$res = $this->Fei2(10);
		$res = array_pop($res);
		var_dump($res);
	}

	static public function Fei($param = ''){
		if($param <= 0)return 0;
		if($param == 1 || $param == 2)return 1;

		return self::Fei($param - 1) + self::Fei($param - 2);
	}

	public function Fei2($param = ''){
		if($param == 1 || $param == 2){
			return 1;
		}else{
			$arr = [1,1];
			for($i=2;$i<$param;$i++){
				$val = $arr[$i-1] + $arr[$i-2];
				$arr[] = $val;
			}
		}
		return $arr;
	}

}
new Day3();