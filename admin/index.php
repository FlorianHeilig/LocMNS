
<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/admin/include/protect.php";

if(isset($_SESSION["user_connected"])){
    echo $_SESSION["user_connected"];
}else{
    echo "Pas de session";
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acceuil | admin</title>
    </head>
    <body>
        <?php include_once $_SERVER["DOCUMENT_ROOT"]."/admin/template/header.php";?>
        <main>
            <a href="/admin/product/">Stock</a>
        </main>
    </body>
</html>