<?php

    class Person implements Countable{

        public function count() {
            return 3;
        }

    }

    $p1 = new Person();
    echo count($p1);
