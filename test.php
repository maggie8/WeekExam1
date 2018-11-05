<?php
header("content-type:text/html;charset=utf8");
// 1-100的和
// 第一种方式
$sum = 0;
for ($i=1; $i <= 100 ; $i++) {
    $sum += $i;
}
// echo $sum;
// 第二种方式
function recursion($num,$sum=0){
    if ($num==0) {
        echo $sum;
    }
    $sum+=$num;
    $num--;
    recursion($num,$sum);
}
// recursion(100);
// 第三种方法
// echo array_sum(range(1,100));



// N的阶乘
// 递归实现
function recursion1($num,$sum=1){
    if ($num==1) {
        echo $sum;
    }
    $sum *=$num;
    $num = $num-1;
    recursion($num,$sum);
}
// recursion(5);
//循环实现
function loop($num){
    $sum = 1;
    for ($i=$num; $i >= 1; $i--) {
        $sum *= $num;
        $num--;
    }
    echo $sum;
}
// loop(5);
$str = "abba";
function str($str)
{
    $str_test = strrev($str);
    if ($str == $str_test) {
        echo "'$str'是回文字符串";
    }else{
        echo "'$str'不是回文字符串";
    }
}
// str($str);



class Person{
    public $name;
    public $age;
}
/**
*
*/
class Student extends Person
{


}