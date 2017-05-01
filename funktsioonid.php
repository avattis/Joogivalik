<?php

function baasi_yhendus(){
    global $link;
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";
    $host = "localhost";

    $link = mysqli_connect($host, $user, $pass, $db) or die("ei saanud ¸hendatud - ");
    mysqli_query($link, "SET CHARACTER SET UTF8")or die($sql. " - ". mysqli_error($link));

}

function register(){
    global $link;
    $errors=array();
    if (!empty($_POST)){
        if (empty($_POST["username"])) {
            $errors[]="nimi kohustuslik";
        }
        if (empty($_POST["email"])) {
            $errors[]="email kohustuslik";
        }
        if (empty($_POST["password"])) {
            $errors[]="TParool kohustuslik";
        }
        if (empty($_POST["password2"])) {
            $errors[]="Parool2 kohutstulik";
        }


        if (empty($errors)){

            // siin sisestada andmed
            $username=mysqli_real_escape_string($link, $_POST["username"]);
            $email=mysqli_real_escape_string($link, $_POST["email"]);
            $password=mysqli_real_escape_string($link, $_POST["password"]);
            $password2=mysqli_real_escape_string($link, $_POST["password2"]);


            if ($password == $password2){
                $password = md5($password);
                $sql = "INSERT INTO A4_user (username, email, password) VALUES
 ('$username','$email', '$password')";
            $result = mysqli_query($link, $sql);

            if ($result){
                header("Location: ?mode=joogid");
            }
            }
        }

    }
    include_once("vaated/register.php");
}

function fake_login(){
    if (!empty($_GET["roll"])) {
        if ($_GET["roll"]=="admin"){
            $_SESSION["user"]="Boss";
            $_SESSION["roll"]="admin";
            $_SESSION["user_id"]=1;
        } else {
            $_SESSION["user"]="Treener1";
            $_SESSION["roll"]="kasutaja";
            $_SESSION["user_id"]=2;
        }
        header("Location: ?mode=loomad");
    }
    include_once("vaated/login.html");
}

function logout(){
    $_SESSION=array();
    session_destroy();
    header("Location: ?");
}

function kuva_joogid(){
    global $link;
    $joogid = array();
    $sql="SELECT id, name FROM A4_drinks";
    $result=mysqli_query($link, $sql) or die($sql. "-".mysqli_error($link));

    while($rida = mysqli_fetch_assoc($result)){
        $joogid[]=$rida;

    }
    include_once("vaated/joogid.php");
}

function kuva_jook(){
    global $link;
    //if (empty($_SESSION["roll"])){header("Location: ?mode=joogid");}
    if(!empty($_GET["id"])){

        $sql="SELECT * FROM A4_drinks WHERE id=".mysqli_real_escape_string($link, $_GET["id"]);
        $result = mysqli_query($link, $sql) or die("Sellist jooki ei ole");
        $jook= mysqli_fetch_assoc($result);
        if ($jook) {
            include_once ("vaated/jook.php");
        }
        else header("Location: ?mode=joogid");
    }
    //else {header("Location: ?mode=joogid");}

}


function lisa(){
    global $link;
    //if ( empty($_SESSION["roll"]) || (!empty($_SESSION["roll"]) && $_SESSION["roll"]!="admin")){ // ainult admin
        //header("Location: ?mode=loomad");}
    $errors=array();
    if (!empty($_POST)){
        if (empty($_POST["name"])) {
            $errors[]="nimi kohustuslik";
        }
        if (empty($_POST["ingredient1"])) {
            $errors[]="Esimene koostisosa kohustuslik";
        }
        if (empty($_POST["ingredient2"])) {
            $errors[]="Teine koostisosa kohustuslik";
        }
        if (empty($_POST["recipe"])) {
            $errors[]="Valmistamine kohustuslikud";
        }

        if (empty($errors)){
            // siin sisestada andmed
            $name=mysqli_real_escape_string($link, $_POST["name"]);
            $ingredient1=mysqli_real_escape_string($link, $_POST["ingredient1"]);
            $ingredient2=mysqli_real_escape_string($link, $_POST["ingredient2"]);
            $ingredient3=mysqli_real_escape_string($link, $_POST["ingredient3"]);
            $ingredient4=mysqli_real_escape_string($link, $_POST["ingredient4"]);
            $ingredient5=mysqli_real_escape_string($link, $_POST["ingredient5"]);
            $recipe=mysqli_real_escape_string($link, $_POST["recipe"]);

            $sql = "INSERT INTO A4_drinks (name, ingredient1, ingredient2, ingredient3, ingredient4,ingredient5, recipe) VALUES
 ('$name','$ingredient1', '$ingredient2','$ingredient3', '$ingredient4', '$ingredient5' , '$recipe')";
            $result = mysqli_query($link, $sql);
            if ($result){
                header("Location: ?mode=joogid");
            }
        }

    }
    include_once("vaated/lisa.php");

}

?>
