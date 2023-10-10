<?php

echo strlen("Hello World");

echo str_word_count("Hello world hy!");

echo strrev("Aceasta e lumea mea !");

echo strpos("Hello world ", "world");

echo str_replace("World"," Dolly","Hello World!");

echo strtolower("Hello World") . "<br>";
echo strtoupper("hello world!");

echo ucfirst("hello world!");
echo ucwords("hello world!");

echo md5("parolaencriptata");
print_r(explode(" ","hello world , world !"));

echo implode(" ", array("Hello","world!"));

$str = "Cine' este acolo ? ";
echo addslashes($str); //adauga backslash-uri in fata unro caractere predefinite
//bine2hex();

$str = "hello";
echo addcslashes($str,'l');
//ltrim();
//rtrimt();
//strcmp();

$name = "Popescu Ion";
$name_name = "Popescu ION";

    if(!strcmp($name,$name_name)){
        echo "Sunt diferite";
    }else{
        echo "Sunt la fel";
    }
echo 1+1+22+print(20)+ print(19+20);

//tabla inmultirii cu 7 

for($i = 1; $i <= 10; $i++){
    echo 7*$i . " ";
}

$arr = array("php","java","html","css");

    foreach($arr as $limba){
        echo $limba . "<br>";
    }

?> 