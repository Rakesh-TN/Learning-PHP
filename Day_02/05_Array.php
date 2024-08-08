<?php
echo "<h1> Indexed Array </h1>";

    # Types One

    $fruits = array("Apple","Orange","Mango");
    $fruits[]="Banana"; #Adding Single Array
    array_push( $fruits,"Pineapple", "Cherry"); # Adding Multiple Array
    print_r($fruits);
    echo "<br/>";
    echo $fruits[5];

    echo "</br></br>";
    # Types Two

    $Fname = ['Rakesh', 'Natarajan'];
    $Fname[]= 'Tim';
    array_push( $Fname,"Steve", "Cherry"); 
    print_r($Fname);
    echo "<br/>";
    echo $Fname[0];
    
    echo "</br></br>";
    echo "<hr/>";

    echo '<h1>Associate Array</h1>';

    $facer = [
        'Marvel' =>'Iron Man',
        'Stranger Things'=>'Steve' 
    ];

    print_r($facer);

    echo "</br></br>";

    echo $facer['Marvel']." as RDJ"; // Type one Print
    echo "<br/><br/>";
    echo "{$facer['Stranger Things']} as waiting Season 5"; // Type two Print

?>