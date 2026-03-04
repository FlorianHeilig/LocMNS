<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/admin/include/config.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/admin/include/connect.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/admin/include/protect.php";

$limit = 50;
$page = 1;
if(!empty($_GET['page']) && $_GET['page']>1){
    $page = $_GET['page'];
}
$offset = ($page-1) * $limit;

$sql = "SELECT * FROM product ORDER BY product_id DESC LIMIT :offset, :limit";

$stmt = $db->prepare($sql);
$stmt->bindValue(":offset", $offset, PDO::PARAM_INT);
$stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
$stmt->execute();
$recordset = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Admin | Stock</title>
</head>
<body>  
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/admin/template/header.php";?>
</body>
</html>