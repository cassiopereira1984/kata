<?php 
/*kata-dungeons-dragons-test
Kata 35 per l'especialitat fullstackPHP 2-5-24

Donat l'exercici de la setmana passada fes una proposta e implementa tests mitjançant PHPUnit.

Pots fer servir el teu propi codi font o la proposta de codi font del mentor.*/

require "240425.php";

use PHPUnit\Framework\TestCase;

class ArcherTest extends TestCase
{
    function testArrowNumEquals() 
    {
        $archer = new Archer("test", 0, 0, "Robin", "longbow", 10);
        $this->assertEquals($archer->getArrowsNum(), 10);
    }

    function testArrowShotLess()
    {
        $archer = new Archer("test", 0, 0, "Robin", "longbow", 10);
        $arrowInit = $archer->getArrowsNum();
        $archer->shotArrow();
        $this->assertTrue($arrowInit, $archer->getArrowsNum());
    }

    function testArrowShotToString()
    {
        $archer = new Archer("test", 0, 0, "Robin", "longbow", 10);
        ob_start(); // ob_start() y ob_get_clean() se utilizan para capturar la salida generada por el código que estás probando.
        $archer->shotArrow();
        $output = ob_get_clean();
        $this->assertStringContainsString("Robin attack with longbow", $output);
    }
}

class MageTest extends TestCase
{
    function testSpeelBook()
    {
        $mage = New Mage("test", 0, 0, "Merlin");
        $mage->addSpell("FireBall");
        $this->assertNotEmpty($mage->getSpellBook());
    }

    function testUseSpeelCan()
    {
        $mage = New Mage("test", 0, 0, "Merlin");
        $mage->addSpell("FireBall");
        ob_start();
        $mage->useSpell("FireBall");
        $output = ob_get_clean();
        $this->assertStringContainsString("Merlin use FireBall", $output);
    }

    function testUseSpeelCant()
    {
        $mage = New Mage("test", 0, 0, "Merlin");
        $mage->addSpell("FireBall");
        ob_start();
        $mage->useSpell("FireSquare");
        $output = ob_get_clean();
        $this->assertStringContainsString("Merlin don't know this spell.", $output);
    }
}

class WarriorTest extends TestCase
{
    function testAttackWarrior()
    {
        $warrior = new Warrior("test", 0, 0, "Lancelot", "CruzX");
        ob_start();
        $warrior->attackWarrior();
        $output = ob_get_clean();
        $this->assertStringContainsString("Lancelot attack with CruzX", $output);
    }

    function testRunWarrior()
    {
        $warrior = new Warrior("test", 0, 0, "Lancelot", "CruzX");
        ob_start();
        $warrior->runWarrior("right");
        $output = ob_get_clean();
        $this->assertStringContainsString("2 0", $output);
    }
}

class PlayerTest extends TestCase
{
    function testMove()
    {
        $player = new Player("test", 0, 0);
        ob_start();
        $player->move("up");
        $output = ob_get_clean();
        $this->assertStringContainsString("0 1", $output);
    }
}
//create
//array != 0
//useSpell
//create player
//moves
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