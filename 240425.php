<?php 
/*Estamos creando parte de la lógica de un videojuego de rol-acción y, por eso necesitamos programar 
los tipos de jugador que podremos tener. Cualquier jugador tiene un nickname, una posición horizontal(x) 
y otra vertical(y). Las posiciones se representan por números entre el 0 y el 9. Cada jugador se puede
mover en una de estas 4 direcciones:

Arriba
Abajo
Izquierda
Derecha

Por ejemplo, si tengo un jugador en la posición (0,0) y : • Le digo que se mueva a la derecha pasa a 
estar en la posición (0,1) • Si después le digo que se mueva a la izquierda pasa a estar en la posición
(0,0) • Si le digo después de que vaya hacia abajo me devolverá un mensaje de error, ya que no puede
ir más abajo. Por tanto, debemos mostrar un error siempre que no podamos hacer este movimiento.
Además, tenemos que cada jugador puede ser de una de estas 3 clases (Guerrero, Mag, Arquer).

Los guerreros tienen un arma de dos manos (representada por un nombre) y pueden atacar con ella. 
Además, los guerreros pueden correr, que les hace avanzar de dos posiciones en dos posiciones en la 
dirección escogida (en lugar de una).
Los magos tienen numerosos hechizos que pueden realizar indicando cuál es el hechizo a realizar. De 
los hechizos sólo conocemos el nombre.
Por último, los arqueros tienen un arco (representado por un nombre) y un número de flechas. Pueden
además disparar, perdiendo una flecha cada vez. Si nos quedamos sin flechas, no podremos disparar.*/

class Player 
{
    private string $nickname;
    private int $posX;
    private int $posY;

    public function __construct(string $nickname, int $posX, int $posY)
    {
        $this->nickname = $nickname;
        $this->posX = $posX;
        $this->posY = $posY;
    }

    public function move($direction)
    {
        $posXP = 0;
        $posXL = 0;
        $posYP = 0;
        $posYL = 0;
        switch($direction) {
            case "up":
                $posXP = $this->posX + 1;
                break;
            case "down":
                $posXL = $this->posX - 1;
                break;
            case "right":
                $posYP = $this->posY + 1;
                break;
            case "left":
                $posYL = $this->posY - 1;
                break;
        }

        if ($posXL < 0 || $posXP > 9 || $posYL < 0 || $posYP > 9) {
            echo "You can't move there";
        } else {
            
        }
        //falta incrementar las posiciones y hacer con que el msj solo se imprima una vez.
    }

        public function getPos() {
            echo $this->posX . " " . $this->posY;
        }
        /*Las posiciones se representan por números entre el 0 y el 9. Cada jugador se puede
mover en una de estas 4 direcciones:

Arriba
Abajo
Izquierda
Derecha*/
}

class Warrior extends Player 
/*Los guerreros tienen un arma de dos manos (representada por un nombre) y pueden atacar con ella. 
Además, los guerreros pueden correr, que les hace avanzar de dos posiciones en dos posiciones en la 
dirección escogida (en lugar de una).*/
{
    private string $warriorName;
    private string $swordName;

    public function __construct(string $nickname, int $posX, int $posY, string $warriorName, string $swordName)
    {
        parent::__construct($nickname, $posX, $posY);
        $this->warriorName = $warriorName;
        $this->swordName = $swordName;
    }

    public function atackWarrior(): void
    {
        echo $this->warriorName . " atack with " . $this->swordName . "!!!" . PHP_EOL;
    }

    public function runWarrior($direction)
    {
        parent::move($direction);
        parent::move($direction);
        echo $this->getPos();
        //Además, los guerreros pueden correr, que les hace avanzar de dos posiciones en dos posiciones
    }
}

class Mage extends Player
/*Los magos tienen numerosos hechizos que pueden realizar indicando cuál es el hechizo a realizar. De 
los hechizos sólo conocemos el nombre.*/
{
    private string $mageName;
    private array $spellBook = [];

    public function __construct(string $nickname, int $posX, int $posY, string $mageName)
    {
        parent::__construct($nickname, $posX, $posY);
        $this->mageName = $mageName;
        $this->spellBook = [];
    }

    public function addSpell(string $spell): void
    {
        $this->spellBook[] = $spell;
    }

    public function useSpell(string $spell): void
    {
        if(in_array($spell, $this->spellBook)){
            echo $this->mageName . " use " . $spell . PHP_EOL;
        } else {
            echo $this->mageName . " don't know this spell." . PHP_EOL;
        }
    }
}

class Archer extends Player
{
    private string $archerName;
    private string $bowName;
    private int $arrowsNum;

    public function __construct(string $nickname, int $posX, int $posY, string $archerName, string $bowName, int $arrowsNum)
    {
        parent::__construct($nickname, $posX, $posY);
        $this->archerName = $archerName;
        $this->bowName = $bowName;
        $this->arrowsNum = $arrowsNum;
    }

    public function shotArrow(): void
    {
        if($this->arrowsNum > 0){
            echo $this->archerName . " atack with " . $this->bowName . "!!!" . PHP_EOL;
        }
        else {
            echo $this->archerName . " don't have arrows" . PHP_EOL;
        }
    }
}

$warrior1 = new Warrior("CPP", 0, 0, "Adam", "Scalibur");

$warrior1->atackWarrior();
$warrior1->runWarrior("down")
?>