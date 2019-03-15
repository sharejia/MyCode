<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-14 22:04:50
 * @Last Modified by:   sharejia
 * @Last Modified time: 2019-03-14 22:11:12
 */
class Day3{
	
	function __construct(){
	    //普通方式
		$res = self::Fei(10);
		$this_num = array_pop($res);
        var_dump($this_num);
echo "<hr>";
        //递归方式
        $res = self::Fei_recu(10);
		var_dump($res);
	}


    /**
     * 递归方式实现斐波那契数列
     * @param string $param
     * @return int
     */
	static public function Fei_recu($param = ''){
        if($param <= 0) return 0;
        if($param == 1 || $param == 2) return 1;
        /**
         *               不断调用自己 -> 直到$param = 2时 -> 遇到return 计算出1+0=1
         *                              递归的原理是一个栈，栈的特性是->后进先出，所以下面的递归大概是这样的
         *                              因为我们的两个递归之间做的是加法 -> 所以下面的两个栈也应该做加法
         *                                      栈1                                                                                              栈2
         *                                      Fei_recu(3-1)=1                                                                          Fei_recu(3-2)=1
         *                                      Fei_recu(4-1)=Fei_recu(3-1) + Fei_recu(3-2)=2                          Fei_recu(4-2)=Fei_recu(2)=1
         *                                      Fei_recu(5-1)=Fei_recu(3)+Fei_recu(2)=2+1=3 ->  Fei_recu(4)  Fei_recu(5-2)=Fei_recu(3)=2 -> Fei_recu(3)
         *
         *                              通过上边的解释，我们已经得到了Fei_recu(4) and Fei_recu(3)的值
         *                              因为 ： Fei_recu(5) = Fei_recu(4) + Fei_recu(3);
         *                              所以 ： Fei_recu(5) = 3 + 2 =5
         */
        return self::Fei_recu($param - 1) + self::Fei_recu($param - 2);
    }

    /**
     * 斐波那契数列第N项的值
     * 1,1,2,3,5,8,13,21,34,55
     * @param string $param
     * @return array|int
     */
	static public function Fei($param = ''){
	    if($param == 1 || $param == 2){
            return 1;
        }else{
	        $arr = [1,1];
            for($i=2;$i<$param;$i++){
                $value = $arr[$i-1] + $arr[$i-1-1];
                $arr[] = $value;
            }
        }
        return $arr;
    }




}

new Day3();