<?php

//if

$x = 10;
if($x===10){
	print '10';
}else{
	print 'NO';
}

$x = 35;
if($x>20){
	print '20以上';
}elseif($x>10){
	print '10以上';
}else{
	print '10以下';
}


$x=1;
$y=0;
if($x===1){
	if($y===1){
		print '1';
	}else{
		print '1ではない';
	}
}else{
	print '1ではない';
}

$x=1;
if($x===1)
	print '1';
else
	print 'ではない';



//swicth
$x=1;
switch($x){
	case 1:
		print 1;
		break;
	case 2;
		print 2;
		break;
	default :
		print '???';
		break;
}

$x=1;
switch($x){
	case 1:
	case 11:
	case 111://caseを続けるのもできる
		print 1;
		break;
	case 2;
		print 2;
		break;
	default :
		print '???';
		break;
}


$exp='x';
switch($exp){
	case 0;
		print '0';
	break;
	case 'X';
		print 'x';
	break
}//結果0 switchは==演算子、文字列を数値に変換



//while

while(条件式){
	//trueの間繰り返す処理
}

do{
	//trueの間繰り返す処理
}while(条件式);


$i = 1;
while($i<6){
	print "{$i}";
	$i++;
}

$i =1;
do{
	print "{$i}";
	$i++;
}while($i<6);
/*doは仮に$i=7でも１回は処理する
無限ループには気をつける*/



//for
for(初期化;条件式;増減式){
	ループ内で実行する処理
}

for($i=1;$i<6;$i++){
	print $i;
}

for($i=1;$i<6;print $i,$i++);//カンマ演算子

for($i=1,$j=1; $result=$i*$j, $i<6;$i++,$j++){
	print "{$i}*{$j}={$result}"
}

//foreach
foreach(配列as値変数){
	//ループ内で実行する処理
}

foreach(配列asキー変数=>値変数){
	//ループ内で実行する処理
}

$dat =[1,2,3,4,5];
foreach ($dat as $value) {
	print $value;
}

$dat =[1=>1,2=>2,3=>3,4=>4,5=>5];
foreach ($dat as $key => $value) {
	print $key::$value;//通常配列の場合には配列のindex番号
}

$dat =['a','b','c','d','e'];
foreach ($dat as &$value) {
	$value = 'new' + $value;
}
print_r($dat);


$dat =['a','b','c','d','e'];
foreach ($dat as &$value) {
	if($value==='a'){
		$dat[] = 'f';
	}
	var_dump($value);
}



//ループの抑制
$sum=0;
for($i=1;$i<=100;$i++){
	$sum += $i;
	if($sum>1000){
		break;
	}
}
print $i;

$sum=0;
for($i=1;$i<=100;$i++){
	if($i % 2 !==0){
		continue;
	}
	$sum +=1;
}
print $isum;

for($i=1;$i<10;$i++){
	for($j=1;$j<10;$j++){
		$result = $i * $j;
		if($result>40){break;}
		print "{$result}&nbsp";
	}
	/*
	$result = $i * $j;
	if($result>40){break 2;} 抜け出す階層分の数字を指定して一気に抜け出す.
	print "{$result}&nbsp";
	*/
}

for($i=1;$i<4;$++){
	$result =0;
}



