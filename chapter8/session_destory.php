<?php
$_SESSION = [];
//セッションクッキーがある場合には破棄
if(isset($_COOKIE[session_name()])){
  $cparam = session_get_cookie_params();
  setcookie(session_name(),'',time() - 3600,
  $cparam['path'],$cparam['domain'],$cparam['secure'],$cparam['httponly']);
}

session_destroy();