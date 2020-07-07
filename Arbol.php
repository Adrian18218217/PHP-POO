<?php

#Ejercicio 1.- Cree una clase Arbol con métodos: crecer(), crearHojas() y fotosintesis(). 
#También debe tener los atributos cantidadHojas, tipo, antigüedad, altura.. Cree un objeto
# en base a este y pruebe los atributos mostrando sus valores y ejecutando sus métodos.

class Arbol{
    public $cantidadHojas, $tipo, $antiguedad,$altura;

    public function Arbol($cantidadHojas, $tipo, $antiguedad,$altura){
        $this->cantidadHojas=$cantidadHojas;
        $this->tipo=$tipo;
        $this->antiguedad=$antiguedad;
        $this->altura=$altura;
    }

    public function crecer(): int{
        $this->altura++;
        echo"<br><br>estoy creciendo.... ahora mido: <br><br>";
        return $this->altura;
    }

    public function crearHojas(int $hojas):int{
        $cantidadHojas+=$hojas;
        return $cantidadHojas;
    }
    public function fotosintesis(){
        echo "Estoy alimentandome :)";
    }

    public function toString(Arbol $arbolito){
        echo "Cantidad de Hojas: ".$arbolito->cantidadHojas ."<br><br>";
        echo "Tipo de arbol: ".$arbolito->tipo."<br><br>";
        echo "Años: ".$arbolito->antiguedad."<br><br>";
        echo "Altura: ".$arbolito->altura."<br><br>";

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arbolito =new Arbol(5,"frutal",28,1.75);
     $arbolito->toString($arbolito);

    echo $arbolito->fotosintesis();
    echo $arbolito->crecer();
    ?>
</body>
</html>