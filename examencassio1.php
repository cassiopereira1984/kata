<?php
/* datos: nombre, tipo, id, peso, altura, 4 ATAQQUES  6 POKEMONS
DEVOOLVER UM POKEMON POR ID
DEVOLVER POR TIPO:
*/

enum Tipo {
    case Hoja;
    case Fuego;
    case Agua;
    case Tierra;
}

class Pokemon {
    private string $nombre;
    private Tipo $tipo;
    private int $id;
    private int $peso;
    private float $altura;
    private array $listaAtaque;


    public function __construct($nombre, Tipo $tipo, $id, $peso, $altura) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->id = $id;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->listaAtaque = [];
    }
    
    public function getNombre() : string {
        return $this->nombre;
    }

    public function getId() : int {
        return $this->id;
    }

    public function getTipo() : Tipo {
        return $this->tipo;
    }

    public function crearAtaque($ataque) : void {
        $this->listaAtaque[] = $ataque;
    }

    public function atacar($ataque) : void {
        foreach($this->listaAtaque as $ataquelista) {
            if($ataquelista === $ataque) {
                echo "El poke: " . $this->getNombre() . " hizo el ataque: " . $ataque . PHP_EOL;
                return;
            }
        }
    }
}

class Pokedex {
    private string $nombre;
    private array $pokeagenda = [];

    public function __construct($nombre) {
        $this->nombre = $nombre;
        $this->pokeagenda = [];
    }

    public function agregarPokemon($pokemon) : void {
        $this->pokeagenda[] = $pokemon;
    }

    public function buscarPorId($id) : void {
        foreach($this->pokeagenda as $pokemon){
            if($pokemon->getId() === $id) {
                echo "El pokemon de id " . $pokemon->getId() . " es: " . $pokemon->getNombre() . PHP_EOL;
                return;
            }
        }
        echo "Pokemon no encontrado." . PHP_EOL;
    }

    public function buscarPorTipo($tipo) : array {
        $listaPokemon = [];
        foreach($this->pokeagenda as $pokemon) {
            if($pokemon->getTipo() === $tipo) {
                $listaPokemon[] = $pokemon->getNombre();
            }
        }
        return $listaPokemon;
    }
}

$pokemon1 = new Pokemon("AAA", Tipo::Hoja, 1, 5, 2);
$pokemon2 = new Pokemon("B", Tipo::Fuego, 2, 5, 2);
$pokemon3 = new Pokemon("C", Tipo::Agua, 3, 5, 2);
$pokemon4 = new Pokemon("D", Tipo::Tierra, 4, 5, 2);
$pokemon5 = new Pokemon("E", Tipo::Hoja, 5, 5, 2);
$pokemon6 = new Pokemon("AFAA", Tipo::Hoja, 6, 5, 2);

$pokemon1->crearAtaque("Ataque1");
$pokemon1->crearAtaque("Ataque2");
$pokemon1->crearAtaque("Ataque3");
$pokemon1->crearAtaque("Ataque4");

$pokeagenda = new Pokedex("Agenda");

$pokeagenda->agregarPokemon($pokemon5);
$pokeagenda->agregarPokemon($pokemon4);
$pokeagenda->agregarPokemon($pokemon3);
$pokeagenda->agregarPokemon($pokemon2);
$pokeagenda->agregarPokemon($pokemon1);

echo $pokemon1->atacar("Ataque1");

echo $pokeagenda->buscarPorId(8);

$test = $pokeagenda->buscarPorTipo(Tipo::Hoja);
echo "los poke de tipo Hoja son: " . implode(", ", $test) . PHP_EOL;
?>