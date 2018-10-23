<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<nav>
    <div class="nav-wrapper amber darken-2">
        <span class="brand-logo center">Bienvenue <?php echo $this->session->user['Pseudo'] ?></span>
        <ul class="right hide-on-med-and-down black-text">
            <li><a href="#">liste des salles</a></li>
            <li><a href="#"><i class="material-icons">refresh</i></a></li>
            <li><a href="#"><i class="material-icons">more_vert</i></a></li>
        </ul>
    </div>
</nav>
