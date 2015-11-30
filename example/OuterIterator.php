<?php


class OuterImpl extends IteratorIterator{

    public function current() {
        return parent::current() . '_tail';
    }

    public function key () {
        return parent::key() . 'key';
    }
}


$s = new ArrayIterator(array('1','2','3','4'));

$obj = new OuterImpl($s);
foreach ($obj as $key => $value) {
    echo $key . '======' . $value , "\n";
}
