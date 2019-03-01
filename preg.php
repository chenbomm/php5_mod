<?php
/**
 * Created by PhpStorm.
 * User: 陈波
 * Date: 2018/11/23
 * Time: 15:02
 */
/*
 * 表单验证类
 1 验证用户名-用户名必须是中文,长度6，10
2 验证密码-密码是数字、字母、下划线、特殊字符、首字母不能为数字
3 确认密码-确认密码必须和密码相同
4 邮箱验证-按照互联网标准
5 手机验证-全数字、11位
 */
class preg{
    /*
     * 中文验证的方法
     * 参数$str
     * 返回值：匹配成功返回匹配的次数
     */
    public function checkChina($str){
        //中文验证正则
        $reg = '/^[\x{4e00}-\x{9fa5}]{1,4}+$/u';
        return preg_match($reg,$str);
    }

    /*
     * 验证密码的方法
     * 参数 $str
     * 返回值：匹配成功返回匹配的次数
     */
    public function checkPwd($str){
        //密码验证正则
        $reg = '/^[a-zA-Z_]\w(?=.*\d)(?=.*[~!@#$%^&*()_+`\-={}:";\`<>?,.\/]).{6,16}/';
        return preg_match($reg,$str);
    }
    /*
    * 验证确认密码的方法
    * 参数 参数1 密码  参数2  确定密码
    * 返回值：true or false
    */
    public function checkQpwd($str1,$str2){
        if ($str1==$str2){
            return true;
        }else{
            return false;
        }
    }
    /*
     * 验证邮箱的方法
     * 参数 $str
     * 返回值：匹配成功返回匹配的次数
     */
    public function checkEmail($str){
        //邮箱正则
       $reg = '/^\w+@\w+[.]com|cn|net$/';
       return preg_match($reg,$str);
    }

    /*
    * 验证手机号方法
    * 参数 $str
    * 返回值：匹配成功返回匹配的次数
    */
    public function checkPhone($str){
        //手机正则
        $reg = '/^1[34578]\d{9}/';
        return preg_match($reg,$str);
    }
}