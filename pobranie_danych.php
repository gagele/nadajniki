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
        <h1>Your record has been added correctly!
</h1>
        <h4>Details of your record:</h4>
        <br>
        <div class="detale">
        <?php
            
            echo("<b>Call:</b> ".$call."<hr>");
            echo("<b>Name:</b> ".$name."<hr>");
            echo("<b>Date:</b> ".$date."<hr>");
            echo("<b>Time:</b> ".$time."<hr>");
            echo("<b>RST:</b> ".$rst."<hr>");
            echo("<b>Locator:</b> ".$locator."<hr>");
            echo("<b>Remark:</b> ".$remark."<hr>");
           
            
            
            ?>
            <form action="index.php">
        <input type="submit" value="Return to home page" class="btn btn-dark">
            </form>
        </div>
        </center>
        
        
    </body>
</html>


