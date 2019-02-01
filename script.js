var str_chr_up = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var str_chr_lo = "abcdefghijklmnopqrstuvwxyz";
var str_num = "0123456789";

function cmd_calculate_dec_dms(var qth)
{
    var lat, lon, qth;
    var deg, min, sec;

                //qth = "JO73PO"; tu trzeba przypisac locator z php


    qth = qth.toUpperCase();                                    // Convert to upper case.


    lat = str_chr_up.indexOf(qth.charAt(1)) * 10;               // 2nd digit: 10deg latitude slot.
    lon = str_chr_up.indexOf(qth.charAt(0)) * 20;               // 1st digit: 20deg longitude slot.
    lat += str_num.indexOf(qth.charAt(3)) * 1;                  // 4th digit: 1deg latitude slot.
    lon += str_num.indexOf(qth.charAt(2)) * 2;                  // 3rd digit: 2deg longitude slot.
    if (qth.length == 6)
    {
        lat += str_chr_up.indexOf(qth.charAt(5)) * 2.5 / 60;    // 6th digit: 2.5min latitude slot.
        lon += str_chr_up.indexOf(qth.charAt(4)) * 5 / 60;      // 5th digit: 5min longitude slot.
    }

    if (qth.length == 4)                                        // Get coordinates of the center of the square.
    {
        lat += 0.5 * 1;
        lon += 0.5 * 2;
    }
    else
    {
        lat += 0.5 * 2.5 / 60;
        lon += 0.5 * 5 / 60;
    }

    lat -= 90;                                                  // Locator lat/lon origin shift.
    lon -= 180;

    
    var x = lat.toFixed(3);
    var y = lat.toFixed(3);
    
    return(0);
}