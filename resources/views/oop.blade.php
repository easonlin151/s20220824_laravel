<?php
    echo 'hello oop view<br><br>';

    // $apple = 'apple';
    // $banana = 'banana';

    // $apple = "red";
    // $banana = 'yellow';

    $appleArr = [
        'name' => 'apple',
        'color' => 'red'
    ];

    class Fruit{
        public $name;
        public $color;

        // public function __construct($name,$color)
        // {
        //     $this->name = $name;
        //     $this->color = $color;
        // }
        public function update(...$arg){
            $this->name = $arg[0];
            $this->color = $arg[1];

            
        }

        public function dropFun(){
            echo "$this->name 壞掉了<br>";
        }
    }

    $fruitObj = new Fruit;

    $fruitObj->name = 'kiwikiwi';
    $fruitObj->color = 'green';
    $fruitObj->dropFun();
    // $appleObj = new Fruit('banana','yellow');
    // $appleObj2 = new Fruit('kiwi','green');
    // dd($appleObj2);
    // dd($appleObj);
    $fruitObj->update('奇異果','綠色');
    $fruitObj->dropFun();
    $fruitObj->update('蘋果','紅色');
    $fruitObj->dropFun();
    $fruitObj->update('banana','yellow');
    $fruitObj->dropFun();

    dd($fruitObj);



?>