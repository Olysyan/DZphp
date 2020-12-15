<?php
class ClassBuffer{
    /**
* Добавление элемента наверх стека. будет успешно, если стек еще не заполнен
* если стк переполнен, элемент добавлен не будет
* @param $item - элемент, который нужно добавить
* @return bool - true если элемент добавлен в стек, иначе false
*/
private static $stack;
private static $limit;
public function __construct($limit) {
    // инициализация стека
    self::$stack = array();
    // устанавливаем ограничение на количество элементов в стеке
    self::$limit = $limit;
    if (self::$limit < 0 || gettype(self::$limit) != 'integer')throw new TypeError;
}
public function addItem($item ): bool{
    // проверяем, не полон ли наш стек
    if (count(self::$stack) < self::$limit) {
        // добавляем новый элемент в начало массива
        array_unshift(self::$stack, $item);
        return true;
    } else {return false; }
}
/**
* Вытащить верхний элемент из стека и вернуть его
* Если стек пустой, вернет NULL
* @return mixed верхний элемент их буфера
*/
public function getItem(){
    if (empty(self::$stack)) {
        // проверка на пустоту стека
      return NULL;
  } else {
        // Извлекаем первый элемент массива
        return array_shift(self::$stack);}   
}
/**
* Вернет общий размер стека (максимальный)
* @return int - максимальный размер стека
*/
public function getBufferSize(): int{return self::$limit;
}
/**
* Вернет количество элементов, которые сейчас находятся в стеке
* @return int - количество элементов в стеке
*/
public function getCurrentBufferSize(): int{return count(self::$stack);
}
}
$buffer = new ClassBuffer(5); // создать стек на 5 элементов
echo $buffer->getBufferSize().PHP_EOL; // 5
echo $buffer->getCurrentBufferSize().PHP_EOL; // 0
$buffer->addItem(10).PHP_EOL;
echo $buffer->getCurrentBufferSize().PHP_EOL; // 1
$buffer->addItem(20).PHP_EOL;
$buffer->addItem(30).PHP_EOL;
echo $buffer->getCurrentBufferSize().PHP_EOL; // 3
$buffer->addItem(40);
$buffer->addItem(50); // true
$buffer->addItem(60); // false
echo $buffer->getCurrentBufferSize().PHP_EOL; // 5
echo $buffer->getItem().PHP_EOL; // 50
echo $buffer->getCurrentBufferSize().PHP_EOL; // 4
echo $buffer->getItem().PHP_EOL; // 40
echo $buffer->getCurrentBufferSize().PHP_EOL; // 3
$buffer->getItem();
$buffer->getItem();
$buffer->getItem();
echo $buffer->getCurrentBufferSize().PHP_EOL; //0