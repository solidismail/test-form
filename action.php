
Bonjour, <?php echo htmlspecialchars($_POST['nom']); ?>.
Tu as <?php echo (int)$_POST['age']; ?> ans.

<?php 

function randomPassword($length = 8) {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $length; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

echo '<a href="pwd.php?name='.htmlspecialchars($_POST['nom']).'&age='.(int)$_POST['age'].'&pwd='.randomPassword(4).'">Cliquer ici pour afficher ton  mot de passe</a> ';
?>
