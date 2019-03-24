<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-21 19:50:10
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-22 08:20:13
 */
class Exer{

	public function __construct(){
		//全排列递归
		$res = $this->AllPer([32,12,3]);
		var_dump($res);die();
	}


	public function AllPer($arr = ''){
		$jishu=count($arr);

        for($i=0;$i<$jishu;$i++){

	        for($j=$i+1;$j<$jishu;$j++){

	        	if($arr[$i].$arr[$j]>$arr[$j].$arr[$i]){
                    $temp=$arr[$i];
                    $arr[$i]=$arr[$j];
                    $arr[$j]=$temp;
            	}

	        }

        }
        return implode($arr);
	}




}
new Exer();