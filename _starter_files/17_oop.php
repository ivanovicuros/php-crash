<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way.
  OOP consists of classes that can hold "properties" and "methods".
  Objects can be created from classes.
*/

class User {
// Properties are just variables that belong to a class

// Access Modifiers: public, private, protected
// public - can be accessed from anywhere
// private - can only be accessed from inside the class
// protected - can only be accessed from inside th class and by inheriting classes
  public $name;
  public $email;
  public $password;

// A constructor is a method that runs when an object is created from the class
// We pass in properties to the constructor from the outside.
public function __construct($name, $email, $password) {
  $this->name = $name;
  $this->email = $email;
  $this->password = $password;
}

  // Methods is a function that belongs to a class
  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }

   // Destructor is called when an object is destroyed or the end of the script.
   function __destruct() {
    echo "The user name is {$this->name}.";
  }
}

// Instantiate a new user
$user1 = new User('Brad', 'bvra@gmail.com', 'abc');
$user2 = new User('Jim', 'jim@gmail.com', 'jim');

// echo $user1->email;
// echo $user2->name;

/* ----------- Inheritance ---------- */

/*
  Inheritance is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

class Employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

$employee = new Employee('Sarah', 's@gmail.com', 'password', 'manager');

echo $employee->getTitle();