
<?php

$utilizatori = array(
    1 => array('username' => 'Mihai', 'password' => '154321', 'nivelacces' => 'administrator'),
    2 => array('username' => 'Ion', 'password' => '834156', 'nivelacces' => 'client'),
    3 => array('username' => 'Mircea', 'password' => '121231', 'nivelacces' => 'client'),
    4 => array('username' => 'Mihai', 'password' => '254321', 'nivelacces' => 'administrator')
);

function verificaUser($user, $parola, $utilizatori){
    $userExists = false;
    $isUnique = true;

    foreach($utilizatori as $usar){
        if($usar['username'] === $user && $usar['password'] === $parola){
            $userExists = true;
            break;
        }
        if($usar['username'] === $user){
            $isUnique = false;
        }
    }

    if($userExists){
        return "Salut $user";
        
       
    } elseif (!$isUnique) {
         return "User duplicat";
    } else {
        return "User Invalid";
    }
}

$userDeVerificat = '  Mihai  '; 
$parolaDeVerificat = '834156'; 

$return = verificaUser(trim($userDeVerificat), $parolaDeVerificat, $utilizatori);
echo $return;

?>
