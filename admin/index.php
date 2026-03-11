
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
        <script src="/admin/js/script.js" defer></script>
        <title>Acceuil | admin</title>
    </head>
    <body>
        <?php include_once $_SERVER["DOCUMENT_ROOT"]."/admin/template/header.php";?>
        <main>
            <div class="container">
                <div class="list-btn">
                    <div class="list-nav-btn">
                        <button class="nav-btn active">
                        <a href="">Stock</a>
                        <div></div>
                        </button>
                        <button class="nav-btn">
                        <a href="">Commande</a>
                        <div></div>
                        </button>
                        <button class="nav-btn">
                        <a href="">Retard</a>
                        <div></div>
                        </button>
                    </div>
                    <button class="btn">
                        <a href="">+ Nouveau produit</a>
                    </button>
                </div>
                <form id="search-form" action="" method="GET">
                <table>
                    <tr>
                    <th id="id">Id</th>
                    <th id="image">Image</th>
                    <th id="name">Nom</th>
                    <th id="reference">Référence</th>
                    <th id="category">Catégorie</th>
                    <th id="stock">Quantité</th>
                    <th id="action">Actions</th>
                    </tr>
                    <tr>
                    <td id="id">
                        <input
                        class="range"
                        type="number"
                        min="1"
                        name="id_product_min"
                        placeholder="Min"
                        /><input
                        class="range"
                        type="number"
                        min="1"
                        name="id_product_max"
                        placeholder="Max"
                        />
                    </td>
                    <td id="image"></td>
                    <td id="name">
                        <input
                        type="text"
                        name="name_product"
                        placeholder="Recherche nom"
                        />
                    </td>
                    <td id="reference">
                        <input
                        type="text"
                        name="reference_product"
                        placeholder="Recherche ref"
                        />
                    </td>
                    <td id="category">
                        <select name="category_product">
                        <option value="cat1">Ordinateurs Portables</option>
                        <option value="cat2">Ordinateurs Fixes</option>
                        <option value="cat3">Ordinateurs Mac</option>
                        <option value="cat4">MacBook</option>
                        <option value="cat5">PC Gamer</option>
                        <option value="cat6">Mini PC</option>
                        <option value="cat7">Clavier</option>
                        <option value="cat8">Souris</option>
                        <option value="cat9">Ecran PC</option>
                        <option value="cat10">Iphone</option>
                        <option value="cat11">Smartphone Samsung</option>
                        <option value="cat12">VR - Réalité Virtuelle</option>
                        <option value="cat13">Tablette Samsung</option>
                        <option value="cat14">Ipad</option>
                        <option value="cat15">Ipad Mini</option>
                        <option value="cat16">Ipad Pro</option>
                        <option value="cat17">Surface Pro</option>
                        <option value="cat18">Tablette Graphique</option>
                        </select>
                    </td>
                    <td id="stock">
                        <input
                        class="range"
                        type="number"
                        min="1"
                        name="stock_product_min"
                        placeholder="Min"
                        /><input
                        class="range"
                        type="number"
                        min="1"
                        name="stock_product_max"
                        placeholder="Max"
                        />
                    </td>
                    <td id="action">
                        <input
                        type="submit"
                        class="btn"
                        name="search-product"
                        value="Rechercher"
                        />
                    </td>
                    </tr>
                    <tr>
                    <td id="id"><p>1</p></td>
                    <td id="image"><img src="" /></td>
                    <td id="name"><p>iPhone 16 Pro 256 Go</p></td>
                    <td id="reference"><p>IPHP16-256-BLCK</p></td>
                    <td id="category">Iphone</td>
                    <td id="stock">53</td>
                    <td id="action">
                        <a href="">
                        <img src="src/pictures/trash.png" class="icon" />
                        </a>
                        <a href="">
                        <img src="src/pictures/pencil.png" class="icon" />
                        </a>
                    </td>
                    </tr>
                </table>
                </form>
            </div>
        </main>
    </body>
</html>