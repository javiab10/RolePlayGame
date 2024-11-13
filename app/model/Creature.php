<?php


class Creature {
    private $idCreature;
    private $name;
    private $description;
    private $avatar;
    private $attackPower;
    private $lifeLevel;
    private $weapon;
    
    //Constructor de la clase
    public function __construct() {
        
    }
    
    public function getIdCreature() {
        return $this->idCreature;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function getAttackPower() {
        return $this->attackPower;
    }

    public function getLifeLevel() {
        return $this->lifeLevel;
    }

    public function getWeapon() {
        return $this->weapon;
    }

    public function setIdCreature($idCreature): void {
        $this->idCreature = $idCreature;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function setAvatar($avatar): void {
        $this->avatar = $avatar;
    }

    public function setAttackPower($attackPower): void {
        $this->attackPower = $attackPower;
    }

    public function setLifeLevel($lifeLevel): void {
        $this->lifeLevel = $lifeLevel;
    }

    public function setWeapon($weapon): void {
        $this->weapon = $weapon;
    }


}
?>
