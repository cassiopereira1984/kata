<?php
/* nombre, edad posicion, puntostotales, placagenrealizado placagesrecibidos registrar 5 rugadores

obter mejor jugador pontuador y jugador con polace hace
?>**/

// enum Posicion {
//     case Fullback;
//     case Wing;
// } 

// class Jugador {
//     private string $nombre;
//     private int $edad;
//     private Posicion $posicion;
//     private int $pacajeRecebidos;
//     private int $pacajeHechos;
//     private int $puntos;


//     public function __construct(string $nombre, int $edad, Posicion $posicion, int $pacajeRecebidos, 
//     int $pacajeHechos, int $puntos) {
//         $this->nombre = $nombre;
//         $this->edad = $edad;
//         $this->posicion = $posicion;
//         $this->pacajeRecebidos = $pacajeRecebidos;
//         $this->pacajeHechos = $pacajeHechos;
//         $this->puntos = $puntos;
//     }

//     function getNombre() : string {
//         return $this->nombre;
//     }

//     function getPuntos() : int {
//         return $this->puntos;
//     }

//     function getPaclajeHechos() : int {
//         return $this->pacajeHechos;
//     }
// }

// function jugadorMasPuntos(array $equipo) : void {
// $masPuntos = 0;
// $jugadorNombre = "";
//     foreach($equipo as $jugador) {
//         if($jugador->getPuntos() > $masPuntos) {
//             $masPuntos = $jugador->getPuntos();
//             $jugadorNombre = $jugador->getNombre();
//         }
//     }
//     echo "El jugador con mas puntos es: " . $jugadorNombre . " con: " . $masPuntos . " puntos." . PHP_EOL;
// }

// function menosPacajeHechos(array $equipo) : void {
// $jugadorNombre = "";
// $menosPlacaje = $equipo[0]->getPaclajeHechos();
//     foreach($equipo as $jugador) {
//         if($jugador->getPaclajeHechos() < $menosPlacaje) {
//             $jugadorNombre = $jugador->getNombre();
//             $menosPlacaje = $jugador->getPaclajeHechos();
//         }
//     }
//     echo "El Jugador con menos placaje es: " . $jugadorNombre . " con: " . $menosPlacaje . " placajes";
// }

// $jugador1 = new Jugador("Marc", 20, Posicion::Wing, 15, 10, 14);
// $jugador2 = new Jugador("Marc", 20, Posicion::Wing, 16, 9, 10);
// $jugador3 = new Jugador("Marc", 20, Posicion::Wing, 13, 17, 12);
// $jugador4 = new Jugador("Marc", 20, Posicion::Wing, 10, 40, 120);

// $equipo = [$jugador1, $jugador2, $jugador3, $jugador4];
// //var_dump($equipo);

// echo jugadorMasPuntos($equipo);
// echo menosPacajeHechos($equipo);



enum Posicion {
    case Fullback;
    case Wing;
} 

class Jugador {
    private string $nombre;
    private int $edad;
    private Posicion $posicion;
    private int $pacajeRecebidos;
    private int $pacajeHechos;
    private int $puntos;


    public function __construct(string $nombre, int $edad, Posicion $posicion, int $pacajeRecebidos, int $pacajeHechos, int $puntos) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->posicion = $posicion;
        $this->pacajeRecebidos = $pacajeRecebidos;
        $this->pacajeHechos = $pacajeHechos;
        $this->puntos = $puntos;
    }

    function getNombre() : string {
        return $this->nombre;
    }

    function getPuntos() : int {
        return $this->puntos;
    }

    function getPaclajeHechos() : int {
        return $this->pacajeHechos;
    }
}

class Marcadores {

    private array $listaJugadores = [];

    function agregarJugador($jugador) : void {
        $this->listaJugadores[] = $jugador;
    }

    function jugadorMasPuntos() : void {
        $masPuntos = 0;
        $jugadorNombre = "";
        foreach($this->listaJugadores as $jugador) {
            if($jugador->getPuntos() > $masPuntos) {
                $masPuntos = $jugador->getPuntos();
                $jugadorNombre = $jugador->getNombre();
            }
        }
        echo "El jugador con mas puntos es: " . $jugadorNombre . " con: " . $masPuntos . " puntos." . PHP_EOL;
    }

    function menosPacajeHechos() {
        $jugadorNombre = "";
        $menosPlacaje = $this->listaJugadores[0]->getPaclajeHechos();
        foreach($this->listaJugadores as $jugador) {
            if($jugador->getPaclajeHechos() < $menosPlacaje) {
                $jugadorNombre = $jugador->getNombre();
                $menosPlacaje = $jugador->getPaclajeHechos();
            }
        }
        echo "El Jugador con menos placaje es: " . $jugadorNombre . " con: " . $menosPlacaje . " placajes";
    }

}
$marcadores = new Marcadores();

$jugador1 = new Jugador("Marc", 20, Posicion::Wing, 15, 10, 14);
$jugador2 = new Jugador("Marc", 20, Posicion::Wing, 16, 9, 10);
$jugador3 = new Jugador("Marc", 20, Posicion::Wing, 13, 17, 12);
$jugador4 = new Jugador("Marc", 20, Posicion::Wing, 10, 40, 120);

$marcadores->agregarJugador($jugador1);
$marcadores->agregarJugador($jugador2);
$marcadores->agregarJugador($jugador3);
$marcadores->agregarJugador($jugador4);

echo $marcadores->jugadorMasPuntos();
echo $marcadores->menosPacajeHechos();