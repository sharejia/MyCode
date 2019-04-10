<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-04-07 13:46:36
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-04-07 14:22:20
 */
class Drink{

	public function __construct(){
		/**
		 * 20元买饮料
		 * 2元一瓶 两个空瓶或四个瓶盖可以换一瓶
		 */
		$res = $this->drink(4);

		var_dump($res);
	}

	public function drink($money = 0){
		$bottle = 0;		//空瓶子
		$cap 	= 0;		//瓶盖
		$num 	= 0;		//喝了几瓶

		$bottle = floor($money / 2);
		$cap 	= floor($money / 2);
		$num 	= floor($money / 2);

		
		while($bottle >= 2 || $cap >= 4){
			//空瓶 换购饮料
			$this_bottle = floor($bottle / 2);
			//盖子 换购饮料
			$this_cap 	 = floor($cap / 4);

			//换购后 剩余的空瓶和瓶盖
			$resi_bottle = $bottle % 2;
			$resi_cap 	 = $cap % 4;

			//剩余的 加上本次换购喝完的 空瓶和瓶盖
			$bottle = $this_bottle + $this_cap + $resi_bottle;
			$cap 	= $this_bottle + $this_cap + $resi_cap;

			$num += ($this_bottle + $this_cap);
		}
		return $num;

	}




}
new Drink();