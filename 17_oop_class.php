<?php

    /* --- Object Oriented Programming -- */

    /*
    From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
    */

    class User {
        // Properties are just variables that belong to a class.
        // Access Modifiers: public, private, protected
        // public - can be accessed from anywhere
        // private - can only be accessed from inside the class
        // protected - can only be accessed from inside the class and by inheriting classes

        public $name;
        public $email;
        public $password;

        // The constructor is called whenever an object is created from the class.
        // We pass in properties to the constructor from the outside.

        public function __construct($name, $email, $password){
            // We assign the properties passed in from the outside to the properties we created inside the class.
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }



        function set_name ($name){
            $this->name = $name;
        }

        function get_name (){
            return $this->name;
        }

    }


    // inheritence
    class Employee extends User{
        public $title;
        public function __construct($name, $email, $password, $title)
        {
            parent::__construct($name, $email, $password); 
            $this->title = $title;         
        }

        public function get_title(){
            return $this->title;
        }
    }

    // instantiate a user object
    // $user1 = new User('alamin', 'alamin@gmail.com', '123546');

    // echo $user1->name;
    // echo $user1->email;
    // echo $user1->password;

    $employee1 = new Employee('alamin', 'alamin@gmail.com', '123546', 'Manager');

    echo $employee1->get_title();
    

    


?>