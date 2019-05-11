<?php

print '108' + '15';
print '108'+'15x';
print '108'+'x15';
print '108'+'15x15';
print '108'+'15E1';
print '108'+'0b11';
print '108'+'010';
print '108'+'0x1A';



$x = 10;
$y = ++$x;
print $x;
print $y;

$a = 10;
$b = $a++;
print $a;
print $b;



$i = 'Z';
print ++$i;
print ++$i;

$j = 'T8';
print ++$j;
print ++$j;



print floor((0.1+0.7)*10); // 7 2進数の為



$assoc1 = [
	'apple' => 'red',
	'orange' => 'yellow',
];
$assoc2 = [
	'apple' => 'green',
	'melon' => 'green',
];
$result => $assoc1 + $assoc2;
print_r($result);

$ary1 = [1,3,5];
$ary2 = [2,4,6];
$result = $ary1 + $ary2;
print_r($result);



$x = 1;
$y = $x;
$X = 5;
print $y // 1

$x = 1;
$y =&&$x;
$x =5;
print $y // 5



var_dump('3.14' ==3.140000);  //t
var_dump('3.14E2' ==314);  //t
var_dump('0x10' ==16);//f
var_dump('010'  ==8);//f
var_dump('0b11' == 3);//f
var_dump('13xyz' ==13);//t
var_dump('x' == 0);//t
var_dump('3.14' == '3.14000');//t
var_dump('3.14E2' == '314' );//t
var_dump('13xyz' == '13');//f



var_dump('3.14E2' === '314');
var_dump('x' ===0);
var_dump('1'===1);


CONST EPSILONB=0.00001;
$x = 0.123456;
$y = 0.123455;
abs($x-$y) < EPSILONB; //bool(true)



$data1=[1,2,3];
$data2=[1,5];
var_dump($data1<$data2);//false

$data1=[1,2,3];
$data2=[1,5,1];
var_dump($data1<$data2);//true

$data1=[1,2,3];
$data2=[1,2,'3'];
var_dump($data1==$data2);//true
var_dump($data1===$data2);//false

$data1=['A'=>'a','B'=>'b','C'=>'c'];
$data2=['A'=>'a','D'=>'d','C'=>'c'];
var_dump($data1==$data2);//true
var_dump($data1===$data2);//false


$score =75;
print $score>=70? 'a':'b';

$message = '';
print $message?: 'からです';

$message ='a';
print $message ?? 'b';

print true? 1: false? 'ok': 'ng';//ok



$x = 1;
if($x !==2){print '実行'};
$x ===2 or print '実行'；



$x = 'a';
$y = '世界';
print $x.$y;

$x = 0xFF; //文字列''
$y = 1.5E2; //文字列''
print $x .$y;

$result = `dir`; //``はシェルコマンドとして



@print 1/0; //エラー抑制



(5*3)+(4*1)//優先を分かりやすくする為に()



