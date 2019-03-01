<?php
/**
 * Created by PhpStorm.
 * User: 陈波
 * Date: 2018/11/23
 * Time: 9:33
 */
require_once "m1.php";
$myDog=new Dog();
$myDog->setWeight(20);
echo "我的小狗的体重是：".$myDog->getWeight();
echo "<br>";
echo $myDog->Bark();
