<?php
/**
 * Created by PhpStorm.
 * User: 陈波
 * Date: 2018/11/23
 * Time: 13:56
 */
class You{//loan 借贷
    private $youMoney=10000;
    //借出钱的方法
    public function loan($number){
        if ($this->youMoney>=$number){
            $this->youMoney=$this->youMoney-$number;
            echo "好，我这里借给你 $number 元<br>";
        }else{
            echo "没有 $number 元钱";
        }
    }
}
class YouSelf extends You{
    public function getMoney(){
       return $this->getMoney();
    }
}
$you=new YouSelf();
$you->loan(1000);//第一次借钱
echo "我这里还有".$you->getMoney()."元";
echo $you->youMoney;
