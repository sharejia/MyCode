<?php

/**
 * @Author: Sharejia
 * @E-mail: sharejia@outlook.com
 * @Date:   2019-03-14 23:20:14
 * @Last Modified by:   贾鑫晨
 * @Last Modified time: 2019-03-15 09:17:39
 */
class Person{
    public $_Name;
    public $_Age;

    public function __construct($Name = '',$Age = ''){
    	$this->_Name = $Name;
    	$this->_Age = $Age;
    }
}