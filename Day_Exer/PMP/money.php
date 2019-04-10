<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-04-07 14:36:14
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-04-07 16:17:45
 */
/**
 * 
 */
class money{

	public function __construct(){
		$res = $this->money();
	}

	public function money(){
		//五分
		for($i=0;$i<=2;$i++){
			//两分
			for($j=0;$j<=5;$j++){
				//一分
				for($k=0;$k<=10;$k++){
					if($i*0.05 + $j*0.02 + $k*0.01 == 0.1){
						echo $i."个5分和".$j."个2分和".$k."个1分可以组成一角钱。";
						echo "<br>";
					}
				}
			}
		}

	}


}
new money();