<?php

//dirname(__FILE__) Es el directorio del archivo actual
require_once(dirname(__FILE__) . '\..\conf\PersistentManager.php');

class CreatureDAO {
    //Se define una constante con el nombre de la tabla
    const CREATURE_TABLE = 'creature';

    //Conexión a BD
    private $conn = null;
    
    //Constructor de la clase
    public function __construct() {
        $this->conn = PersistentManager::getInstance()->get_connection();
    }
    
    public function selectAll() {
        $query = "SELECT * FROM " . CreatureDAO::CREATURE_TABLE;
        $result = mysqli_query($this->conn, $query);
        $creatures = array();
        while ($creatureBD = mysqli_fetch_array($result)) {

            $creature= new Creature();
            $creature->setIdCreature($creatureBD["idCreature"]);
            $creature->setName($creatureBD["name"]);
            $creature->setDescription($creatureBD["description"]);
            $creature->setAvatar($creatureBD["avatar"]);
            $creature->setAttackPower($creatureBD["attackPower"]);
            $creature->setLifeLevel($creatureBD["lifeLevel"]);
            $creature->setWeapon($creatureBD["weapon"]);
            
            array_push($creatures, $creature);
        }
        return $creatures;
    }
    
    public function insert($creature) {
        $query = "INSERT INTO " . CreatureDAO::CREATURE_TABLE .
                " (name, description, avatar, attackPower, lifeLevel, weapon) VALUES(?,?,?,?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weapon = $creature->getWeapon();
        
        mysqli_stmt_bind_param($stmt, 'sssiis', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon);
        return $stmt->execute();
    }
    
    public function update($creature) {
        $query = "UPDATE " . CreatureDAO::CREATURE_TABLE .
                " SET name=?, description=?, avatar=?, attackPower=?, lifeLevel=?, weapon=?"
                . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        $name = $creature->getName();
        $description = $creature->getDescription();
        $avatar = $creature->getAvatar();
        $attackPower = $creature->getAttackPower();
        $lifeLevel = $creature->getLifeLevel();
        $weapon = $creature->getWeapon();
        $idCreature = $creature->getIdCreature();
        mysqli_stmt_bind_param($stmt, 'sssiisi', $name, $description, $avatar, $attackPower, $lifeLevel, $weapon, $idCreature);
        return $stmt->execute();
    }
    
    public function delete($idCreature) {
        $query = "DELETE FROM " . CreatureDAO::CREATURE_TABLE . " WHERE idCreature=?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $idCreature);
        return $stmt->execute();
    }
}

?>