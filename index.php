<?php
	$btnval=$_GET["button"];

        if($btnval == "home") {
                exec('for cmd in EXIT EXIT EXIT EXIT HOME;do echo $cmd | nc 192.168.1.4 8080;sleep 0.5;done');
        }

       	exec("echo $btnval | nc 192.168.1.4 8080");
	//print($btnval);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Listenlive Web Remote Control</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<form action="index.php" method="get">
<table id="remote">
  <tr>
    <td><button name="button" value="POWER">POWER</button></td>
    <td></td>		
    <td><button name="button" value="lcd_tv">LCD/TV</button></td>
  </tr>
  <tr>
    <td><button name="button" value="i_tv">I-TV</button></td>
    <td><button name="button" value="MUTE">MUTE</button></td>		
    <td><button name="button" value="network">NETWORK</button></td>
  </tr>
  <tr>
    <td><button name="button" value="i_radio">I-RADIO</button></td>
    <td><button name="button" value="fullscreen">FULLSCR</button></td>		
    <td><button name="button" value="home">HOME</button></td>		
    <td></td>
  </tr>
  <tr>
    <td><button name="button" value="PGUP">PAGE-</button></td>
    <td><button name="button" value="del">DEL</button></td>		
    <td><button name="button" value="PGDN">PAGE+</button></td>
  </tr>
  <tr>
    <td><button id="symbol" name="button" value="REWIND">&#9665;&#9665;</button></td>
    <td><button name="button" value="fav">FAV</button></td>		
    <td><button id="symbol" name="button" value="FORWARD">&#9655;&#9655;</button></td>
  </tr>
  <tr>
    <td><button name="button" value="MENU">MENU</button></td>
    <td><button id="symbol" name="button" value="UP">&#9651;</button></td>		
    <td><button name="button" value="EXIT">EXIT</button></td>
  </tr>
  <tr>
    <td><button id="symbol" name="button" value="LEFT">&#9665;</button></td>
    <td><button name="button" value="OK">ENTER</button></td>		
    <td><button id="symbol" name="button" value="RIGHT">&#9655;</button></td>
  </tr>
  <tr>
    <td><button id="symbol" name="button" value="play">&#9655;&#9647;&#9647;</button></td>
    <td><button id="symbol" name="button" value="DOWN">&#9661;</button></td>		
    <td><button id="symbol" name="button" value="STOP">&#9633;</button></td>
  </tr>
  <tr>
    <td><button name="button" value="VOLp">VOL+</button></td>
    <td><button id="symbol" name="button">&#8649;</button></td>		
    <td><button id="symbol" name="button" value="track_next">&#9655;&#9647;</button></td>
  </tr>
  <tr>
    <td></td>
    <td><button name="button" value="shuffle">SHUFFLE</button></td>		
    <td></td>
  </tr>
  <tr>
    <td><button name="button" value="VOLm">VOL-</button></td>
    <td><button id="symbol" name="button" value="REPEAT">&#8634;</button></td>		
    <td><button id="symbol" name="button" value="track_prev">&#9647;&#9665;</button></td>
  </tr>
</table>
</form>

</body>
</html>