<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/admin/include/config.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/admin/include/connect.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/admin/include/function.php";

$errorMessage="";

if(!empty($_POST['pwd']) && !empty($_POST['mail'])){

    $errorMessage="<p class='errormessage'>mail ou mot de passe incorrect</p>";

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
    <link href="css/style.css" rel="stylesheet">
    <title>Login | Admin</title>
</head>
<body class="login">
    <div class="card">
      <h2>Connexion</h2>
      <form action="login.php" method="post">
        <div class="form-style">
          <div>
            <label for="mail">Email</label>
            <input class="login-input" type="email" name="mail" id="mail" required />
          </div>
          <div>
            <label for="pwd">Mot de passe</label>
            <input class="login-input" type="password" name="pwd" id="pwd" required />
          </div>
          <?= $errorMessage; ?>
          <input class="btn" type="submit" value="Connexion" />
        </div>
      </form>
    </div>
</body>
</html>
