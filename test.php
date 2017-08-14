<?php
/*$numere= array(21,63,150,40,50,60,32,57,90);
$suma=0;
for($i=10; $i>0;$i=$i-1) {
	//$suma=$suma+$numere[$i];
	echo "i=".$i;
	if($i>5)echo"este mai mare decit 5<br>";
	else echo"nu este mai mare decit 5<br>";
}
echo"masivul este:<br>";
print_r($numere);
//echo"<br>suma este:".$suma;

*/
 ?>


<?php
// A two-dimensional array
/*
$cars=array(
array("Volvo",100,350,550),
array("BMW",150,250,650),
array("Toyota",30,120,250),
array("Mercedes",70,300,200),
);
echo $cars[0][0] . " : Ordered: " . $cars[0][1] . " . Sold: " . $cars[0][2] . "<br>";
echo $cars[1][0] . " : Ordered: ". $cars[1][1] . " . Sold: " . $cars[1][2] . "<br>";
echo $cars[2][0] . " : Ordered: " . $cars[2][1] . " . Sold: " . $cars[2][2] . "<br>";
echo $cars[3][0] . " : Ordered: " . $cars[3][1] . " . Sold: " . $cars[3][2] . "<br>";
*/

?>


<?php
/*
	$cars=array(
	array("Volvo",35,40),
	array("BMW",50,60),
	array("Mercedes",70,80),
	array("Land Rover",10,30)
	);
	
	for($row=0;$row<4;$row++){
	echo "<div class='div_test'>";
	echo"<p><b>Row number $row</b></p>";
	echo " <hr size='1' color='gray' class='col-xs-12 linie'>";
	echo"<ul>";
	echo "</div>";
	for($col= 0 ;$col < 3;$col++){
	echo"<li>" .$cars[$row][$col]."</li>";
	}
	
	echo"</ul>";
}
*/
?>

<?php
/*$txt1="Learn PHP";
$txt2="W3schools.com";
$x=5;
$y=4;
echo "<h2>". $txt1 ."<h2>";
echo "Study PHP at " . $txt2 . "<br><br>";
echo$x+$y;
*/
?>

<?php
/*print "<h2>PHP is fun</h2>";
print "<h2>PHP is hard</h2>";
print "<h2>PHP is easy</h2>";
print "<h2>PHP is important language prograner</h2>";
print "<h2>PHP is best language</h2>";
print "<h2>PHP is difficult</h2>";
print "<h2>PHP is good</h2>";
*/
?>

<?php
/*
$favcolor="red";
switch($favcolor){
	case"red":
		echo"your favorite color is red!";
		break;
	case"blue":
		echo"your favorite color is blue!";	
		break;
	case"green":
		echo"my favorite color is green!";
		break;
	case"white":
	    echo"my favorite color is white!";
		break;	
}

$favcolor="blue";
switch($favcolor){
	case"red":
		echo"your favorite color is red!";
		break;
	case"blue":
		echo"your favorite color is blue!";	
		break;
	case"green":
		echo"my favorite color is green!";
		break;
	case"white":
	    echo"my favorite color is white!";
		break;	
}
*/
?>

<?php
/*for($x=0; $x<=10; $x++){
	echo "The number is: $x<br>";
}
*/
?>


<?php
/*
$colors=array("red","green","blue","yellow");
foreach($colors as $value){
	echo "$value <br>";
}
*/
?>


<?php
//Exemplu rotungire numere

/*	$numar= 4.2;
	$numar2= 2.7;
	echo round ($numar) . '<br>';
	echo round ($numar2). '<br>';
*/
?>



<?php
//atribuirea unei variabile altei variabile
/*
$limbaj = 'php';
$alt_limbaj = & $limbaj; //legarea celor 2 variabile
echo $alt_limbaj. '<br>';
$limbaj = 'html';
echo $alt_limbaj;
*/
?>


<?php
/*
define ('NUME_CONSTANTA', 'Aceasta este valoarea unei constante'); //setam o valoare constantei
if (defined ('NUME_CONSTANTA')) {//DEFINED ne spune daca o constanta este definita, returneaza o valoare booleana
	echo NUME_CONSTANTA; //afisam constanta
}
*/

?>



<?php

#Exemplu array functionabil intr-un index php

/* $automobile = array(
			'1' =>	array(
						'denumire' => "Dodgge",
						'pret' => 53536,
						 => "imagine1.jpg"
															
					),
					
			'2' => array(
						'denumire' => "Porsche",
						'pret' => 71536,
						'imagine' => "imagine2.jpg"
									
					),
					
			'3' => array(
							'denumire' => "AudiA5",
						'pret' => 20536,
						'imagine' => "imagine3.jpg"
						
					),
					
			'4' => array(
						'denumire' => "Ferrari",
						'pret' => 160536,
						'imagine' => "imagine4.jpg"
						
					),
					
			'5' => array(
						'denumire' => "Bugatti",
						'pret' => 249530,
						'imagine' => "imagine5.jpg"
						
					),
					
			'6' => array(
						'denumire' => "Citroen",
						'pret' => "20556",
						'imagine' => "imagine6.jpg"
						
					),
						
			'7' => array(
						'denumire' => "Mercedes",
						'pret' => 389530,
						'imagine' => "mercedes-benz.jpg"
						
					),
					
			'8' => array(
						'denumire' => "Nissan",
						'pret' => 9530,
						'imagine' => "Nissan Quashquai.jpg"
					
					),
					
			'9' => array(
						'denumire' => "Skoda",
						'pret' => 10530,
						'imagine' => "Skoda Fabia.jpg"
						
					),
					
			'10' => array(
						'denumire' => "Honda",
						'pret' => 67530,
						'imagine' => "honda civic.jpg"
						
					),
					
			'11' => array(
						'denumire' => "Wolksfagen",
						'pret' => 467530,
						'imagine' => "Wolksfagen Touareg.jpg"
						
					),

			'12' => array(
						'denumire' => "Range",
						'pret' => 867530,
						'imagine' => "Range_Rover.jpg"
						
					),

			'13' => array(
						'denumire' => "Audi A3",
						'pret' => 767530,
						'imagine' => "audi A3.jpg"
						
					),

			'14' => array(
						'denumire' => "Aston",
						'pret' => 1867530,
						'imagine' => "aston_martin.jpg"
						
					),

			'15' => array(
						'denumire' => "Reno",
						'pret' => 7530,
						'imagine' => "reno_cango.jpg"
						
					),

			'16' => array(
						'denumire' => "Mercedes",
						'pret' => 37530,
						'imagine' => "mercedes_brabus.jpg"
						
					),

			'17' => array(
						'denumire' => "Suzuki",
						'pret' => 5530,
						'imagine' => "suzuki.jpg"
						
					),								

			'18' => array(
						'denumire' => "Seat",
						'pret' => 4530,
						'imagine' => "seat_leon.jpg"
						
					),								

			'19' => array(
						'denumire' => "Hyundai",
						'pret' => 8530,
						'imagine' => "hyundai_starex.jpg"
						
					),								

			'20' => array(
						'denumire' => "Ferrari GT",
						'pret' => 127530,
						'imagine' => "Ferrari_gt.jpg",
						
					),

			'21' => array(
						'denumire' => "Opel",
						'pret' => 7530,
						'imagine' => "opel_zafira.jpg"
						
					),														
								
					
		); */


?>








