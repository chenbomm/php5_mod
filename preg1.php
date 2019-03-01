<?php
/**
 * Created by PhpStorm.
 * User: 陈波
 * Date: 2018/11/23
 * Time: 15:13
 */
include 'preg.php';
$preg=new preg();
//echo $preg->checkChina($name);
echo $preg->checkPwd($_POST['pwd']);
//echo $preg->checkQpwd($_POST['qpwd']);
//echo $preg->checkChina($_POST['email']);
//echo $preg->checkChina($_POST['phone']);