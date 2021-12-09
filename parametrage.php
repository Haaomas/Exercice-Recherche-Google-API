<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramétrage du flux</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
            margin: 1rem;
        }
    </style>
</head>


<body>
    <h1>Parétrage des news</h1>
    <form action="">
        <label for="news">Recheche</label>
        <input type="text" id="news" name="news" size="80">
        <br>
        <label for="date">Plage de la recherche</label>
        <select name="date" id="date">
            <option>Moins d'une heure</option>
            <option>Ajourd'hui</option>
            <option>Cette semaine</option>
        </select>
        <br>
        <input type="button" value="Choisir ces paramètres">
    </form>
</body>

</html>