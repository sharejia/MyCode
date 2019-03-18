<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-18 08:56:22
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-18 09:12:22
 */
/**
 * 
 */
include('Person.php');
include('Walk.php');
class Student extends Person implements Walk{
	
	public function __construct($name = '',$age = ''){
		return ['name' => $name,'age'=>$age];
	}

	public function Run(){

	}





}