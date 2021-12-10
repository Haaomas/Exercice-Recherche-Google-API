<?php
if (isset($_COOKIE['motcle']) && isset($_COOKIE["duree"])) {
    $motcle = $_COOKIE['motcle'];
    $duree = $_COOKIE['duree'];
    echo "Vous avez recherché le mot-clé $motcle sur une durée de $duree. <br>";

    echo `Vous avez recherché le mot-clé $motcle pour $duree. <br>`;
    if ($duree == "Moins d'une heure") {
        $urlGoogle = "https://news.google.com/?output=rss&q=$motcle%20when%3A1h&hl=fr&gl=FR&ceid=FR%3Afr";
    } elseif ($duree == "Aujourd'hui") {
        $urlGoogle = "https://news.google.com/?output=rss&q=$motcle%20when%3A1d&hl=fr&gl=FR&ceid=FR%3Afr";
    } elseif ($duree == "Cette semaine") {
        $urlGoogle = "https://news.google.com/?output=rss&q=$motcle%20when%3A7d&hl=fr&gl=FR&ceid=FR%3Afr";
    }
    $data = simplexml_load_file($urlGoogle);
    // var_dump($data);
    foreach ($data->channel->item as $item) {
        echo "<h2><a href=" . $item->link . ">" . $item->title . "</a></h2>";
    }
} else {
    echo "Le cookie n'existe pas ";
}
