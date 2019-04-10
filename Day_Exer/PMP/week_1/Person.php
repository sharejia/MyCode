<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-18 08:57:00
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-18 09:27:13
 */
/**
 * 
 */
class Person{
	
	public $Name = '';
	public $Age = '';

	public function __construct($name = '',$age = ''){
		$this->Name = $name;
		$this->Age = $age;

		return ['name'=>$this->Name,'age'=>$this->Age];
	}

}