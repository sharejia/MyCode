<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-18 09:10:19
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-18 09:15:58
 */

include('Student.php');
$info1 = new Student('贾鑫晨','29');
$info2 = new Student('贾鑫晨','28');
$info3 = new Student('贾鑫晨','27');
$info4 = new Student('贾鑫晨','25');
$info5 = new Student('贾鑫晨','24');
$info6 = new Student('贾鑫晨','18');
$info7 = new Student('贾鑫晨','20');
$info8 = new Student('贾鑫晨','20');
$info9 = new Student('贾鑫晨','21');


$Max = 1;


for($i=1;$i<=9;$i++){
	if($info.$i['age'] > $Max){
		$Max_name = $info.$i['name'];
	}
}

echo "最大年龄为：".$Max_name;