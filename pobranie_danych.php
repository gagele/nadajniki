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
    $freqmhz = $_POST["freq-mhz"];
    $mode = $_POST["mode"];
    $locator = $_POST["locator"];
    $remark = $_POST["remark"];

    $call=strtoupper($call); //zamiana na wielkie litery
    $name=strtolower($name); //zamiana na wszystkie male
    $name=ucfirst($name); //zamiana na pierwsza wielka
    $locator=strtoupper($locator); //locator na wielkie

        
    $insert = "INSERT INTO nadajnik (`call_sign`,`name`,`date`,`time`,`rst`,`locator`,`freqmhz`,`mode`,`remark`) VALUES ('$call','$name','$date','$time','$rst','$locator','$freqmhz','$mode','$remark')";
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
