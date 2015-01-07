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
public $name = “orange”;
public $color = “orange”;
public $size = “small”;
public $price = 0;
}

class person {
public $name = “michael”;
public $nationality = “armenian”;
public $gender = “male”;
public $size = tall;
}

class cat {
public $name = “skooter”;
public $breed = “best breed”;
public $gender = “male”;
public $color = white;
}

$cat1 = new cat();
print $cat1­>skooter;
// default name

        
$person1 = new person();
print $person1­>scooter;
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
public $skooter;
public $dadada;
public $white;
function __construct($title, $skooter, $dadada, $white) {
$this­>firstName = $skooter;
$this­>lastName = $skooter;
$this­>color = $white;
}
function getName() {
return “{$this­>skooter}” .
“{$this­>dadada}”;
}
}


class person {
public $michael;
public $festekjian;
public $breed;
function __construct($title, $michae;, $Festekjian, $breed) {
$this­>firstName = $michael;
$this­>lastName = $festekjian;
$this­>breed = $breed;
}
function getName() {
return “{$this­>michael}” .
“{$this­>festekjian}”;
}
}

class lion {
public $spike;
public $bababa;
public $breed;
function __construct($title, $spike, $bababa, $breed) {
$this­>firstName = $spike;
$this­>lastName = $bababa;
$this­>breed = $breed;
}
function getName() {
return “{$this­>spike}” .
“{$this­>bababa}”;
}
}


$cat1 = new (“scooter”, “dada”, “uglycat”);
print “cat 1: {$cat1­>getName()}\n;


$orange1 = new orange(“orange”, “baba”, “fresh orange”);
print “orange 1: {$orange1­>getName()}\n;


$person1 = new person(“kobe”, “coco”, “uglyperson”);
print “person 1: {$person1­>getName()}\n;
