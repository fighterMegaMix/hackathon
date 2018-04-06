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


function __construct(array $information){

      $this->Name = $information['name'];
      $this->intelligence = $information['intelligence'];
      $this->strength = $information['strength'];
      $this->durability = $information['durability'];
      $this->power = $information['power'];
      $this->combat = $information['combat'];

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
