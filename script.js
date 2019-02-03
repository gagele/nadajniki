
var str_chr_up = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var str_chr_lo = "abcdefghijklmnopqrstuvwxyz";
var str_num = "0123456789";

function cmd_calculate_dec_dms(qth)
{
    var lat, lon, qth;
    var deg, min, sec;

                //qth = "JO73PO"; tu trzeba przypisac locator z php


    qth = qth.toUpperCase();                                   


    lat = str_chr_up.indexOf(qth.charAt(1)) * 10;               
    lon = str_chr_up.indexOf(qth.charAt(0)) * 20;               
    lat += str_num.indexOf(qth.charAt(3)) * 1;                  
    lon += str_num.indexOf(qth.charAt(2)) * 2;                 
    if (qth.length == 6)
    {
        lat += str_chr_up.indexOf(qth.charAt(5)) * 2.5 / 60;   
        lon += str_chr_up.indexOf(qth.charAt(4)) * 5 / 60;      
    }

    if (qth.length == 4)                                        
    {
        lat += 0.5 * 1;
        lon += 0.5 * 2;
    }
    else
    {
        lat += 0.5 * 2.5 / 60;
        lon += 0.5 * 5 / 60;
    }

    lat -= 90;                                                  
    lon -= 180;

    
    var x = lat.toFixed(3);
    var y = lon.toFixed(3);
    
    var position = {lat: x, lng: y};
    return(position);   
}
function initMap(var position1, var position2){
        var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 3, center: position1});
        var marker = new google.maps.Marker({position: position1, map: map});
        var marker2 = new google.maps.Marker({position: position2, map: map});
}

$('.locator').click(function(){
    var locator1 = cmd_calculate_dec_dms($(this).html());
    var locator2 = cmd_calculate_dec_dms("JO82JM");
    
    initMap(locator1, locator2);
});







