<?php

// class user
class user {
    public function getName(): string {
        return "Bishal";
    }
}

// class productModels
class productModel {
    public function getProduct(): string {
        return "toy";
    }
}


// for user
$user = new user;
echo $user->getName();

// gap
echo "\n";

// for productModels
$productModel = new productModel;
echo $productModel->getProduct();









