<?php
    class User {
        public $name;
        public $age;

        // Run when an object is created
        public function __construct($name, $age){
            echo 'class' . __CLASS__ . ' instantiated<br>';
            $this->name = $name;
            $this->age = $age;
        }

        public function sayhello(){
            return $this->name . ' Says Hello';
        }

        // called when no other refarence to a certain object
        //used for cleanup, closing connections, etc
        public function __destruct()
        {
            echo 'destruct ran...';
        }
    }

    $user1 = new User('Yu', 38);
    echo $user1->name . ' is ' . $user1->age;
    echo '<br>';
    echo $user1->sayhello();

    echo '<br>';

    $user2 = new User('ninja', 100);
    echo $user2->name . ' is ' . $user2->age;
    echo '<br>';
    echo $user2->sayhello();
