<?php
include_once 'Chicken.php';
include_once 'Tiger.php';
include_once 'Orange.php';
include_once 'Apple.php';
$dongtao=new Chicken();
echo $dongtao->makeSound()."\n";
echo $dongtao->howtoEat()."<br/>";
$hobao = new Tiger();
echo $hobao->makeSound()."<br/>";
$camcanh=new Orange();
echo $camcanh->howtoEat()."<br/>";
$tanpie=new Apple();
echo $tanpie->howtoEat().'<br/>';
