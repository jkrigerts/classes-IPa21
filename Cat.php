<?php

require_once("Animal.php");

class Cat extends Animal {

  public function __construct($name, $age) {
    parent::__construct($name, $age);
    echo "Puss In Boots";
  }

  static function eat() {
    echo "I like whiskas";
  }
}

