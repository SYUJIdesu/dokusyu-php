<?php
//header('Location: http://dokusyu.com/chapter8/req_headers.php');

header('Location: http://'.$_SERVER['HTTP_HOST']
 .dirname($_SERVER['PHP_SELF']).'/req_headers.php');