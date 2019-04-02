<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-28 08:38:27
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-28 11:41:06
 */
class Day14{

	public function __construct(){
		$res = $this->FindNumbersWithSum([1,2,3,4,5],6);
		var_dump($res);
	}

	public function FindNumbersWithSum($arr = [],$sum = ''){

		$res = [];

		for($i=0;$i<count($arr);$i++){
			for($j=$i+1;$j<count($arr);$j++){
				if($arr[$i] + $arr[$j] == $sum){
					$res[][$i] = $arr[$i];
					$res[count($res)-1][$j] = $arr[$j];
					$res[count($res)-1]['X'] = $arr[$i]*$arr[$j];
				}
			}
		}

		if(empty($res)){
			return "无结果";
		}

		//Temp中存放最小乘积的Key
		$Temp["val"] = $res[0]['X'];
		$Temp["key"] = 0;

		foreach($res as $k => $v){
			if($v['X'] <= $Temp['val']){
				$Temp['key'] = $k;
				$Temp['val'] = $v['X'];
			}
		}

		//此时找到了乘积最小的数组的Key值  -> 循环里边的关联索引
		$res_str = '';
		foreach ($res[$Temp['key']] as $k => $v) {
			if(isset($arr[$k]) && !empty($arr[$k])){
				$res_str .= $arr[$k].',';
			}	
		}
		return $res_str;
	}

}

new Day14();