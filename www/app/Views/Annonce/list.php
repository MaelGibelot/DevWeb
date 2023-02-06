<?php

echo '<table>';
echo '<tr>';
echo '<th>Ville départ</th>';
echo '<th>Ville arrivée</th>';
echo '<th>Date</th>';
echo '<th>Modèle voiture</th>';
echo '<th>Nombre de places</th>';
echo '<th>Email</th>';
echo '<th>Description</th>';
echo '</tr>';
foreach ($annonces as $row) {
    echo '<tr>';
    echo '<td>' . $row['villedep'] . '</td>';
    echo '<td>' . $row['villearr'] . '</td>';
    echo '<td>' . $row['date'] . '</td>';
    echo '<td>' . $row['voitmodele'] . '</td>';
    echo '<td>' . $row['nbplaces'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['desc'] . '</td>';
    echo '</tr>';
}
echo '</table>';