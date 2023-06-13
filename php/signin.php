<?php
if (isset($_POST['register'])) {
    if (!empty($_POST['user_login']) && !empty($_POST['password']) && !empty($_POST['confirmpassword'])) {
        $user_login = $_POST['user_login'];
        $password = $_POST['password'];
        $query = "INSERT INTO user (id, login, password) VALUES ('', '$user_login', '$password')";
        $db->query($query);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/signin.css">
</head>
<body>
    <?php include('../includes/header.php');?>
    <form action="" method="post">
        <h1>Inscription</h1>
        <input type="text" placeholder="Nom d'utilisateur*" name="user_login" required>
        <input type="password" placeholder="Mot de passe*" name="password" required>
        <input type="password" placeholder="Confirmation mot de passe*" name="confirmpassword" required>
        <input class="register" type="submit" name="register" value="S'inscrire">
    </form>
</body>
</html>