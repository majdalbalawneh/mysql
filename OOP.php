<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }
  function get_fruit() {
    return ("fruit name: ".$this->name."<br>".
    "<br>"."fruit color: ".$this->color);
  }

}

$apple = new Fruit("Apple", "red");
echo $apple->get_fruit();
?>