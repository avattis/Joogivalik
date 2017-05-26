<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="vaated/styles.css">
    <title>Projekt</title>
</head>

<body>
<div id="wrap">
    <ul id="menu">
        <li><a href="?">Pealeht</a></li>
        <li><a href="?mode=joogid">Joogid</a></li>
        <li><a href="?mode=lisa">Lisa jook</a></li>
        <li>
            <?php if ( !isset( $_SESSION[ 'username' ] ) ){
            echo "<li><a href=\"?mode=login\">Logi sisse</a></li>" ;
            echo "<li><a href=\"?mode=register\">Registreeri</a></li>";}
            else{
                echo "<li><p>&nbsp;&nbsp;&nbsp;Oled sisse logitud&nbsp;&nbsp;&nbsp;</p></li>";
                echo "<li><a href=\"?mode=logout\">Logi välja</a></li>";
            }?>

        </li>


    </ul>






