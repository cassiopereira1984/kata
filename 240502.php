<?php 
/*kata-dungeons-dragons-test
Kata 35 per l'especialitat fullstackPHP 2-5-24

Donat l'exercici de la setmana passada fes una proposta e implementa tests mitjançant PHPUnit.

Pots fer servir el teu propi codi font o la proposta de codi font del mentor.*/

include_once "240425.php";

use PHPUnit\Framework\TestCase;

$archer = new Archer("test", 0, 0, "Robin", "longbow", 0);
$mage = New Mage("test", 0, 0, "Merlin");
$warrior = new Warrior("test", 0, 0, "Lancelot", "CruzX");

class ArcherTest extends TestCase
{
    //create
    //arrow > 0
    //arrow shot
    function testArrowNum() 
    {
        $archer = new Archer("test", 0, 0, "Robin", "longbow", 0);
        $this->assertTrue($archer->getArrowsNum() > 0);
    }
}

class MageTest extends TestCase
{
    //create
    //array != 0
    //useSpell
    function testSpeelBook()
    {
        $mage = New Mage("test", 0, 0, "Merlin");
        $mage->addSpell("FireBall");
        $this->assertNotEmpty($mage->getSpellBook());
    }
}

class WarriorTest extends TestCase
{
    //create
    //attack
    //run
    function testAttack()
    {

    }
}

class PlayerTest extends TestCase
{
    //create player
    //moves
}
/*create class es != null
move up == -1 || 10?
move down == -1 || 10?
move left == -1 || 10?
move right == -1 || 10?
runn?
spellbook != 0?
arrowsNum == -1?

tener en cuenta:
cantidad, y si es null?
orden
dicotomias
valores - umbral*/
?>