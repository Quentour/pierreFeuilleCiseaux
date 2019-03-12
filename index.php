
<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO
if ($opponentWeapon == 'fists'){
$indyWeapon = 'gun';
}

elseif ($opponentWeapon == 'whip') {
$indyWeapon = 'fist';
}
elseif ($opponentWeapon == 'gun') {
$indyWeapon = 'whip';
}
echo "enemie : $opponentWeapon <br/> indy : $indyWeapon"

?>
