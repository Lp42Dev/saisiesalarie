<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GestionCE - Création des salariés</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>

    <form action="cible.php" method="POST">
    
        <!-- NOM -->
        <p><label>Nom : <input type="text" name="nom" /></label></p>
        
        <!-- PRENOM -->
        <p><label>Prénom : <input type="text" name="prenom" /></label></p>
        
        <!-- ITINERANT ? -->
        <p><label>Itinérant? <input type="checkbox" name="intinerant" /></label></p>
        
        <!-- SITUATION FAMILIALE -->
        <p>
        <label>Situation familiale: </label>
         <select name="sitfam">
            <option value="0" selected="selected">Célibataire</option>
            <option value="1">pacsé</option>
            <option value="2">Marié</option>
        </select>
        </p>
        
        <!-- NOMBRE D'ENFANTS DE MOINS DE 13 ANS (limité à 3 enfants par foyé) -->
        <p>
        <label>Nombre d'enfants de moins de 13 ans: </label>
         <select name="nbenf">
            <option value="0" selected="selected">Pas d'enfant</option>
            <option value="1">1</option>
            <option value="2">2</option>
			<option value="3">3</option>
        </select>
        </p>
        
        
        <p><input type="submit" /></p>

    </form>    

</body>
</html>
