<?php
    $connection = new mysqli('localhost','root','','nadajniki');
    if(mysqli_connect_errno() != 0){
        echo("blad");
    }
    else{
        echo("no dziala lol");
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