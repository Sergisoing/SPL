<?php


    //文件信息
    $file = new SplFileInfo('./AppendIterator.php');
    echo 'path: ' . $file->getRealpath();

    //读取文件内容
    $fileObj = $file->openFile();
    while ($fileObj->valid()) {
        echo $fileObj->fgets();
    }
    $fileObj = null;
    $file = null;
