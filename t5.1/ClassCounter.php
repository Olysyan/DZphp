<?php
class ClassCounter{
    private static $counter=0;
    private static $call=0;
    function __construct()
    {
    ClassCounter::$counter++;
    }
    public function __destruct() {
        ClassCounter::$counter-= 1;
    }
    public function callMethod(){
        ClassCounter::$call++;
        static $count=0;$count++;
    }
    public static function getObjectsNum(): int{
        return ClassCounter::$counter;
    }
    public static function getMethodCallNum(): int{
        return ClassCounter::$call;
    }
}
$a = new ClassCounter();
echo ClassCounter::getObjectsNum().PHP_EOL; // 1
$a->callMethod();
echo ClassCounter::getMethodCallNum().PHP_EOL; //1
$a->callMethod();
echo ClassCounter::getMethodCallNum().PHP_EOL; //2
$b = new ClassCounter();
echo ClassCounter::getObjectsNum().PHP_EOL; // 2
$b->callMethod();

echo ClassCounter::getMethodCallNum().PHP_EOL; //3
unset( $a );
echo ClassCounter::getObjectsNum().PHP_EOL; // 1
