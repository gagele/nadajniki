<html>

<head>
    <title>Tytuł strony</title>
    <meta charset="utf-8">
    <meta name="description" content="Opis strony">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>



    <div id="cale">

        <div id="header">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="index.php"><h3>Nadajniki</h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Strona główna <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="archiwum.php">Archiwum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dodaj.php">Dodaj wpis</a>
                        </li>

                    </ul>
                </div>
            </nav>

        </div>

        <div id="guziki">

        </div>

        <div id="container">
          <center>
            <?php
                $connection = new mysqli('localhost','root','','nadajniki');

                if(mysqli_connect_errno() != 0){
                    echo("Nastąpił błąd w trakcie łączenia z baza danych");
                } 

                $select = "SELECT call_sign,name,date,time,rst,locator,remark FROM nadajnik ORDER BY date DESC LIMIT 50";
                
                $wypisanie = $connection -> query($select);
echo "<table class=\"tabelka\" cellpadding=\"2\" border=1>";
              echo("<tr>");
               echo("<th>Call Sign</th>");
                    echo("<th>Name</th>");
                    echo("<th>Date</th>");
                    echo("<th>Time</th>");
                    echo("<th>RST</th>");
                    echo("<th>Locator</th>");
                    echo("<th>Remark</th>");
              echo("</tr>");
                while(($rekord = $wypisanie -> fetch_assoc()) !== null){
                    echo("<tr>");
                    echo("<td>".$rekord['call_sign']."</td>");
                    echo("<td>".$rekord['name']."</td>");
                    echo("<td>".$rekord['date']."</td>");
                    echo("<td>".$rekord['time']."</td>");
                    echo("<td>".$rekord['rst']."</td>");
                    echo("<td>".$rekord['locator']."</td>");
                    echo("<td>".$rekord['remark']."</td>");
                    echo('</tr>');
                }
            echo("</table>");

                $connection -> close();
            ?>
              </center>
        </div>
        
        <div id="flags">
                <center>
                    <img src="gfx/pl.png" alt="Polish" class="fl">
                    <img src="gfx/eng.png" alt="English" class="fl">
                    <img src="gfx/de.png" alt="Deutsch" class="fl">

                    <img src="gfx/rus.png" alt="Russian" class="fl">
                </center>
            </div>

    </div>


    <!--jquery bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>
