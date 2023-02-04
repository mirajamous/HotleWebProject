<?php
session_start();

if(isset($_POST['userEmail']) && isset($_POST['userPassword'])){
    $uemail=$_POST['userEmail'];
    $upassword=$_POST['userPassword'];
    try {
        $flaguser=1;
        $db=new mysqli('localhost','root','','hotel');
        $qrystr="select * from users";
        $res=$db->query($qrystr);
        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_object();
            if($row->email==$uemail && $row->password== SHA1($upassword)){
               $_SESSION['useridd']=$row->userid;
                if($_SESSION['roomid']){
                header('location:form.php');
            }
            else{ header('location:room.php');}
            }
                else{
                $flaguser=0;
            }
        }
        if($flaguser==0){
            ?>
            <script>
                alert("Wrong in password or email");
            </script>
            <?php
        }
        $db->close();
    }catch (Exception $e){

    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title >LogIn</title>
    <link rel="icon" type="image/x-icon" href="img/logoImg.png">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="css/LoginStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Playfair+Display:ital@0;1&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Playfair+Display:ital,wght@0,400;1,400;1,700&display=swap"
            rel="stylesheet">

    <script>
        function myfun() {
            // alert("Wrong in password or email");
            document.location='SignUp.php';
        }
    </script>

</head>
<body>

<div class="header">

    <div class="nav">
        <div class="container">
            <div class="logo">
                <a href="index.php"> <img src="img/logoImg.png"></a>

            </div>
            <div class="navbar">
                <ul>
                    <li><a href='index.php'>home</a></li>
                    <li><a href='room.php'>rooms</a></li>
                    <li><a href='resturant.html'>Resturant</a></li>
                    <li><a href='#'>gallery</a></li>
                    <li><a href='Event.php'>event</a></li>
                    <li><a href='contact.php'>contact</a></li>

                </ul>

            </div>
        </div>

    </div>
    <div class="header-content">
        <div>
            <form method="post" action="login.php">
                <table>
                    <tr>

                        <td  id="log" colspan="2">LogIn</td>
                    </tr>
                    <tr>
                        <td><label for="EmailID">Email: </label></td>
                        <td><input type="text" id="userEmail" name="userEmail" width="30px" placeholder="Enter your email"></td>
                    </tr>
                    <tr>
                        <td><label for="passID">Password: </label></td>
                        <td><input type="password" id="userPassword" name="userPassword" width="30px" placeholder="Enter your password"></td>
                    </tr>
                    <tr> <td><input type="button" id="SignupID" name="signName" value="SignUp"class="aseel" onclick="myfun()"></td>
                        <td><input type="submit" id="logID" name="logName" value="LogIn" class="aseel" ></td>

                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>


<!--__Fianl part___-->
<div class="final">
    <img src="img/logoImg.png">
    <ul>
        <li>
            Paseo de los Corales 139 Conchas Chinas.
        </li>
        <li>
            Puerto Vallarta, Jalisco.
        </li>
        <li>
            48390 México
        </li>
        <li>
            +52 331 493 2744 / +52 338 852 9104.
        </li>
        <li id="linkmail">
            <a href="mailto:grandmiramar@rsvteam.com">grandmiramar@rsvteam.com</a>
        </li>
    </ul>

    <a href="https://www.facebook.com/GrandMiramarPuertoVallarta/?ref=hl" target="_blank"> <i class="fa fa-facebook" aria-hidden="true" class="facebook"></i></a>
    <a href="https://www.instagram.com/grandmiramarpv/" target="_blank"> <i id="icon1" id="facebook" class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="https://www.youtube.com/channel/UC1Poz8zWn4v55zg31bw6U-g" target="_blank"> <i id="icon2" class="fa fa-youtube-play" aria-hidden="true"></i></a>
    <a href="https://twitter.com/GrandMiramarPV" target="_blank"><i id="icon3" class="fa fa-twitter" aria-hidden="true"></i></a>
</div>

</body>
</html>