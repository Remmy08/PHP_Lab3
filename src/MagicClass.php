<?php
namespace App;

class MagicClass {
    public function __construct() {
        echo "Вызван магический метод: __construct()<br>";
    }

    public function __destruct() {
        echo "Вызван магический метод: __destruct()<br>";
    }

    public function __get($name) {
        echo "Вызван магический метод: __get($name)<br>";
    }

    public function __set($name, $value) {
        echo "Вызван магический метод: __set($name, $value)<br>";
    }

    public function __isset($name) {
        echo "Вызван магический метод: __isset($name)<br>";
        return false;
    }

    public function __unset($name) {
        echo "Вызван магический метод: __unset($name)<br>";
    }

    public function __call($name, $arguments) {
        echo "Вызван магический метод: __call($name, " . implode(', ', $arguments) . ")<br>";
    }

    public static function __callStatic($name, $arguments) {
        echo "Вызван магический метод: __callStatic($name, " . implode(', ', $arguments) . ")<br>";
    }

    public function __toString() {
        echo "Вызван магический метод: __toString()<br>";
        return "MagicClass object";
    }

    public function __invoke($value) {
        echo "Вызван магический метод: __invoke($value)<br>";
    }

    public function __sleep() {
        echo "Вызван магический метод: __sleep()<br>";
        return [];
    }

    public function __wakeup() {
        echo "Вызван магический метод: __wakeup()<br>";
    }

    public function __clone() {
        echo "Вызван магический метод: __clone()<br>";
    }

    public function __debugInfo() {
        echo "Вызван магический метод: __debugInfo()<br>";
        return ['debug' => 'info'];
    }
}