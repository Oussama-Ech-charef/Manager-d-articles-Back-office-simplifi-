<?php 

require 'connexion.php';


try {
    $sql = "SELECT * FROM users";

    $stmt = $pdo->query($sql);

    $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);


    // foreach ($utilisateurs as $user) {
    //     echo "ID : " . $user['id'] . " -Nom : " . $user['nom'] . " -Email : " . $user['email'] . "<br>";
    // }


echo "<table border='1'>

<tr>
<th>ID_USER</th>
<th>Nom</th>
<th>Email</th>
<th>Date_birth</th>
</tr>";

foreach ($utilisateurs as $user) {
    echo "<tr>
    <td>{$user['id_user']}</td>
    <td>{$user['user_name']}</td>
    <td>{$user['email']}</td>
    <td>{$user['date_birth']}</td>
    </tr>";
}

echo "</table>";




} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}







?>