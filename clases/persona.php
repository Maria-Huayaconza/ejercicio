<?php
 abstract class Animal {
    abstract public function hacersonido();
 }

class vaca extends Animal {
     public function hacersonido() {
         echo "la vaca hace muuu";
     }
 }

class oveja extends Animal {
    public function hacersonido() {
        echo "la oveja dice beee";
    }
 }
#ejercicio #2
class Vehiculo {
    public function arrancar() {
        echo "El vehículo ha arrancado\n";
    }
}


class bicicleta extends Vehiculo {
    public function arrancar() {
        echo  "La bicicleta no tiene motor";
    }
}

class coche extends Vehiculo {
    public function arrancar() {
        echo "El coche está arrancando";
    }
}

// Uso polimórfico
function iniciarVehiculo(Vehiculo $v) {
    $v->arrancar();
}
#ejercicio03

 abstract class electrodomestico {
    // Método abstracto
    abstract public function encender();

    
 }

class televisor extends electrodomestico {
     public function encender() {
         echo "el televisor esta encendido";
     }
 }

class lavadora extends electrodomestico {
    public function encender() {
        echo "la lavadora esta en funcionamiento";
    }
 }


#EJERCICIO04


 abstract class figura {
    public function area(){
    }
 }
 class cuadrado extends figura{
    private $lado;
    public function __construct($lado) {
        $this->lado = $lado;
    }
    public function area() {
        return $this->lado * $this->lado;
 }
}
 class Circulo extends Figura {
    private $radio;
    const PI = 3.14;

  
    public function __construct($radio) {
        $this->radio = $radio;
    }

   
    public function area() {
        return self::PI * $this->radio * $this->radio;
    }
}

#ejercicio05
abstract class instrumento{
public function tocar(){
    } 
}
class guitarra extends instrumento{
    public function tocar(){
        echo"tocando guitarra";
    } 
}
class tambor extends instrumento{
    public function tocar(){
        echo"tocando tambor";
    } 
}
function tocarinstrumento(instrumento $v) {
    $v->tocar();
}
#ejercicio06
abstract class DispositivoAlmacenamiento{
    public function leerdatos(){

    }
}
class usb  extends DispositivoAlmacenamiento{
    public function leerdatos(){
        echo"Leyendo datos desde usb";
    }
}

class discoduro  extends DispositivoAlmacenamiento{
    public function leerdatos(){
        echo"Leyendo datos desde el disco duro";
    }
}
function imprimirdatos(DispositivoAlmacenamiento $v) {
    $v->leerdatos();
}
