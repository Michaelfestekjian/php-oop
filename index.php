<?php

//CLASSES EXAMPLE 1

class  cat   {
class body
class body
class body
    
}


class  orange   {
class body
class body
class body
    
}


class  person   {
class body
class body
class body
    
}

$cat1 = new cat();
$cat2 = new cat();

        
$person1 = new person();
$person2 = new person();
        
$orange1 = new orange();
$orange2 = new orange();

       
//PROPERTIES EXAMPLE 1
        
class orange {
public $name = “default name”;
public $breed = “best breed”;
public $gender = “male”;
public $price = 0;
}

class person {
public $name = “default name”;
public $breed = “best breed”;
public $gender = “male”;
public $price = 0;
}

class cat {
public $name = “default name”;
public $breed = “best breed”;
public $gender = “male”;
public $price = 0;
}

$dog1 = new Dog();
print $dog1­>name;
// default name

        
$cat1 = new cat();
print $cat1­>scooter;
// default name

        
$orange1 = new orange();
print $orange1­>orange;
// default name
        
public function myMethod( $argument, $another) {
// stuff
}

public function myMethod( $argument, $another) {
// stuff
}

public function myMethod( $argument, $another) {
// stuff
}


_____________________________________________________________________________________________________________________________
//EXAMPLES FOR LECTURE 2

// EXAMPLE 1
class cat {
public $firstName;
public $lastName;
public $breed;
function __construct($title, $firstName, $lastName, $breed) {
$this­>firstName = $firstName;
$this­>lastName = $lastName;
$this­>breed = $breed;
}
function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;
}
}


class person {
public $firstName;
public $lastName;
public $breed;
function __construct($title, $firstName, $lastName, $breed) {
$this­>firstName = $firstName;
$this­>lastName = $lastName;
$this­>breed = $breed;
}
function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;
}
}

class lion {
public $firstName;
public $lastName;
public $breed;
function __construct($title, $firstName, $lastName, $breed) {
$this­>firstName = $firstName;
$this­>lastName = $lastName;
$this­>breed = $breed;
}
function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;
}
}
