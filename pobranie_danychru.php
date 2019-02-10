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
        <h1>Ваша запись была добавлена ​​правильно!
</h1>
        <h4>Подробности о вашей записи:</h4>
        <br>
        <div class="detale">
        <?php
            
            echo("<b>Позывной:</b> ".$call."<hr>");
            echo("<b>Имя:</b> ".$name."<hr>");
            echo("<b>Дата:</b> ".$date."<hr>");
            echo("<b>Время:</b> ".$time."<hr>");
            echo("<b>RST:</b> ".$rst."<hr>");
            echo("<b>Локатор:</b> ".$locator."<hr>");
            echo("<b>Примечание:</b> ".$remark."<hr>");
           
            
            
            ?>
            <form action="indexde.php">
        <input type="submit" value="Вернуться на главную страницу" class="btn btn-dark">
            </form>
        </div>
        </center>
        
        
    </body>
</html>


