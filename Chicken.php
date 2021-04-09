<?php
include_once 'Animal.php';
include_once 'Edible.php';
class Chicken extends Animal implements Edible {
    public function makeSound()
    {
        return 'con ga keu Cluk cluk';
    }
    public function howtoEat()
    {
        return 'muon an thi phai vat long';
    }
}