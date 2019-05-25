<?php

//DataTime
$now = new DateTime();
print $now->format('Y年m月d日　H:i:s');

$now = new DateTime('2016/5/15 10:58:31');
print $now->format('Y年m月d日　H:i:s');



//DateTimeZone
$dt1 = new DateTime(null, new DateTimeZone('Asia/Ulan_Bator'));
print $dt1->format('Ymd hi');

$dt2 = new DateTime(null,new DateTimeZone('America/Virgin'));
print $dt2->format('Ymd hi');
$dt3 = new DateTime(null,new DateTimeZone('Europe/London'));
print $dt3->format('Ymd hi');

//個別に設定
$now = new DateTime();
$now->setDate(2016, 4, 15);
$now->setTime(14, 35, 59);
print $now->format('Y年m月d日　H:i:s');

//タイムスタンプ値
$now = new DateTime();
$now->setTimestamp(time());
print $now->format('Y,m,d H,i,s');

//format メゾット
$now =new DateTime();
print $now->format('Y,m,d, (D) g:i:s:a');
print $now->format('当月の日数:t日');
print $now->format('L')? '潤年ですか？':'閏年ではない';
print $now->format(DateTime::RSS);

//cfeateFromFormat
$fmt = 'Y年m月d日 H時i分s秒';
$time = '2016年08月05日 11時58分32秒';
$dt = DateTime::createFromFormat($fmt,$time);
print $dt->format('Y-m-d H:i:s');

//add/subメゾット
$dt = new DateTime('2016/5/15 10:58:11');
print $dt->format('Y,m,d H:i:s');//2016 0515 1058

$dt->add(new DateInterVal('P1YT10H'));
print $dt->format('Y,m,d H,i');//2017 0515 2058

$dt->sub(new DateInterVal('P3MT20M'));
print $dt->format('Y,m,d H,i');////2017 0215 2038

//diff　差分
$dt1 = new DateTime('2016/5/15 10:58:31');
$dt2 = new DateTime('2016/12/04');
$interval = $dt1->diff($dt2, true);
print $interval->format('%Y年%M月%D日 %H時%I分%S日');



//日付、時刻関数
function calender($year,$month){
  for($i=0;$i<32;$i++){
    if(checkdate($month,$i,$year)){
      print "{$i} &nbsp;";
    }
  }
}
print '2016年二月のカレンダー';
calender(2016,2);