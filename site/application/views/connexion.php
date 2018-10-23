<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>

<div class="row" style="margin-top: 15%; ">
    <div class="col s4 offset-s4">
        <div class="card orange lighten-2">
            <form action="<?php echo site_url('selfcare/connexion') ?>" method="post">
                <div class="card-content white-text">
                    <span class="card-title">Connexion</span>
                    <div class="row input-field">
                        <label for="pseudo" style="color: black"> nom d'utilisateur</label>
                        <input type="text" name="pseudo" required id="pseudo">
                    </div>
                    <div class="row input-field">
                        <label for="pwd" style="color: black">mot de passe</label>
                        <input type="password" name="pwd" required id="pwd">
                    </div>
                </div>
                <div class="card-action">
                    <span class="btn waves-effect"><input type="submit" value="valider"></span>
                </div>
            </form>
        </div>
    </div>
</div>
