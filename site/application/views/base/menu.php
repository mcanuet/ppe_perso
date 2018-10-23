<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<nav>
    <div class="nav-wrapper amber">
        <span class="brand-logo center">Bienvenue <?php echo $this->session->user['pseudo'] ?></span>
        <ul class="right hide-on-med-and-down">
            <li><a href="#"><i class="material-icons">search</i></a></li>
            <li><a href="#"><i class="material-icons">view_module</i></a></li>
            <li><a href="#"><i class="material-icons">refresh</i></a></li>
            <li><a href="#"><i class="material-icons">more_vert</i></a></li>
        </ul>
    </div>
</nav>
