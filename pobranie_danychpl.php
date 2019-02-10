<?php
    $connection = new mysqli('localhost','root','','nadajniki');
    if(mysqli_connect_errno() != 0){
        echo("Nastąpił błąd w trakcie łączenia z baza danych");
    }
   
    
    $call = $_POST["call-sign"];
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $rst = $_POST["rst"];
    $locator = $_POST["locator"];
    $remark = $_POST["remark"];

    $insert = "INSERT INTO nadajnik (`call_sign`,`name`,`date`,`time`,`rst`,`locator`,`remark`) VALUES ('$call','$name','$date','$time','$rst','$locator','$remark')";
    $connection -> query($insert);
    $connection -> close();
?>

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
        <center>
<<<<<<< HEAD
        <h1>Twój raport został dodany z powodzeniem!
</h1>
        <h4>Szczegóły twojego raportu:</h4>
=======
        <h1>Your record has been added correctly!
</h1>
        <h4>Details of your record:</h4>
>>>>>>> 228d5ee9fd0c75cbfe683474979bf123cd200448
        <br>
        <div class="detale">
        <?php
            
            echo("<b>Call:</b> ".$call."<hr>");
<<<<<<< HEAD
            echo("<b>Name:</b> ".$name."<hr>");
            echo("<b>Date:</b> ".$date."<hr>");
            echo("<b>Time:</b> ".$time."<hr>");
            echo("<b>RST:</b> ".$rst."<hr>");
            echo("<b>Locator:</b> ".$locator."<hr>");
            echo("<b>Remark:</b> ".$remark."<hr>");
=======
            echo("<b>Imię:</b> ".$name."<hr>");
            echo("<b>Data:</b> ".$date."<hr>");
            echo("<b>Czas:</b> ".$time."<hr>");
            echo("<b>RST:</b> ".$rst."<hr>");
            echo("<b>Lokator:</b> ".$locator."<hr>");
            echo("<b>Komentarz:</b> ".$remark."<hr>");
>>>>>>> 228d5ee9fd0c75cbfe683474979bf123cd200448
           
            
            
            ?>
<<<<<<< HEAD
            <form action="index.php">
        <input type="submit" value="Powrót na stronę główną" class="btn btn-dark">
=======
            <form action="indexpl.php">
        <input type="submit" value="Return to home page" class="btn btn-dark">
>>>>>>> 228d5ee9fd0c75cbfe683474979bf123cd200448
            </form>
        </div>
        </center>
        
        
    </body>
</html>


