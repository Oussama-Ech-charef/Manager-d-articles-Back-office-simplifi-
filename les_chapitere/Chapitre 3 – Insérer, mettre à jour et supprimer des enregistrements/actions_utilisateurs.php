<?php



    require 'connexion.php';

try {

    $stmt = $pdo->prepare("INSERT into users (user_name, email) values (:user_name, :email)");
    $stmt->execute([
        'user_name' => 'Oussama',
        'email' => 'oussama@email.com'
    ]);
    echo "user ajouté avec succés.";
}catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>