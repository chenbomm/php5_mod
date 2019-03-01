<?php
/**
 * Created by PhpStorm.
 * User: 陈波
 * Date: 2018/11/23
 * Time: 9:39
 */
//Animal动物
class Animal{
    private $weight;//重量
    //获取重量的方法
    public function getWeight(){
        return $this->weight;
    }
    //设置重量的方法
    public function setWeight($w){
        $this->weight=$w;
    }
}