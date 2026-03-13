<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iphone 17 Pro 256 Go Noir</title>
</head>
<body>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/public/template/header.php";?>
    <main>
        <section class="product-container">
            <div class="product-img">
                <img src="/public/src/pictures/product/icon/iphone.png">
            </div>
            <div class="product-description">
                <h2>Location Iphone 17 Pro</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <form action="" method="POST">
                    <div class="product-filters">
                        <div class="filter-group">
                            <p>Taille de l'écran : <strong>6.3 pouces</strong></p>
                            <div class="filter-options">
                            <label class="radio-btn">
                                <input type="radio" name="taille" value="6.3" checked>
                                <span>6.3 pouces</span>
                            </label>
                            <label class="radio-btn">
                                <input type="radio" name="taille" value="6.9">
                                <span>6.9 pouces</span>
                            </label>
                            </div>
                        </div>
                        <div class="filter-group">
                            <p>Capacité : <strong>512 Go</strong></p>
                            <div class="filter-options">
                            <label class="radio-btn">
                                <input type="radio" name="capacite" value="256">
                                <span>256 Go</span>
                            </label>
                            <label class="radio-btn">
                                <input type="radio" name="capacite" value="512" checked>
                                <span>512 Go</span>
                            </label>
                            <label class="radio-btn">
                                <input type="radio" name="capacite" value="1024">
                                <span>1024 Go</span>
                            </label>
                            <label class="radio-btn">
                                <input type="radio" name="capacite" value="2048">
                                <span>2048 Go</span>
                            </label>
                            </div>
                        </div>
                        <div class="filter-group">
                            <p>Couleur : <strong>Bleu</strong></p>
                            <div class="filter-options">
                            <label class="radio-btn radio-img">
                                <input type="radio" name="couleur" value="blanc">
                                <span><img src="iphone-blanc.png" alt="Blanc"></span>
                            </label>
                            <label class="radio-btn radio-img">
                                <input type="radio" name="couleur" value="bleu" checked>
                                <span><img src="iphone-bleu.png" alt="Bleu"></span>
                            </label>
                            <label class="radio-btn radio-img">
                                <input type="radio" name="couleur" value="orange">
                                <span><img src="iphone-orange.png" alt="Orange"></span>
                            </label>
                            </div>
                        </div>
                        <input type="submit" class="btn" value="Louer">
                    </div>
                </form>
            </div>
        </section>
        <section class="product-section">
            <div class="product-section-header">
                <h2>Produit similaires</h2>
            </div>
            <div class="product-list">
                <i class="bx bx-chevron-left"></i>
                <a href="product/product.php">
                    <div class="product-card">
                        <img src="hp.png" alt="Iphone 17 Pro" />
                        <p>Iphone 17 Pro</p>
                    </div>
                </a>
                <a href="product/product.php">
                    <div class="product-card">
                        <img src="lenovo.png" alt="Iphone 17" />
                        <p>Iphone 17</p>
                    </div>
                </a>
                <a href="product/product.php">
                    <div class="product-card">
                        <img src="dell.png" alt="Iphone 16 Pro" />
                        <p>Iphone 16 Pro</p>
                    </div>
                </a>
                <a href="product/product.php">
                    <div class="product-card">
                        <img src="dell2.png" alt="Iphone 16" />
                        <p>Iphone 16</p>
                    </div>
                </a>
                <i class="bx bx-chevron-right"></i>
            </div>
        </section>
    </main>
</body>
</html>