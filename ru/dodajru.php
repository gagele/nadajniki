<html>

<head>
    <title>Tytuł strony</title>
    <meta charset="utf-8">
    <meta name="description" content="Opis strony">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../style.css">

</head>

<body>



    <div id="cale">

      <div id="header">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="indexru.php"><h3>Nadajniki</h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="indexru.php">дома</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="archiwumru.php">архив</a>
                        </li>
                        
<li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          язык
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../pl/dodajpl.php"><img src="../gfx/pl.png" alt="Polish" class="fl">Polski</a>
          <a class="dropdown-item" href="../dodaj.php"><img src="../gfx/eng.png" alt="English" class="fl">English</a>
          <a class="dropdown-item" href="../de/dodajde.php"><img src="../gfx/de.png" alt="German" class="fl">Deutsch</a>
          <a class="dropdown-item" href="dodajru.php"><img src="../gfx/rus.png" alt="Russian" class="fl">русский</a>
        </div>
      </li>
                    </ul>
                </div>
            </nav>

        </div>



            <div id="formularz" class="content">
                <div id="nazwy">
                    Позывной * <br> Имя * <br> Дата * <br> Время * <br> RST * <br> Локатор <br> Примечание

                </div>
                <div id="formularz1">
                    <form name="formularz-dodawanie" action="pobranie_danychru.php" method="POST">
                        <input type="text"  name="call-sign" required>
                        <br><input type="text" name="name" required>
                        <br><input type="text" name="date" required>
                        <font class="info">DD/MM/YYYY</font>
                        <br> <input type="text" name="time" required>
                        <br> <input type="text" name="rst" required>
                        <font class="info">Держите это коротким, как 579. </font>
                        <br> <input type="text" name="locator">
                        <font class="info"><abbr title="6 characters with no space between the characters, for example JO67KI."> XXNNXX </abbr> </font>
                        <br><textarea cols="23" rows="4" name="remark"></textarea>
                        <font class="info">
                            QTH также может быть введен здесь, а не в поле Locator! </font>
                        <br> <br> * Поля, отмеченные этим знаком, должны быть заполнены информацией, в противном случае они будут отклонены.<input type="submit" name="dodaj" value="Сохранить отчет" class="btn btn-dark">
                        <br><br>
                    </form>

                </div>
            </div>
        </div>
        
<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

    
    <!-- Copyright -->
    
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
        


        <!--jquery bootstrap js -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>

       
</body>

</html>
