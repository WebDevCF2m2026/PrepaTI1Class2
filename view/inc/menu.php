<?php
# view/inc/menu.php
// si on est sur la homapage ($active existe), sinon vide
$homeActive = (isset($active))? $active : '';
?>
<nav>
    <a href="./" class="logo">DevPortfolio</a>
    <button class="menu-toggle">☰</button>
    <ul class="nav-links">
        <li><a href="./" <?= $homeActive?>>Accueil</a></li>
        
        <li><a href="./?p=about">À propos</a></li>
        <li><a href="./?p=skills">Compétences</a></li>
        <li><a href="./?p=projects">Projets</a></li>
        <li><a href="./?p=contact">Contact</a></li>
    </ul>
</nav>