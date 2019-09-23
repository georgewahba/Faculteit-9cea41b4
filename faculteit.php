<?php 
print("van welk getal wil je de faculteit weten");
$keuze = readline(":");
$antwoord = 1;
for ($i=1; $i <=$keuze ; $i++) { 
	$antwoord = ($antwoord * $i);
}
echo $antwoord;
