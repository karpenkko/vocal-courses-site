<?php
    // string variables
    $color = 'ginger';
    $pet = 'cat';
    echo $color.' '.$pet.'<br>';
    $word = $color . $pet;
    echo "word $word has ".strlen($word).' letters<br>';

    $animal = 'parrot';
    $pet = 'animal';
    echo $$pet.'<br><br>';

    //numeric variables
    $a = 11;
    $b = 5;
    $rem = $a % $b;
    echo "a = $a, b = $b<br>";
    echo "remainder from division(a/b) is $rem<br>";
    echo 'max number is '.max($a, $b).'<br>';
    echo 'a is '. gettype($a).'<br>';
    if (is_double($b))
        echo 'b is double<br><br>';
    else
        echo "b isn't double, probably integer<br><br>";

    //arrays
    $array = array(9, 17, 3, 5);
    foreach ($array as $key => $val){
        $val++;
        $array[$key] = $val;
        echo "[$key] = $val ";
    }

    sort($array);
    echo '<br>sorted array ';
    foreach($array as $key => $val)
        echo $val ." ";

    $list = array('name' => 'Mstislav', 'age' => 20, 'pet' => 'dog', 'married' => false);
    var_dump($list);
    print_r($list);

    $arr1 = array('Beds', 'empty!', 'No', 'note!', 'Car', 'gone-');
    echo '<br><br>'.implode(" ", $arr1).'<br>';
    $str = 'Beds empty! No note! Car gone-';
    print_r(explode(' ', $str));

    //comparison
    $val1 = true;
    $val2 = 1;
    if ($val1 === $val2)
        echo '<br><br>values have the same type<br><br>';
    elseif($val1 == $val2)
        echo '<br><br>values have same meaning<br><br>';
    else
        echo '<br><br>values are different<br><br>';

    //classes
    class Animal {
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        public function __destruct() {
            echo '<br>parent destructor<br>';
        }
        public function show() {
            echo "Animal: {$this->color} {$this->name}";
        }
    }

    class Dog extends Animal {
        public $paws;
        public function __construct($name, $color, $paws) {
            parent::__construct($name, $color);
            $this->paws = $paws;
        }

        public function __destruct() {
            parent::__destruct();
            echo 'child destructor<br><br>';
        }
        public function show() {
            parent::show();
            echo " has {$this->paws} paws<br>";
        }
    }

    $puppy = new Dog("Sirius", "black", 4);
    $puppy->show();


    //singleton
    class Doggy {

        private static $instance = null;
        private $name;
        private function __construct() {}
        public static function getInstance() {
            if (self::$instance === null) {
                self::$instance = new Doggy();
            }
            return self::$instance;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }

    $name = "Sirius Black";
    Doggy::getInstance()->setName($name);
    echo 'Name: ', Doggy::getInstance()->getName();
?>