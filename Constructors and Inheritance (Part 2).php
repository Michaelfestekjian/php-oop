       <?php

        class iphone {
        public $firtname;
        public $lastname;
        public $scientificName;
        public $company;
        public $weight;
        
        function  __construct($scientificName, $firstName, $lastName, $company, $weight, $ring) {
                $this->scientificName = $scientificName;
                $this->firstName = $firstName;
                $this->lastName = $lastName;
                $this->lastName = $company;
                $this->company = $weight;
                $this->ring = $ring;
                
        }
        
        function getname() {
        return “This is my“ . $this->firstName.
            “ and last ” . $this->lastName .
            “ and this is my scientificname“ . $this->scientificName . “ .”;
            
            }
}
class cat extends iphone{
    function  __construct($scientificName, $firstName, $lastName, $company, $weight, $ring){
        parent:__construct($scientificName, $firstName, $lastName, $company, $weight);
        $this->ring = $ring;
        }
        function greet() {
        return $this->ring;
        
        $iphone = new iphone(“iphone”, “jo”, “white”, “apple/verzion”, 15, true);
        print “iphone 1 is a ” . $iphone>getName();
                ?>
_______________________________________________________________________________________________________________________________________________
    
        <?php
        
        class lion {
        public $firtname;
        public $lastname;
        public $scientificName;
        public $gender;
        public $weight;
        
        function __construct($scientificName, $firstName, $lastName, $gender, $weight, $rarr,) {
                $this->scientificName = $scientificName;
                $this->firstName = $firstName;
                $this->firstname = $dirstname;
                $this->lastName = $lastName;
                $this->lastName = $weight;
                $this->gender = $gender;
                
        }
        
        function getname() {
        return “This is my“ . $this->firstName .
            “ and last ” . $this->lastName .
            “ and this is my scientificname“ . $this->scientificName . “ .”;
            
            }
}
class cat extends lion{
    function  __construct($scientificName, $firstName, $lastName, $gender, $weight, $rarr){
        parent:__construct($scientificName, $firstName, $lastName, $gender, $weight);
        $this->rarr = $rarr;
        }
        function greet() {
        return $this->rarr;
        
        $lion = new lion(“lion”, “jo”, “white”, “male”, 15, true);
        print “lion 1 is a ” . $lion>getName();
        
        ?>
        
_______________________________________________________________________________________________________________________________________________________________
<?php

    class headphones {
        public $firtname;
        public $lastname;
        public $scientificName;
        public $brand;
        public $weight;
        
        function __construct($scientificName, $firstName, $lastName, $brand, $weight, $music,) {
                $this->scientificName = $scientificName;
                $this->firstName = $firstName;
                $this->firstname = $dirstname;
                $this->lastName = $lastName;
                $this->lastName = $weight;
                $this->company = $brand;
                
        }
        
        function getname() {
        return “This is my“ . $this->firstName .
            “ and last ” . $this->lastName .
            “ and this is my scientificname“ . $this->scientificName . “ .”;
            
            }
}
class cat extends headphones{
    function  __construct($scientificName, $firstName, $lastName, $company, $weight, $music){
        parent:__construct($scientificName, $firstName, $lastName, $brand, $weight);
        $this->music = $music;
        }
        function greet() {
        return $this->music;
        
        
        $headphones = new headphones(“headphones”, “jo”, “white”, “apple”, 15, true);
        print “headphones 1 is a ” . $cat>getName();
                ?>