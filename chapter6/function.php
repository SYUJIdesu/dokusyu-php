<?php
//6.1.1
function getTriangleArea($base,$height){
  return $base * $height / 2;
}
$area = getTriangleArea(8,10);
print "{$area}";

//6.3 型宣言
function getTriangleArea(float $base,float $height): float{
  return $base * $height / 2;
}
$area = getTriangleArea(8,10);
print "{$area}";
declare(strict_types=1);//厳密な型チェック有効

//スクリプトの外部化
require_once '';

//関数の定義
function_exists();


//6.2.1 global
$x=10;//グローバル変数

function checkScope(): int {
  return ++$x;
}//ローカル変数
//同一名でも違う変数と見なされる


//6.2.2
$x=10;

function checkScope(): int {
  global $x;　//グローバル変数を関数内で扱う
  return ++$x;
}


//6.2.3 静的変数　static
function checkStatic(): int {
  static $x = 0;
  return ++$x;
}
print checkStatic; //1
print checkStatic; //2


//6.2.4 インクルードのスコープ
function checkScope(): string{
  require_once '';//$scope
  return $scope;
}
print checkScope();
print $scope;//カラ


//6.2.5 unset 関数の挙動
$x = 10;
function checkScope(): int{
  global $x;
  unset($x);
  //unset($GLOBALS['x']);グローバルも破棄
  return ++$x;
}
print checkScope();//1
print $x;//10

function checkStatic(){
  static $x=0;
  $x++;
  print "unset前{$x}";
  unset($x);
  $x=10;
  print "unset後{$x}";
}
checkStatic();//前1後10
checkStatic();//前2後10



//6.3引数の様々な記法
function getTriangleArea(float $base = 5,float $height = 1): float {
  return $base * $height / 2;
}
getTriangleArea();
getTriangleArea(10);//$hieghtを省略
getTriangleArea(10,5)



//6.3.2 引数の参照渡し
function increment(int $num): int {
  $num++;
  return $num;
}
$value=10;
print increment($value);//11
print $value;//10

function increment(int &$num): int {
  $num++;
  return $num;
}
//&参照渡しする場合
$value=10;
print increment($value);//11
print $value;//11



//6.3.3 可変長引数
function sum(float ...$args):float{
  ///...任意の個数を...で配列に加える
  $result =0;
  foreach($args as $arg){
    $result += $arg;
  }
  return $return;
}



//6.3.4 可変長引数と通常の引数(可変長の後ろ)の混在
function replaceContents(string $path, ...$args): string{
  //ファイル読み込み
  $data = file_get_contents($path);
  //可変長引数を順番に処理し{0}{1},と置き換え
  for($i=0;$i<conut($args);$i++){
    $data = str_replace('{'.($i).'}',$args[$i],$data);
  }
  return $data;
}
print replaceContents('data.dat','鈴木','2016年５月');

data.datファイル
<p>{0}</p>
日にち{1}<br>



//6.3.5「...」演算子による引数のアンバック
function getTriangleArea(float $base,float $height): float{
  return $base * $height /2;
}
print getTriangleArea(...[10,5]);//25



//6.4 複数の戻り値(配列やオブジェクトで)
function max_min(float ...$args): array{
  return [max($args),min($args)];
}
$result = max_min(10,2,-5,3,78);
list($max,$min)=max_min(10,2,-5,3,78);
//list(変数[,変数2,....])=配列 配列を個別の変数に振り分ける



//6.4.2 再帰関数
function factorial(int $num): int {
  if($num !==0){return $num * factorial($num -1);}
  return 1;//終了点を忘れずに
}
print factorial(5);



//6.4.3可変関数 ＄変数名()
function getTriangleArea(float $base,float $hieght): float{
  return $base * $height /2;
}
$name = 'getTriangleArea';
$area = $name(8,10);
print $area;

//高階関数
function my_array_walk(array $array,callble $func){
  foreach($array as $key => $value){
    $func($value,$key);
  }
}
function showTime($value,$key){
  print "{$key}:{$value}";
}
$data=['a','b','c'];
my_array_walk($data,'showTime');

function my_array_walk(array $array,callble $func){
  foreach($array as $key => $value){
    $func($value,$key);
  }
}
$result =0;
function sum(float $value,int $key){
  global $result;
  $result +=$value;
}
$data = [100,50,10,5];
my_array_walk($data,$sum);
print $result; //165



//無名関数(変数に代入も可能その場合{};)
function my_array_walk(array $array,callble $func){
  foreach($array as $key => $value){
    $func($value,$key);
  }
}
$data=['a','b','c'];
my_array_walk($data,
  function($value,$key){
    print "{$key}:{$value}";
  }
);

//6.4.5 use命令
function my_array_walk(array $array,callble $func){
  foreach($array as $key => $value){
    $func($value,$key);
  }
}
$data=['a','b','c'];
$result=0;
my_array_walk($data,function(float $value,int $key)use(&$result){
  $result +=$value;
});
print $result;

//6.5 ジェネレータ
function myGen(){
  yield 'aiueo';
  yield 'kakikukeko';
  yield 'sasisuseso';
}
foreach(myGen as $value){
  print $value '<br/>';
}

//6.6 素数を求めるジェネレター
function getPrimes(){
  $num =2;
  while(true){
    if(isPrime($num)){yield $num;}
  }
}

function isPrime(int $value): bool{
  $prime = true;
  for($i=2; $i<=floor(sqrt($value));$i++){
    if($value % $i ===0){
      $prime = false;
      break;
    }
  }
  return $prime;
}

foreach(getPrime() as $prime){
  if($prime > 100){die();}
  print $prime;
}

//6.5.2 ジェネレータでreturn
function readLines(string $path){
  $i =0;
  $file = fopen($path,'rb') or die('ファイルが見つかりませんでした');
  while($line = fgets($file,1024)){
    $i++;
    yield $line;
  }
  fclose($file);
  return $i;
}

$gen =readLines('sample.dat');
foreach($gen as $line){
  print $line '<br>';
}
print "{$gen->getReturn()}行ありました";


//6.5.3yield from
function readFiles(array $files){
  foreach($files as $file){
    yield from readLines(file);
  }
}

function readLines(string $path){
  $file =fopen($path,'rb') or die('ファイルが見つかりませんでした');
  while($line = fgets($file,1024)){
    yield $line;
  }
  fclose($line);
}
foreach(readFiles(['sample.dat','sample2.dat']) as $line){
  print $line '<br/>';
}
?>