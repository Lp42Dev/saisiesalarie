<!DOCTYPE html>
<html>
    <head>
        <title>Gestion CE - Récapitalatif création salarié</title>
    </head>

    <body>

        <?php
        echo '<p>Nom: ' . htmlspecialchars($_POST['nom']) . '<br>';

        /* PRENOM SALARIE
        version classique: echo 'Bonjour ' . $_POST['prenom'];
        version protégée:
            avec htmlspecialchars => Affiche mais n'interprete pas le code html ou autres dans la variable récupérée
            avec strip_tags => n'affiche pas, ni interprete le code html recupéré dans la variable
        */
        echo 'Prénom: ' . htmlspecialchars($_POST['prenom']) . '</p>';

        if (isset($_POST['intinerant']))
        {
            echo '<p>Intinerant: OUI<br>';
        }
        else
        {
            echo '<p>Intinerant: NON<br>'; 
        }
        
        echo 'Situation familiale: ' . $_POST['sitfam'] . ' - ';
        switch ($_POST['sitfam'])
        {
            case 0:
                echo 'Célibataire';
            break;

            case 1:
                echo 'Pacsé';
            break;

            case 2:
                echo 'Marié';
            break;

            default:
                echo "non définie";
        
        }
        echo "</p>";



        ?>

    </body>
</html>