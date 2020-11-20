<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blitz</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-retro.min.css">


    <link href="https://fonts.googleapis.com/css?family=Montserrat|Shrikhand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <style>
        .display-1 {
            color: #F59A00;
            font-family: "Press Start 2P";
            text-shadow:
                /* Outline */
                -5px -5px 0 #000000,
                5px -5px 0 #000000,
                -5px 5px 0 #000000,
                5px 5px 0 #000000,
                -5px 0 0 #000000,
                5px 0 0 #000000,
                0 5px 0 #000000,
                0 -5px 0 #000000;
        }

        .bc-blue {
            background-color: #3C95B9;
        }

        h2 {
            color: #F59A00;
            font-weight: bold;
        }
        .contentAlign{
            text-align: center;
        }
        img{
            padding: 20px;
        }
        .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: lightgray;
   color: black;
   text-align: center;}
   .name{
    font-family: "Press Start 2P";
    font-size:18px;
   }
    </style>
</head>

<body style="padding-bottom:100px">

    <div class="jumbotron text-center text-secondary mb-0 radius-0 bc-blue ">
        <div class="container">
            <div class="ht-tm-header">
                <h1 class="display-1 display-xxl text-uppercase">BLITZ!</h1>
            </div>
        </div>
    </div>
    <div class="container contentAlign">
        <div style="padding:50px">
            <iframe width="800" height="500" allowfullscreen src="https://www.youtube.com/embed/E9s1ltPGQOo">
            </iframe>
        </div>
        <div>
            <h2>Description du jeu</h2>
            <p><?php require "textes/description.txt"?></p>
        </div>
        <div>
            <h2>Images</h2>
            <div>  
                Mini-Jeu de Labyrinthe
                <img src="images/Labyrinthe.png">
            </div>
            <div>  
                Mini-Jeu de course à obstacles
                <img src="images/Obstacles.png">
            </div>
            <div>  
                Mini-Jeu d'esquive de projectiles
                <img src="images/Esquive.png">
            </div>
        </div>
        <div class="mt-4">
            <h2>Informations sur nous</h2>

            <h3><b class="name">Pierre-Luc Bertrand</b></h3>
            <p>blablabla</p>
            <p><b>Adresse courriel:</b> pl.com</p>

            <h3><b class="name">Gabriel Laframboise</b></h3>
            <p>blablabla</p>
            <p><b>Adresse courriel:</b> gabriel.laframboise16@gmail.com</p>

            <h3><b class="name">Guillaume Paquin</b></h3>
            <p><?php require "textes/texteGuillaume.txt" ?> </p>
            <p><b>Adresse courriel:</b>  guillaume.paquin@videotron.ca</p>

            <h3><b class="name">Vincent Roy-St-Jean</b></h3>
            <p><?php require "textes/texteVincent.txt"?></p>
            <p><b>Adresse courriel:</b>  vinroy@live.ca</p>
        </div>
    </div>
    <footer class="footer">
        <p>Fait par Pierre-Luc Bertrand, Gabriel Laframboise, Guillaume Paquin et Vincent Roy-St-Jean</p>
        <p>Supervisé par Phillipe Simard</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>