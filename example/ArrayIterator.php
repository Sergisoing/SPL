<?php

    $name = array(
        "zhang" => "san",
        "li" => "si",
        "zhang1" => "san2"
        );

    //原始遍历数组
    foreach ($name as $key => $value) {
        echo 'key: '. $key . 'value: '. $value ."\n";
    }
    echo  "\n";


    // 使用ArrayIterator遍历数组
    $obj = new ArrayObject($name);
    $it = $obj->getIterator();

    foreach ($it as $key => $value) {
        echo 'key: '. $key . 'value: '. $value ."\n";
    }

    echo  "\n";
    //重置指针
    $it->rewind();
    while ($it->valid()) {
        echo 'key: '. $it->key() . 'value: '. $it->current() ."\n";
        $it->next();
    }
    echo  "\n";

    //跳过某些元素进行打印
    $it->rewind();
    if ($it->valid()) {
        $it->seek(1);
        while ($it->valid()) {
            echo 'key: '. $it->key() . 'value: '. $it->current() ."\n";
            $it->next();
        }
    }
    echo  "\n";

    //排序打印
    $it->ksort();
    $it->rewind();
    while ($it->valid()) {
        echo 'key: '. $it->key() . 'value: '. $it->current() ."\n";
        $it->next();
    }


 ?>
