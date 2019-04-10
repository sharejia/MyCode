<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-14 08:36:59
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-14 08:53:25
 */

class Day2{

	public function __construct(){
		$res = $this->Daff(153,999);
		var_dump($res);
	}

	protected function Daff($start = '',$end = ''){
		for ($i=$start; $i <= $end ; $i++) { 
			$res = $this->isDaff($i);
			if(!empty($res))$arr[] = $res;
		}
		return $arr;
	}

	protected function isDaff($i){//153
		$unit = ($i%10)*($i%10)*($i%10);
		$tens = floor(($i%100)/10)*floor(($i%100)/10)*floor(($i%100)/10);
		$hund = (floor($i/100));
		$sum = $unit+$tens+$hund;
		if($sum == $i){
			return $i;
		}

	}







}

new Day2();