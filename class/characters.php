<?php

// Class Characters

class Characters{

    const MAX_LIFE = 100;
  const MAX_ENERGY = 100;

  private $Name;
  private $intelligence;
  private $strength;
  private $durability;
  private $power;
  private $combat;
  private $Life;
  private $counter;


function __construct(array $information){

      $this->Name = $information['name'];
      $this->intelligence = $information['intelligence'];
      $this->strength = $information['strength'];
      $this->durability = $information['durability'];
      $this->power = $information['power'];
      $this->combat = $information['combat'];
      $this->Life = $information['life'];
      $this->counter = $information['counter'];

}

public function Attack(){

      $Damage = (($this->strength)/100)*5;
      return $Damage;
}

public function Defense($Damage){

  $this->Life = $this->Life - ((100-$this->durability) * $Damage)/100;
  return $this->Life;

}

public function Potion(){
  $this->Life = $this->Life + ($this->intelligence * 5)/100;
  return $this->Life;

}

public function GetLife(){
  return $this->Life;

}

public function setLife($life)
  {
    if ($life > self::MAX_LIFE){
       $this->Life = self::MAX_LIFE;
    }elseif ($life <= 0){
       $this->Life = 0;
    }else{
      $this->Life = $life;
    }
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
