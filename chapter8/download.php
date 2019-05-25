<?php
header('Content-Type: application/octet-stream');
header('Content-Dispostion: attachment; filename = "flower.jpg');
print file_get_contents('./doc/flower.jpg');