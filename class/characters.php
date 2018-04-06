<?php

// Class Characters

class Characters{

  private $Name;
  private $intelligence;
  private $strength;
  private $durability;
  private $power;
  private $combat;
  private $Life = 100;


function __construct($Name, $intelligence,$strength,$speed, $durability,$power,$combat){

      $this->intelligence = $intelligence;
      $this->strength = $strength;
      $this->durability = $durability;
      $this->power = $power;
      $this->combat = $combat;

}

public function Attack(){

      $Damage = ($this->strength*5)/100;
      return $Damage;
}

public function Defense($Damage){

  $this->Life = $this->Life - ($this->durability * $Damage)/100;

}

public function Potion(){
  $this->Life = $this->Life + ($this->intelligence * 5)/100;

}

public function GetLife(){
  return $this->Life;

}

public function GetName(){
  return $this->Name;

}

public function Getintelligence(){
  return $this->intelligence;

}

public function Getstrength(){
  return $this->strength;

}


public function Getdurability(){
  return $this->durability;

}

public function Getpower(){
  return $this->power;

}


public function Getcombat(){
  return $this->combat;

}


}
