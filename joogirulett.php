<?php
require_once("funktsioonid.php");
session_start();
baasi_yhendus();

$mode="";
if (!empty($_GET["mode"])){
    $mode=$_GET["mode"];
}
include_once("head.php");
switch($mode){
    case "joogid":
        kuva_joogid();
        break;
    case "jook":
        kuva_jook();
        break;
    case "lisa":
        lisa();
        break;
    case "register":
        register();
        break;
    /*case  "login":
        fake_login();
        break;
    case "logout":
        logout();
        break;

    default:
        include_once("vaated/joogid.php");
        break;*/
}
include_once("foot.html");
?>

