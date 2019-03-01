<?php
/**
 * Created by PhpStorm.
 * User: 陈波
 * Date: 2018/11/23
 * Time: 9:45
 */
class user{
    public function getName(){

    }
}
class NormalUser extends user{
    private $name;//属性
    //获取name的方法
    public function getName(){
        return $this->name;
    }
    //设置name的方法
    public function setName($_name){
        $this->name=$_name;
    }
}
class  UserAdmin{//操作
    public static function ChangeUserName(user $_user,$_userName){
        $_user->setName($_userName);
    }
}
$NormalUser=new NormalUser();
UserAdmin::ChangeUserName($NormalUser,'小黄');
//这里传入的是anamal的实例
echo $NormalUser->getName();

