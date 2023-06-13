<?php
if (isset($_POST['login'])) {
    if (!empty($_POST['loginform-user_login']) && !empty($_POST['loginform-password'])) {
        $user_login = $_POST['loginform-user_login'];
        $password = $_POST['loginform-password'];
        $sql = "SELECT * FROM user WHERE login=? AND password=? ";
        $query = $db->prepare($sql);
        $query->execute(array($user_login, $password));
        $row = $query->rowCount();
        if($row > 0) {
            $_SESSION['user'] = $user_login;
            header("location: ../index.php");
        }
        else {
            echo "User can't login";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <?php include('../includes/header.php');?>
    <form action="" method="post" class="login-form">
        <h1>Connexion</h1>
        <input type="text" placeholder="Nom d'utilisateur" name="loginform-user_login" required>
        <input type="password" placeholder="Mot de passe" name="loginform-password" required>
        <input class="login" type="submit" name="login" value="Se connecter">
    </form>
</body>
</html>