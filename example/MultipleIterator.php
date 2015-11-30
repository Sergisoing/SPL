<?php

$id_arr = new ArrayIterator(array(1,2,3));
$name_arr = new ArrayIterator(array('name1','name2', 'name3'));
$age_arr = new ArrayIterator(array('11', '22' ,'33'));
$mit = new MultipleIterator(MultipleIterator::MIT_KEYS_ASSOC);
$mit->attachIterator($id_arr, 'id');
$mit->attachIterator($name_arr, 'name');
$mit->attachIterator($age_arr, 'age');
foreach ($mit as $value) {
    print_r($value);
}

