<?php

echo "Salut";

$a=10;
$b=20;

echo "<br>" . $a+$b;

//formular simplu care accepta un nume si il afiseaza 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nume = $_POST['nume'];
    echo "<br>"."Numele tau este {$nume}";
}


?>
<form method="post">
    Nume: <input type="text" name="nume">
    <input type="submit">
</form>

<?php








//4 creati un array cu 5 lemente si afisati-l cu foreach 

$array = array(4,1,3,7,10,2,3,12);

foreach($array as $arr){
    echo $arr ." ";
}

//5 Scrieti o functie care accepta doi parametrii si returneaza produsul lor

function produs ($a,$b){
    return $a*$b;
}

echo produs(12,10);

//6 Afisati data si ora curenta intr-un format ales
echo '<br>'. date('Y-m-d H:i:s');

//7 Creati un script care sa salveze o variabila de sesiune
$_SESSION['variabila'] = 'valoare';
echo $_SESSION['variabila'];

//8 Scrieti un script care creaza un fisier , scrie ceva in el si apoi il citeste

file_put_contents('fisier.txt','Continutul fisierului');
$continut = file_get_contents('fisier.txt');
echo $continut;

//9 Definiti o clasa simpla si creati o instanta a acesteia

class ClasaSimpla{
    public $atribut = 'valoareee';

}
$obiect = new ClasaSimpla();
echo '<br>'.$obiect->atribut;

//10 Creati un script care inverseaza un sir de caractere
$sir = "Marian";
echo '<br>'.strrev($sir);
?>