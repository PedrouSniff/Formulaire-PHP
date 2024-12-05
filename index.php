<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Formulaire</title>
</head>
<body>
    <!-- Exo1 -->
    <h2>Exo1</h2>
    <?php
    if(isset($_GET['ville']) && isset($_GET['transport'])){
        echo "La ville choisie est " . $_GET['ville'] . " et le voyage se fera en " . $_GET['transport'] . " !";
    }   
    ?>

    <!-- Exo2 -->
    <h2>Exo2</h2>
    <form action="index.php" method="GET">
        <label for="animal">Quel est votre animal préféré ?</label>
        <input id="animal" type="text" name="animal">
        <button>Envoyer</button>
        <p>
            <?php
            if (isset($_GET['animal'])){
                echo "votre animal préféré est " . $_GET['animal'];
            }?>
        </p>
    </form>

    <!-- Exo3 -->
    <h2>Exo3</h2>
    <form action="index.php" method="POST">
        <input type="color" id="couleur" name="couleur">    
        <!-- <select name="couleur" id="couleur">
            <option value="blue">Bleu</option>
            <option value="red">Rouge</option>
            <option value="green">Vert</option>
        </select> -->
        <label for="psd">Pseudo</label>
        <input id="psd" type="text" name="psd">
        <button>Submit</button>
    </form>

    <?php
        if (isset($_POST['psd']) && isset($_POST['couleur'])){
            $psd = $_POST['psd'];
            $color = $_POST['couleur'];
            echo "<p style='background-color:".$color."'>". $psd . "</p>";
        }
    ?>

    <!-- Exo4 -->
    <h2>Exo4</h2>
    <form action="index.php" method="POST">
        <label for="dès"></label>
        <input id="dès" type="number" name="dès">
        <button>Submit</button>
    </form>
    <?php 
        if (isset($_POST['dès'])){
            if (!empty($_POST['dès'])){
                $dès = $_POST['dès'];
                if ($dès % 6 == 0){
                    echo rand(1,$dès);
                }else {
                    header('location:index.php?erreur=1');
                }
            }
        }
        if (isset($_GET['erreur'])){
            echo 'Entrez un multiple de 6';
        }
    ?>

    <!-- Exo5 -->
    <h2>Exo5</h2>
    <form action="index.php" method="POST">
        <label for="utilisateur">Nom d'utilisateur :</label>
        <input id="utilisateur" type="text" name="utilisateur">
        <label for="mdp">Mot de Passe :</label>
        <input id="mdp" type="password" name="mdp">
        <button>Submit</button>
    </form>
    <?php 
        if (isset($_POST['utilisateur']) && isset($_POST['mdp'])){
            $uti = $_POST['utilisateur'];
            $mdp = $_POST['mdp'];

            if ($uti == 'admin' && $mdp == 1234) {
                header('location:exo5.php');
            }else {
                echo "<p style='color:red'>Vérifiez vos informations !</p>";
            }
        }?>

    <!-- Exo6 -->
    <h2>Exo6</h2>
    <form action="index.php" method="POST">
        <label for="nbr1">Nombre 1 :</label>
        <input type="number" id="nbr1" name="nbr1">    
        <select name="opération" id="opération">
            <option value="addition">+</option>
            <option value="soustraction">-</option>

            <option value="multiplication">×</option>
            <option value="division">÷</option>
        </select>
        <label for="nbr2">Nombre 2 :</label>
        <input id="nbr2" type="number" name="nbr2">
        <button>Submit</button>
    </form>
    <?php 
    if (!empty($_POST['nbr1']) && !empty($_POST['nbr2'])){
        if (isset($_POST['nbr1']) && isset($_POST['nbr2'])){
            $nbr1 = $_POST['nbr1'];
            $nbr2 = $_POST['nbr2'];
            $opé = $_POST['opération'];

            if ($opé == "addition"){
                $resultat = $nbr1 + $nbr2 ;
                echo $nbr1 . "+" . $nbr2 . "=" . $resultat;
            }else if ($opé == "soustraction"){
                $resultat = $nbr1 - $nbr2 ;
                echo $nbr1 . "-" . $nbr2 . "=" . $resultat;
            }else if ($opé == "multiplication"){
                $resultat = $nbr1 * $nbr2 ;
                echo $nbr1 . "×" . $nbr2 . "=" . $resultat;
            }else if ($opé == "division" && $nbr2 != 0){
                $resultat = $nbr1 / $nbr2 ;
                echo $nbr1 . "÷" . $nbr2 . "=" . $resultat;
            }else {
                echo "calcul impossible !";
            };
        }
    }?>

    <!-- Exo10 -->
    <h2>Exo10</h2>
    <form action="index.php" method="POST">
        <input type="file" name="userfile">
    </form>
    <?php 
        
    ?>


    </body>
</html>
