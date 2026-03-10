<?php



    require 'connexion.php';


    echo "<br>";

try {

    // Insert
    $Insert = $pdo->prepare("INSERT into users (user_name, email) values (:user_name, :email)");
    $Insert->execute([
        'user_name' => 'Oussama',
        'email' => 'oussama@email.com'
    ]);
    echo "user ajouté avec succés.";

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // Update
    $Update = $pdo->prepare("UPDATE users set user_name = :user_name, email = :email where id_user = :id_user");

    $Update->execute([
        'user_name' => 'Hassanee',
        'email' => 'hassanee@gmail.com',
        'id_user' => 2
    ]);
    echo "user mis à jour";



echo "<br>";
echo "<br>";
echo "<br>";


    // Delete
    $Delete = $pdo->prepare("DELETE from users where id_user = :id_user");

    $Delete->execute(['id_user' => 12]);

    echo "user supprimé.";


    echo "<br>";
    echo "<br>";
    echo "<br>";


    //Vérifier
    echo $Delete->rowCount() . " ligne(s) affectée(s).";




}catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}









?>