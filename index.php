<?php
  // Declare the car class
  class Car {
    // Properties of the class
    public $name;
    public $color = "red";
    public $hasSunRoof = true;
    public $fuelTank;

    // Add fuel to the fuel tank when we fill it
    public function fill($float) {
      $this -> fuelTank += $float;

      return $this;
    }

    // Subtract fuel from the tank as it drives
    public function empty($float) {
      $miles = $float;
      $litres = $miles/50;
      $this -> fuelTank -= ($litres);

      return $this;
    }

    // Method that returns text
    public function beep() {
      return "I am a <i>" . $this -> name . "</i>, and I am <i>" . $this -> color . "</i>";
    }

    // Private Practice
    // Making a private property
    private $model;

    // Making a setter to allow access from outside the class
    public function setModel($model) {
      // validating that allowed models make it through
      $allowedModels = array("430", "A-Class");

      if (in_array($model, $allowedModels)) {
        $this -> model = $model;
      } else {
        $this -> model = "model not in list";
      }
    }

    // Making a getter to get the value after
    public function getModel() {
      return "This car model is " . $this -> model . ".";
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
  //echo $bmw -> beep(); 
  //echo "<br>";
  echo $mercedes -> beep(); 
  echo "<br>";

  // Add 10 litres of fuel then drive 20 miles
  // Show how many litres are left
  $fuelTank = $bmw -> fill(10) -> empty(20) -> fuelTank;

  // Echo results
  echo "The number of litres left in the tank: " . $fuelTank . "l.";
  echo "<br>";
  
  // Using getter and setters
  $mercedes -> setModel("A-Class");
  echo $mercedes -> getModel();
  echo "<br>";
?>