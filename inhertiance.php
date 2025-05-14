<?php
// class for Transporter
class Transporter {
    public function deliver($location) {
        echo "Delivering goods to {$location}\n";
    }
}


// child class
class Truck extends Transporter {
    public function loadCrates(): void {
        echo "Crates loaded into trucks\n";
    }
}

class Drone extends Transporter {
    public function checkBattery(): void {
        echo "Battery level OK.\n";
    }
}

// now create object for truck
$truckWay = new Truck;
$truckWay->loadCrates();
$truckWay->deliver("Kathmandu");


// now create object for drone
$droneWay = new Drone;
$droneWay->checkBattery();
$droneWay->deliver("Khorsane");
