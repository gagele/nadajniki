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
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <a class="navbar-brand" href="index.php">
                    <h3>Nadajniki</h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Strona główna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="archiwum.php">Archiwum</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="dodaj.php">Dodaj wpis<span class="sr-only">(current)</span></a>
                        </li>

                    </ul>
                </div>
            </nav>




            <div id="formularz" class="content">
                <div id="nazwy">
                    Call sign *<br>Name * <br>Date * <br>Time *<br>RST * <br>Locator<br>Remark
                </div>
                <div id="formularz1">
                    <form name="formularz-dodawanie" action="pobranie_danych.php" method="POST">
                        <input type="text"  name="call-sign" required>
                        <br><input type="text" name="name" required>
                        <br><input type="text" name="date" required>
                        <font class="info">DD/MM/YYYY</font>
                        <br> <input type="text" name="time" required>
                        <br> <input type="text" name="rst" required>
                        <font class="info">Keep this short, like 579. </font>
                        <br> <input type="text" name="locator">
                        <font class="info"> XXNNXX - 6 characters
                            with no space between the characters, for example JO67KI.</font>
                        <br><input type="text" name="remark">
                        <font class="info">
                            QTH can also be typed here, not in the locator field!</font>
                        <br><br>*Fields marked with this sign must be filled with information, otherwise you will be rejected. <input type="submit" name="dodaj" value="Save Report" class="btn btn-dark">
                        <br><br>
                    </form>

                </div>
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
