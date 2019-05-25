<?php

mb_internal_encoding('UTF-8');
$str='WINGSプロジェクト';
print mb_strlen($str);//11 文字列の長さを測る


print strtolower($str);//小文字に変換
print strtoupper($str);//大文字に変換
print ucfirst($str);//先頭を大文字に
print lcfirst($str);//先頭を小文字に
print ucwords('wings project');//区切りを大文字

//マルチバイトの時
mb_strtolower($str);


mb_substr($str,5,2)//部分文字列取得
mb_substr($str,5);
mb_substr($str,5,-4);
mb_substr($str,-6,2);



str_replace('プロジェクト','project',$str,$cnt);//部分文字列を置換する
"{$cnt}個置き換えました";

$str=['PHPは良い言語です'];
$src=['PHP','良い'];
$rep=['PHP7','素晴らしい'];
print_r(str_replace($src,$rep,$str,$cnt));
"{$cnt}個置き換えました";



$data='リオとニンザブロウとナミとリンリン';
explode('と',$data);//文字列を特定の区切り文字列で分解する
explode('や',$data);
explode('と',$data,2);
explode('と',$data,-2);



mb_internal_encoding('UTF-8');
$str='にわにはにわにわといりがいる';//12
//mb_strpos();特定の文字列を検索
mb_strpos($str,'にわ')//0
mb_strpos($str,'にわ',2)//4
mb_strpos($str,'かに')//false
mb_strrpos($str,'にわ')//6
mb_strrpos($str,'にわ',-8)//4

if(mb_strpos($str,'にわ')!=false){
    print '結果';
}
//では戻り値0である場合=,!=falseとみなす,だから!==を使う


//文字列を整形する
printf('%sと%sです','a','i')//aとiです
printf('売上平均:%+0-8.3f',0.198765);//売上平均+0.199
printf("売上平均:%'*10.3e",0.198765);//**1.988e-1
printf('%.6sは%sです','ニンザブロウ','ハムスター')//ニンはハムスターです
printf('%2sは%1sです','ニンザブロウ','ハムスタ-')//ハムスターはニンザブロウです



//文字列を変換する
mb_internal_encoding('UTF-8');
$str='WINGSプロジェクト';
mb_convert_kana($str,'RKV')//WINGSプロジェクト全角



//文字エンコーディングを変換する
mb_convert_encoding('こんにちは','EUC-JP','UTF-8,SJIS,JIS');

//配列やオブジェクトの複合型の場合
$data=['wada','sugiyama','tanaka','nisiyama','yamato'];
mb_convert_variables('EUC-JP','UTF-8,SJIS,JIS',$data);
print_r($data);




//電子メールを送信する
$to='wings@example.com';
$subject='PHP';
$msg='こんにちは';
$headers="From:user@example.com\n";
$headers.="Cc:yamada@example.com\n";
$headers.="X-Mailer:PHP\n";
if(mb_send_mail($to,$subject,$msg,$headers)){
    print '送信成功';
}else{
    print '送信失敗';
}



//配列の要素数を取得
$data=[1,2,3,4,5];
print count($data);//5

$data=[
    [1,2],
    [1,2],
    [1,2]
];
print count($data);//3
print count($data,COUNT_RECURSIVE);//入れ子も



//配列の連結
$ary1=[1,3,5];
$ary2=[2,3,6];
$result=array_merge($ary1,$ary2);
print_r($result);//1,3,5,2,3,6

$assoc1=['Apple'=>'Red','Orange'=>'Yellow','Melon'=>'Green'];
$assoc2=['Grape'=>'Purple','Apple'=>'Green','Strawberry'=>'Red'];
$result=array_merge($assoc1,$assoc2);
print_r($result);
//連想配列のキーは後者が優先、インデックス番号は新たな番号

$result=array_merge_recursive($assoc1,$assoc2);
print_r($result);



//配列の各要素を結合する
$data=['PHP','Perl','Ruby','Python','JavaScript'];
implode(',',$data);//PHP,Perl,Ruby,Python,JavaScript



//配列の先頭・末尾に要素を追加・削除
$data=['PHP','Perl','Ruby','Python','JavaScript'];
array_push($data, 'Java');//末尾に追加
array_pop($data);//末尾から削除
array_shift($data)//先頭から削除
array_unshift($data,'HTML','CSS');//先頭に追加



//配列に複数要素を追加、置換、削除
$data=['PHP','Perl','Ruby','Python','JavaScript'];
array_splice($data,2,3,['HTML','CSS']);
array_splice($data,-3,-2,['a','b']);
array_splice($data,3)//引数repを省略する場合指定された要素数を削除
array_splice($data,1,0,['c'])//挿入す場合引数に0を



//配列から特定範囲の要素を取得する
$data=['PHP','Perl','Ruby','Python','JavaScript'];
array_slice($data,2,3);
array_slice($data,2,3,true);//trueの場合元々のインデックス番号を引き継ぐ
array_slice($data,4);
array_slice($data,-4,-3);



//配列の内容を検索する
$data=['PHP','Perl','Ruby','Python','JavaScript',15];
array_search('PHP',$data);
array_search('Ruby',$data);
array_search('php',$data);//大文字と小文字を区別する。
array_serach(15,$data);//==で値を比べる。数値と文字列は等しいとみなす。
array_search(15.$data,true);//厳密に比べたい場合はtrueにするデフォはfalse



//配列の特定の要素が存在するか確認する
$data=['PHP','Perl','Ruby','Python','JavaScript'];
if(!in_array('html',$data)){
    print '見つかりませんでした';
}



//配列の内容を並び替える
$data=['PHP','Perl','Ruby','Python','JavaScript'];
sort($data,SORT_STRING);
rsort($data,SORT_STRING);
$data2=['PHP'=>1,'Perl'=>2,'Ruby'=>3,'Python'=>4,'JavaScript'=>5];
sort($data2,SORT_NUMERIC);
arost($data2,SORT_NUMERIC);
ksort($data2,SORT_NUMERIC);
sort($data,SORT_NATURAL);//より人間的なソート



//usort 無名関数の後に



//正規表現
$str='0399-88-9785,0398-99-1234,687-1109';
if(preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/',$str,$data)){
    print $data[0];//全体文字列
    print $data[1];//サブマッチ文字列
    print $data[2];//サブマッチ文字列
    print $data[3];//サブマッチ文字列
}

if(preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/',$str,$data,PREG_OFFSET_CAPTURE)){
    print_r($data);
}

//全てのマッチ文字列を取得する
$str='0399-88-9785,0398-99-1234,687-1109';
if(preg_match_all('/([0-9]){2,4}-([0-9]){2,4}-([0-9]){4}/',$str,$data,PREG_SETORDER)){
    foreach($data as $item){
        print $item[0];
        print $item[1].$item[2].$item[3];
    }
}



//正規表現で文字列を置換する
$msg= <<<EOD
http:://www.wings.msn.to/
EOD;
preg_replace('|http(s)?://([\w-]+\.)+[\w-]+(/[\w- ./?%=]*)?|','<a href="$0></a>',msg);



//正規表現で文字列を分割する
$today='2016-05-14';
$result=preg_split('|[/.\-]|',$today);
print $result[0];//2016

$today='2016-05-14';
$result=preg_split('|[/.¥-]|',$today,-1,PREG_SPLIT_DELIM_CAPTURE);



//正規表現パターンの装飾子
$str="7人の小人と白雪姫\n101";
if(preg_match_all('/^[0-9]/{1,}/m',$str,$data)){
    foreach($data as $item){
        print "マッチング結果:{$item}";
    }
}



//preg_replace_callback 無名関数以降



//テキストファイルへの書き込み
$data[]=date('Y/m/d H:i:s');
$data[]=$_SERVER['SCRIPT_NAME'];
$data[]=$_SERVER['HTTP_USER_AGENT'];
$data[]=$_SERVER['HTTP_REFERER'];

$file = @fopen('access.log','ab') or die('開けれませんでした');

flock($file,LOCK_EX);

fwrite($file, implode("\t",$data)."\n");

flock($file,LOCK_UN);

fclose($file);
print 'アクセスログを記録しました'；



//変数破棄
$str="代入";
unset($str);//null


//変数のデータ型を判定
is_int(101);
is_unmeric('101');
is_float(1.5E8);
is_resource(fopen('access.log','rb');
is_unll('');