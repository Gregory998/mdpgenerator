<?php 

if (!empty($_POST['length']) && !empty($_POST['number'])){

    $length = $_POST['length'];
    $number = $_POST['number'];
    $complexity = (int)$_POST['complexity']; // "(int)" permet de forcer la string à devenir un entier
    $specials = ['%21', '%2A', '%27', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23'];

// La longueur des mots doit être entre 6 et 10 caractères
// Le nombre de mot est compris entre 4 et 10 
    if ( $length >= 6 && $length <= 10 && $number >= 4 && $number <= 10){
    
    // On va appeller l'api et récupérer les valeurs de celle-ci.
        // Nous utiliserons curl pour la réception des données.
        // Les inputs seront concaténés dans l'url de l'api. 
    $ch = curl_init();
    $apiUrl = "https://random-word-api.herokuapp.com/word?length=$length&number=$number";
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $words = json_decode(curl_exec($ch), true);
    curl_close($ch); 

    $passWord = "";
// A partir d'une boucle nous allons parcourir les mots pour créer le mot de passe.
    foreach($words as $word){
        $passWord .= "$word";
        for($i = 0; $i <= $complexity; $i++){
            $passWord .= $specials[rand(0, count($specials) -1)]; // $specials[rand(0, count($specials)) permet de prendre une valeur aléatoire du tableau et -1 car on commence de 0
        }
    }
// Nous allons ajouter de la complexité avec une deuxième boucle qui ajoutera des caractères spéciaux après chaque mot.
    // Pour récupérer les caractères spéciaux nous utiliserons un tableau de caractères codés en dur.
// Quand tout est fini j'envoie le mot de passe par méthode GET dans une header location
    header("Location:index.php?password=$passWord");
    }
    else{
        header("Location:index.php?error=veuillez remplir correctement le formulaire");
    }
}else {
    echo "ERREUR";
// Envoyer un message d'erreur.
    }

?>