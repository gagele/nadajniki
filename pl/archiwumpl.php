<html>

<head>
    <title>Tytuł strony</title>
    <meta charset="utf-8">
    <meta name="description" content="Opis strony">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
</head>

<body>



    <div id="cale">

        <div id="header">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="indexpl.php"><h3>Nadajniki</h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="indexpl.php">Strona Główna</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="dodajpl.php">Dodaj Raport</a>
                        </li>
<li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Język
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="archiwumpl.php"><img src="../gfx/pl.png" alt="Polish" class="fl"></a>
          <a class="dropdown-item" href="../archiwum.php"><img src="../gfx/eng.png" alt="English" class="fl"></a>
          <a class="dropdown-item" href="../de/archiwumde.php"><img src="../gfx/de.png" alt="German" class="fl"></a>
          <a class="dropdown-item" href="../ru/archiwumru.php"><img src="../gfx/rus.png" alt="Russian" class="fl"></a>
        </div>
      </li>
                    </ul>
                </div>
            </nav>

        </div>

       <center>
            <h4><br>Witaj w archiwum wpisów.<br><br>(Przyciski sortowania narazie nie działają)
            </h4>
            
        <br>
        <input type="button" name="sort1" value="Raporty według połączeń" class="btn btn-dark">
        <input type="button" name="sort2" value="Raporty według KM" class="btn btn-dark">
        <input type="button" name="sort3" value="Najwyższe wyniki" class="btn btn-dark">
        <br>
        </center>

        <div id="container">
          <center>
            <?php
              //polaczenie z baza
                $connection = new mysqli('localhost','root','','nadajniki');


                if(mysqli_connect_errno() != 0){
                    echo("Nastąpił błąd w trakcie łączenia z baza danych");
                } 
              
              //deklaracja funkcji do liczenia odleglosci
                function valid_locator ($loc) {
                    if (preg_match("/^[A-R]{2}[0-9]{2}[A-X]{2}$/", $loc)) {
                        return 1;
                    }
                    else {
                        return 0;
                    }
                }

                function loc_to_latlon ($loc) {
                    $l[0] = 
                    (ord(substr($loc, 1, 1))-65) * 10 - 90 +
                    (ord(substr($loc, 3, 1))-48) +
                    (ord(substr($loc, 5, 1))-65) / 24 + 1/48;
                    $l[0] = deg_to_rad($l[0]);
                    $l[1] = 
                    (ord(substr($loc, 0, 1))-65) * 20 - 180 +
                    (ord(substr($loc, 2, 1))-48) * 2 +
                    (ord(substr($loc, 4, 1))-65) / 12 + 1/24;
                    $l[1] = deg_to_rad($l[1]);

                    return $l;
                }



                function deg_to_rad ($deg) {
                    return (M_PI * $deg/180);
                }

                function rad_to_deg ($rad) {
                    return (($rad/M_PI) * 180);
                }

                function bearing_dist($loc1, $loc2) {

                    if (!valid_locator($loc1) || !valid_locator($loc2)) {
                        return 0;
                    }

                    $l1 = loc_to_latlon($loc1);
                    $l2 = loc_to_latlon($loc2);

                    $co = cos($l1[1] - $l2[1]) * cos($l1[0]) * cos($l2[0]) +
                            sin($l1[0]) * sin($l2[0]);
                    $ca = atan2(sqrt(1 - $co*$co), $co);
                    $az = atan2(sin($l2[1] - $l1[1]) * cos($l1[0]) * cos($l2[0]),
                                sin($l2[0]) - sin($l1[0]) * cos($ca));

                    if ($az < 0) {
                        $az += 2 * M_PI;
                    }

                    $ret['km'] = round(6371*$ca);
                    $ret['deg'] = round(rad_to_deg($az));

                    return $ret;
                }

                //wypisanie do tablicy
              
                $select = "SELECT call_sign,name,date,time,rst,locator,remark FROM nadajnik ORDER BY id DESC";
                
                $wypisanie = $connection -> query($select);
              echo "<table class=\"tabelka\" cellpadding=\"2\" border=1>";
              echo("<tr>");
               echo("<th>Call Sign</th>");
                    echo("<th>Name</th>");
                    echo("<th>Date</th>");
                    echo("<th>Time</th>");
                    echo("<th>RST</th>");
                    echo("<th>Locator</th>");
                    echo("<th>KM</th>");
                    echo("<th>Remark</th>");
              echo("</tr>");
                while(($rekord = $wypisanie -> fetch_assoc()) !== null){
                    echo("<tr>");
                    echo("<td>".$rekord['call_sign']."</td>");
                    echo("<td class=imie>".$rekord['name']."</td>");
                    echo("<td>".$rekord['date']."</td>");
                    echo("<td>".$rekord['time']."</td>");
                    echo("<td>".$rekord['rst']."</td>");
                    echo("<td class='locator'>".$rekord['locator']."</td>");
                    $loc1 = $rekord['locator'];
                    $loc2 = "JO82JM";
                    $distance = bearing_dist($loc1, $loc2);
                    echo("<td>".$distance[@km]."km"."</td>");
                    echo("<td>".$rekord['remark']."</td>");
                    echo('</tr>');
                }
            echo("</table>");
                $connection -> close();
            ?>
              </center>
        </div>
        
    <!--The div element for the map -->
        <center>
        <div id="map">
            </div>
            <div class="close_map">x</div>
        </center>
        <script>
            $('.locator').click(function(){
                $('#map').css('opacity','1');
                $('#map').css('display','block');
                $('.close_map').css('display','block');
            })
            $('.close_map').click(function(){
                $('#map').css('opacity','0');
                $('#map').css('display','none');
                $('.close_map').css('display','none');
                initMap();
            })
        </script>
<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">



    

  </footer>
  <!-- Footer -->
    </div>


    <!--jquery bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../script.js"></script>
     <script async defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0GHs0JSPZJ0Igt4X-NdT5Hp2-z6rzNnE&callback=initMap"></script>
</body>

</html>