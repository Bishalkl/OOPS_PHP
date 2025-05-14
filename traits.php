<?php
// Syntax of Trait in PHP


// Define Trait
trait Logger {
    public function log($message) {
        echo "[LOG]: {$message}\n";
    }
}

trait TimeStamp {
    public function currentTimeStamp(){
        return date("y-m-d H:i:s");
    }
}

// User Trait in a class 
class User {
    use Logger, Timestamp;
    private $name;

    public function __constructor($name) {
        $this->name = $name;
        $this->log("user {$this->name} created at ". $this->currentTimeStamp());
    }
}


// Another class using same traits 
class Admin {
    use Logger;

    public function deleteUser($userName) {
        $this->log("User {$userName} deleted");
    }
}


// Create objects and test
$user = new User("Bishal");
$admin = new Admin();
$admin->deleteUser("Bishal");

// if both traits has same method name then we can solve the conflict using insteadof and as


trait A {
    public function hello(): void {
        echo "Hello from A\n";
    }
}

trait B {
    public function hello(): void {
        echo "Hello from B\n";
    }
}

class Test {
    use A, B {
        B::hello insteadOf A; // for B method
        A::hello as helloFromA; // for A method
    }
}


// create object
$test = new Test();
$test->hello(); //output from b
$test->helloFromA(); //output from a 