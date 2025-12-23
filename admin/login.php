<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/admin/include/config.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/admin/include/connect.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/admin/include/function.php";

$errorMessage="";

if(!empty($_POST['pwd']) && !empty($_POST['mail'])){

    $errorMessage="<p>Probleme de mail ou mot de passe</p>";

    $sql = "SELECT * FROM admin
        WHERE admin_mail = :mail";

    $stmt = $db->prepare($sql);
    $stmt->execute([":mail" => $_POST['mail']]);
    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        if(password_verify($_POST['pwd'], $row["admin_password"])){
            session_start();
            $_SESSION["user_connected"] = "";
            header("Location:index.php");
            exit;
        }
    }else{
        echo $errorMessage;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Login | Admin</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="mail">Email</label>
        <input type="email" name="mail" id="mail" required>
        <label for="pwd">Mot de passe</label>
        <input type="password" name="pwd" id="pwd" required>
        <input type="submit" value="Ok">
        <?= $errorMessage; ?>
    </form>
</body>
</html>
