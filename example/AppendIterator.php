<?php


$a_arr = new ArrayIterator(array('1','2','3','4'));
$b_arr = new ArrayIterator(array('5','6','7','8'));
$it = new AppendIterator();
$it->append($a_arr);
$it->append($b_arr);
foreach ($it as $key => $value) {
    echo $value;
}
