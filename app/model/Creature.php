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
    
    function pintarCreatures(){
        $result = '<div class="col-lg-4">';
        $result .= '<div class="card">';
        $result .= '<h3 class="card-title">'.$this->getName().'</h3>';
        $result .= '<div class="row card-body">';
        $result .= '<div class="col-6"><img src="'.$this->getAvatar().'" class="img-fluid"></div>';
        $result .= '<div class="col-6"><p class="card-text">'.$this->getDescription().'</p>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '<div class="card-footer bg-white d-flex justify-content-around mt-2">';
        $result .= '<button type="button" class="btn btn-secondary" id="masInfo" href="offer/detail.php?id=">Más info</button>';
        $result .= '<form action="../../views/private/creature/modificar.php" method="post">';
        $result .= '<input type="hidden" name="type" value="modificar">';
        $result .= '<input type="hidden" name="id" value="'.$this->getIdCreature().'">';
        $result .= '<button type="submit" class="btn btn-success" name="modificar" id="boton_modificar">Modificar</button>';
        $result .= '</form>';
        $result .= '<form action="../../controllers/CreatureController.php" method="post">';
        $result .= '<input type="hidden" name="type" value="borrar">';
        $result .= '<input type="hidden" name="id" value="'.$this->getIdCreature().'">';
        $result .= '<button type="submit" class="btn btn-danger" name="borrar" id="btn_borrar">Borrar</button>';
        $result .= '</form>';
        $result .= '</div>';
        $result .= '</div>';
        $result .= '</div>';
        
        return $result;
    }


}
?>
