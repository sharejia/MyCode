<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-15 15:51:24
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-15 16:24:16
 */

$a = 10;
echo $a++;
echo "\n";
echo ++$a;
die(); 


include('Db.php');
$Db = Db::GetInstance();
$data = Db::GetData();
var_dump($data);