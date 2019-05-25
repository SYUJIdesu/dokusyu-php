<?php
//認証ユーザー名が送信されているかの判定
if(!isset($_SERVER['PHP_AUTH_USER'])){
  //認証ユーザーが未送信の場合はダイアログを発行
  header('HTTP/1.1 401 Unauthorized');
  header('WWW-Authenticate: Basic realm="SelfPHP"');
  print 'この画面へのアクセスは認められませんでした';
  die();
  //認証ユーザーが送信されている場合はユーザー名パスワード名を確認
}else{
  //認証の成否応じて対応するメッセージを表示
  if($_SERVER['PHP_AUTH_USER']==='admin.usr' && $_SERVER['PHP_AUTH_PW']==='admin.pw'){
    print '正しく認証されました';
  }else {
    print 'ユーザー名、またはパスワードが間違ってます。';
  }
}