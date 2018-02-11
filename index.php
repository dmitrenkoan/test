<?php
/*$str = 'Hello Word!';
        //$res = ;
        echo strlen($str);
        echo intdiv(strlen($str),2);
        $length = strlen($str);

        for($i=0;$i<=intdiv($length,2);$i++) {
            $buf = $str[$i];
            $str[$i] = $str[$length - $i - 1];
            $str[$length - $i - 1] = $buf;
        }
        echo $str."<br/>";*/

/*$x = true;
if ($x == '1') {
    echo 'a';
}
if ($x == true) {
    echo 'b';
}
if((bool)$x === true){
    echo 'e';
}
if ($x === true) {
    echo 'c';
}
if((int)$x === true){
    echo 'd';
}

//echo $res;*/

/*error_reporting(E_ALL);
ini_set('display_errors','1');
ini_set('register_globals','on');

var_dump($x);

unset($x);
ini_set('register_globals','off');

var_dump($x);*/

class Test{
    private $var;
    function setMe($value){
        $this->var = $value;
    }
}

class More extends Test{
    public $var;
}

$oTest = new Test;
$oMore = new More;

echo $oTest->setMe('foo');

echo $oMore->setMe('foo');

echo $oMore->var;

echo 'test message';

echo 'test message2';

//echo $oTest->var;
