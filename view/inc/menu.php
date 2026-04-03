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
            // pour afficher l'activation
            // on peut vérifier si la page
            // actuelle est celle de la boucle
            // le isset évite le bug de la page d'accueil
            $activeThis = (isset($_GET['p'])&& $page == $_GET['p'])
                           ? 'class="active"'
                           : '';
        ?>
        <li><a href="./?p=<?= $page ?>" <?= $activeThis ?>><?= ucfirst($page) ?></a></li>
        <?php
        endforeach;
        ?>
    </ul>
</nav>