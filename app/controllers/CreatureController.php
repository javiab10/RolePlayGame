<?php
//ACORDARME DE LAS RUTAS
require_once(dirname(__FILE__).'/../model/validations/ValidationsRules.php');
require_once(dirname(__FILE__) . '/../../persistance/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../model/Creature.php');

$_creatureController = new CreatureController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["type"] == "create"){
        $_creatureController->createAction();
    }
}


class CreatureController{
    
    function __construct(){
        
    }
    
    // Obtención de la lista completa de creatures
    function readAction() {
        $creatureDAO = new CreatureDAO();
        return $creatureDAO->selectAll();
    }
    
    // Función encargada de crear nuevas creatures
    function createAction() {
        // Obtención de los valores del formulario y validación
        $name = ValidationsRules::test_input($_POST["name"]);
        $description = ValidationsRules::test_input($_POST["description"]);
        $avatar = ValidationsRules::test_input($_POST["avatar"]);
        $attackPower = ValidationsRules::test_input($_POST["attackPower"]);
        $lifeLevel = ValidationsRules::test_input($_POST["lifeLevel"]);
        $weapon = ValidationsRules::test_input($_POST["weapon"]);
        // Creación de objeto auxiliar   
        $creature = new Creature();
        $creature->setName($name);
        $creature->setDescription($description);
        $creature->setAvatar($avatar);
        $creature->setAttackPower($attackPower);
        $creature->setLifeLevel($lifeLevel);
        $creature->setWeapon($weapon);
        //Creamos un objeto CreatureDAO para hacer las llamadas a la BD
        $creatureDAO = new CreatureDAO();
        $creatureDAO->insert($creature);

        header('Location: ../../public/index.php');
    }
    
}