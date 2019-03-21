<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-20 08:05:58
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-20 08:28:40
 */
class Exer{

	public function __construct(){
		$res = $this->chou(11);
		var_dump($res);
	}

	public function chou($param = ''){

		for($i=1;$i<=$param;$i++){
			$arr[$i] = $i;
			$nums = $i;
			//是否能被2整除
		    while($nums%2 == 0){
		        $nums = $nums/2;
		    }
		    //是否能被3整除
		    while($nums%3 == 0){
		        $nums = $nums/3;
		    }
		    //是否能被5整除
		    while($nums%5 == 0){
		        $nums = $nums/5;
		    }
		    if($nums == 1) {//丑数
		       // return 1;
		    }else{
		       // return 0;
		       array_pop($arr);
		    }
		}


		var_dump($arr);die();
		// return $arr;
	    

	}

}
new Exer();