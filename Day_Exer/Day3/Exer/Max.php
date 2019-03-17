<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-15 11:49:38
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-15 14:29:01
 */

class Max{
	public function __construct($arr = ['贾鑫晨' => '18','苏帅兵' => '19','李园园' => '20','闫郑宇' => '20','刘志刚' => '21']){
		//重新组装数组
		foreach ($arr as $k => $v) {
			$userInfo[] = ['name'=>$k,'age'=>$v];
		}

		//假设最大年龄的为第一个人（存储年龄最大的人的信息）
		$Temp[0]['name'] = $userInfo[0]['name'];
		$Temp[0]['age']  = $userInfo[0]['age'];

		//循环判断
		for($i=0;$i<count($userInfo);$i++){
			//如果此时的age大于数组中的最后一个age的值，那么清除数组，将此值存入数组
			if($userInfo[$i]['age'] > $Temp[count($Temp)-1]['age']){
				//清除数组数据
				$Temp = [];
				$Temp[]  = ['age'=>$userInfo[$i]['age'],'name'=>$userInfo[$i]['name']];
			}

			//如果此时的值与数组中最后一个值相等，那么加入数组,说明有多个年龄相同的人
			if($userInfo[$i]['age'] == $Temp[count($Temp)-1]['age']){
				//年龄相同的人，名称不可相同，避免重复
				if($userInfo[$i]['name'] != $Temp[count($Temp)-1]['name']){
					$Temp[]  = ['age'=>$userInfo[$i]['age'],'name'=>$userInfo[$i]['name']];
				}
			}
		}

		//输出年龄最大的所有人的信息
		var_dump($Temp);die();
	}
}
new Max();