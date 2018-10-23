<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<br>
<div class="row">
    <div class="col s6 offset-s3">
    <ul class="tabs amber darken-4">
        <li class="tab col s6"><a href="#salles" class="active black-text waves-effect">Salles</a></li>
        <li class="tab col s6"><a href="#reservations" class="black-text waves-effect">Reservations</a></li>
    </ul>
    </div>
</div>
<div class="row">
    <div id="salles" class="col s6 offset-s3">
        <table class="striped centered amber darken-4">
            <thead>
                <tr>
                    <th>nom</th>
                    <th>place</th>
                    <th>informatisé</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($salles as $salle) {
                    if ($salle->salle_verr == null){
                        echo "<tr>";
                        echo "<td>".$salle->salle_nom."</td>";
                        echo "<td>".$salle->salle_places."</td>";
                        echo "<td>".($salle->salle_informatise == 0 ? "<i class=\"material-icons\">cancel</i>" : "<i class=\"material-icons\">check_circle</i>")."</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <div id="reservations" class="col s6 offset-s3">
        <table class="striped centered amber darken-4">
            <thead>
            <tr>
                <th>date de début</th>
                <th>date de fin</th>
                <th>salle</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($reservations as $reservation) {
                    echo "<tr>";
                    echo "<td>".$reservation->reservation_debut."</td>";
                    echo "<td>".$reservation->reservation_fin."</td>";
                    echo "<td>".$reservation->salle_nom."</td>";
                    echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>