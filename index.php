<?php
  // Declare the car class
  class Car {
    // Properties of the class
    public $name;
    public $color = "red";
    public $hasSunRoof = true;

    // Method that returns text
    public function beep() {
      return "beep";
    }
  }

  // Creating Instances of the class
  $bmw = new Car();
  $mercedes = new Car();

  // Echo values from the class
  echo $bmw -> color;
  echo "<br />";
  echo $mercedes -> color;
  echo "<br />";

  // Alter some values
  $bmw -> color = "blue";
  $bmw -> name = "BMW";
  $mercedes -> name = "Mercedes Benz";

  // Echo the new altered values from the class
  echo $bmw -> color;
  echo "<br />";
  echo $mercedes -> color;
  echo "<br />";
  echo $bmw -> name;
  echo "<br />";
  echo $mercedes -> name;
  echo "<br />";

  // Accessing the method
  echo $bmw -> beep(); // Beep
?>