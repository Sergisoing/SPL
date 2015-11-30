<?php

date_default_timezone_set('PRC');
$it = new FilesystemIterator('.');
foreach ($it as $finfo) {
    echo date('Y-m-d H:i:s',$finfo->getMTime()) . "\n";
}
