<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="/public/css/style.css" rel="stylesheet">
<script src="/public/js/script.js" defer></script>

<nav class="nav">
  <div class="list">
    <div class="burger-menu-icon">
      <i class="bx bx-menu"></i>
    </div>
    <div class="brand">
      <a href="/public/">
        <img src="/public/src/pictures/Logo_LocMNS.png" alt="logo LocMNS" width="70" height="70">
        LocMNS
      </a>
    </div>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/public/template/nav.php";?>
  </div>
  <div class="user-menu">
    <a href="/public/profile.php" title="Profil">
      <i class='bx bx-user'></i>
    </a>
  </div>

</nav>