<?php

/*
first part:
by Mykola Omelianov
 */

class SpaceShipBuilder
{
    protected $shipEngine;
    protected $shipCapacity;
    protected $shipModules;
    protected $shipName = 'Prometeus';

    function __construct($tempEngine = 'Uranian', $tempCapacity = '4', $tempModule = '1'){
        $this->shipEngine = $tempEngine;
        $this->shipCapacity = $tempCapacity;
        $this->shipModules = $tempModule;
    }
	
	public function setSpaceShipName($tempName = 'Prometeus'){
		@$this->shipName = $tempName;
    }

    
	public function spaceShipDescription(){
		return "You created:"."<br>".$this->shipName."<br>"." spaceship with engine type - ".$this->shipEngine."<br>"." place for goods - ".$this->shipCapacity."<br>"." Ship module - ".$this->shipModules."<br>";
    }
}



$myShip = new SpaceShipBuilder();

echo $myShip->spaceShipDescription();

$myShip->setSpaceShipName('Millenium Falcon');

echo $myShip->spaceShipDescription();
?>