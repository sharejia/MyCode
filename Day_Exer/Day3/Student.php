<?php
/**
 * Created by PhpStorm.
 * User: 贾鑫晨
 * Date: 2019/3/15
 * Time: 8:10
 */
include('Person.php');
include('Walk.php');
class Student extends Person implements Walk{
    public function Name(){
    	
    }

    public function Age(){
    	
    }

    public function getUserInfo(){
    	$Name = $this->_Name;
    	$Age = $this->_Age;
    	return ['Name' => $Name,'Age' => $Age];
    }
}