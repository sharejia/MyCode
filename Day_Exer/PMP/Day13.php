<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-26 14:37:07
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-26 20:38:31
 */

class Day13{

	public function __construct(){
	 	$arr = [
		     [
		         '1_class'=> '工具',
		         '2_class'=> '备忘录',
		         '1_id'=> 1,
		         '2_id'=> 2
		     ],
		     [
		         '1_class'=> '教育',
		         '2_class'=> '学历教育',
		         '3_class'=> '中等',
		         '1_id'=> 3,
		         '2_id'=> 4,
		         '3_id'=> 6
		     ],
		     [
		         '1_class'=> '教育',
		         '2_class'=> '学历教育',
		         '3_class'=> '高等',
		         '1_id'=> 3,
		         '2_id'=> 4,
		         '3_id'=> 5
		     ],
		     [
		         '1_class'=> '教育',
		         '2_class'=> '成人教育',
		         '1_id'=> 3,
		         '2_id'=> 7,
		     ],
	 	];

		$res = $this->num(1,10);
	}

	public function num($num1 = '',$num2 = ''){
		$Temp = $num1 ^ $num2;
	}

	



}
new Day13();