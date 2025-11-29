<?php
require 'vendor/autoload.php';
use App\MagicClass;

echo "<h2>Демонстрация магических методов</h2>";

echo "<h3>1. Создание объекта (__construct):</h3>";
$obj = new MagicClass();

echo "<h3>2. Обращение к несуществующему свойству (__get):</h3>";
$test = $obj->undefinedProperty;

echo "<h3>3. Установка несуществующего свойства (__set):</h3>";
$obj->newProperty = "value";

echo "<h3>4. Проверка существования свойства (__isset):</h3>";
isset($obj->someProperty);

echo "<h3>5. Удаление свойства (__unset):</h3>";
unset($obj->someProperty);

echo "<h3>6. Вызов несуществующего метода (__call):</h3>";
$obj->undefinedMethod("param1", "param2");

echo "<h3>7. Вызов несуществующего статического метода (__callStatic):</h3>";
MagicClass::staticUndefinedMethod("static_param");

echo "<h3>8. Преобразование объекта в строку (__toString):</h3>";
echo $obj . "<br>";

echo "<h3>9. Вызов объекта как функции (__invoke):</h3>";
$obj("invoke_parameter");

echo "<h3>10. Клонирование объекта (__clone):</h3>";
$obj2 = clone $obj;

echo "<h3>11. Сериализация (__sleep) и десериализация (__wakeup):</h3>";
$serialized = serialize($obj);
$unserialized = unserialize($serialized);

echo "<h3>12. Вывод отладочной информации (__debugInfo):</h3>";
var_dump($obj);

echo "<h3>13. Уничтожение объектов (__destruct):</h3>";
// __destruct вызовется автоматически при завершении скрипта