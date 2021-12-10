<?php
if (isset($_COOKIE['motcle']) && isset($_COOKIE['duree'])) {
    echo "Mots-clé : {$_COOKIE['motcle']} <br>";
    echo "Durée : {$_COOKIE['duree']} <br>";
} else {
    echo "Les cookies ne sont pas accessibles";
}
