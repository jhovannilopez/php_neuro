<?php
echo "TAREA 2 <br>";
echo "Desarrollar un programa que genere la serie de Fibonacci, al inicio se recomienda<br> definir una variable N el cual indicara la cantidad de números a mostrar de la serie: <br>";
echo "Ejemplo N=12 <br>";
echo "Genera: <br>";
echo "ejemplo";
echo "0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89<br>";
$n=20;
echo "RESULTADO SERIE FIBONACCI DE ".$n." DIGITOS <br>";
$var1=0;
$var2=1;
$suma=0;
$C=1;
while($C<=$n)
{ 
    echo $var1.". ";
    $suma=$var1+$var2;
    $var1=$var2;
    $var2=$suma;
    $C=$C+1;
}
