<?php
  // Declare the car class
  class Car {
    // Properties of the class
    public $name;
    public $color = "red";
    public $hasSunRoof = true;

    // Method that returns text
    public function beep() {
      return "I am a <i>" . $this -> name . "</i>, and I am <i>" . $this -> color . "</i>";
    }
  }

  // Creating Instances of the class
  $bmw = new Car();
  $mercedes = new Car();

  // Alter properties
  $bmw -> name = "BMW";
  $bmw -> color = "green";

  $mercedes -> name = "Mercedes Benz";
  $mercedes -> color = "purple";

  // Accessing the method
  echo $bmw -> beep(); 
  echo "<br>";
  echo $mercedes -> beep(); 
?>