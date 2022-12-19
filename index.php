<h1> Test de php </h1>


<?php
    #Lo mas comun para imprimir es echo
    echo "<h1> Codigo php </h1>";
    #tambien se puede usar pero es mas comun el echo
    print("hola");


    #Variables
    $nombre = "Sebas";
    $texto = "Repaso de php $nombre";
    $altura = 175;

    #Concatenar siempre es con el punto
    $textofinal = "<h1>" . $texto . ", su altura es: ".$altura. "</h1>";

    echo $textofinal;
    echo $textofinal;
    echo $textofinal;
    echo $textofinal;
    echo $textofinal;


    echo 'Hola mundo';

    echo "<h1>Bienvenidos</h1>";

    print("pruebas de como usar php ");

    echo "<br></br>";

    //Variables
    $nombre = "Sebas";
    $altura = 175;

    echo "$nombre";

    echo "<br></br>";

    echo "$altura";

    //concatenar
    $texto1 = "Hola, buen dia!! ";
    echo "<h1>".$texto1.$nombre.", su altura es: ".$altura."cm"."</h1>";

    $texto .= "Adios";
    echo "$texto";

    #GET
    echo "<hr>";
    echo $_GET["nombre"];
?>
