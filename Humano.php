<?php
#Ejercicio 2.- Cree una clase Humano con métodos: hablar(), correr() y comer() que emitan mensajes.
# También debe tener los atributos altura, genero, edad, carácter.. Cree un objeto en base a este 
#y pruebe los atributos asignándoles valores y ejecutando sus métodos.

class Humano
{
    public $altura, $genero, $edad, $caracter;

    public function Humano($altura, $genero,$edad,$caracter){
        $this->altura=$altura;
        $this->genero=$genero;
        $this->edad=$edad;
        $this->caracter=$caracter;
    }
    public function hablar(){
        echo "Estoy hablando bla bla!!";
    }

    public function correr(int $distancia){
        echo "Voy a correr $distancia metros...";
    }

    public function comer()
    {
        echo "estoy comiendo algo delicioso!!  ";
    }

    public function toString(Humano $extraterrestre){
        echo "<br><br> Altura: ". $extraterrestre->altura;
        echo "<br><br> Genero: ". $extraterrestre->genero;
        echo "<br><br> Edad: ". $extraterrestre->edad;
        echo "<br><br> Caracter: ". $extraterrestre->caracter;

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
    $extraterrestre=new Humano(1.68,"masculino",18,"debil");
    $extraterrestre->toString($extraterrestre);
    echo"<br>-------------------------<br>";
    $extraterrestre->correr(5);
    ?>
</body>
</html>