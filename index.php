<?php
require_once("clases/animal.php");
$vaca1 = new vaca();
$vaca1 ->hacersonido();


$oveja1 = new oveja();
echo"<br>";
$oveja1->hacersonido();   

#ejercicio02
$bicicleta1 = new bicicleta();
$coche1 = new coche();
echo"<br>";
iniciarVehiculo($bicicleta1);
echo"<br>";
iniciarVehiculo($coche1);  

#ejercicio03
$televisor1 = new televisor();
$televisor1->encender();

$lavadora1 = new lavadora();
echo"<br>";
$lavadora1->encender();


#ejercicio04
$cuadrado = new Cuadrado(8);
$circulo = new Circulo(5);
echo"<br>";
echo "area del cuadrado es : " . $cuadrado->area() ;
echo"<br>";
echo "area del círculo es: " . $circulo->area() ;

#ejercicio05
$guitarra1 = new guitarra();
$tambor1 = new tambor();
echo"<br>";
tocarinstrumento($guitarra1);
echo"<br>";
tocarinstrumento($tambor1);

#ejercicio06
$usb1 = new usb();
$discoduro1= new discoduro();
echo"<br>";
imprimirdatos($usb1);
echo"<br>";
imprimirdatos($discoduro1);

#ejercicio07
$usb1 = new usb();
$discoduro1= new discoduro();
echo"<br>";
imprimirdatos($usb1);
echo"<br>";
imprimirdatos($discoduro1);
