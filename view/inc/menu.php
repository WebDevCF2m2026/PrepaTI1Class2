<?php
# view/inc/menu.php
// si on est sur la homapage ($active existe), sinon vide
$homeActive = (isset($active))? $active : '';
?>
<nav>
    <a href="./" class="logo">DevPortfolio</a>
    <button class="menu-toggle">☰</button>
    <ul class="nav-links">
        <li><a href="./" <?= $homeActive?>>Homepage</a></li>
        <?php
        // tant on a des pages à afficher
        foreach(ARRAY_VALID_PAGES as $page):
        ?>
        <li><a href="./?p=<?= $page ?>"><?= ucfirst($page) ?></a></li>
        <?php
        endforeach;
        ?>
    </ul>
</nav>