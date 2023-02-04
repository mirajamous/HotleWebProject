<?php
if(isset($_POST['EmailName']) && isset($_POST['passName'])
    && isset($_POST['UserName'])&& isset($_POST['Gender'])
    && isset($_POST['phone'])&& isset($_POST['date'])
    && isset($_POST['address'])
){

    $uname=$_POST['UserName'];
        $ugender=$_POST['Gender'];
            $uphone=$_POST['phone'];
                $uaddress=$_POST['address'];
                $udob=$_POST['date'];
    $uemail=$_POST['EmailName'];
    $upassword=$_POST['passName'];

    try {
        $db=new mysqli('localhost','root','','hotel');
        $qrystr1="SELECT * FROM users where email='$uemail'";
        $rs=$db->query($qrystr1);

        if($rs->num_rows!=1){
        $qrystr="INSERT INTO `users` (`userid`, `username`, `password`, `address`, `email`, `gender`, `phone`, `dob`) 
VALUES (NULL,'".$uname."', SHA1('".$upassword."'), '".$uaddress."', '".$uemail."', '".$ugender."', '". $uphone."', '".$udob."')";
        $rs=$db->query($qrystr);
        $db->commit();
        $db->close();
        if($rs==1){
            header('location:login.php');
        }else{
            ?>
<script> alert("err");</script>
<?php
        }}
        else{
            ?>
            <script> alert("Email is already exists");</script>
                <?php
        }

    }catch (Exception $e){

    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
    <link rel="icon" type="image/x-icon" href="img/logoImg.png">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="css/SignUp.css">
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
            document.location='login.php';
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
                    <li><a href='index.php'>Home</a></li>
                    <li><a href='room.php'>Rooms</a></li>
                    <li><a href='resturant.html'>Resturant</a></li>
                    <li><a href='gallery.php'>Gallery</a></li>
                    <li><a href='Event.php'>Event</a></li>
                    <li><a href='contact.php'>Contact</a></li>

                </ul>

            </div>
        </div>

    </div>
    <div class="header-content">
        <div>
            <form action="SignUp.php" METHOD="post">
            <table>
                <tr>

                    <td  id="log" colspan="2" >SignUp</td>
                    
                </tr >
                <tr>
                    <td><label for="UserName">Name: </label></td>
                    <td><input type="text" id="UserName" name="UserName" width="30px"></td>
                </tr>
                <tr>
                    <td><label for="EmailName">Email: </label></td>
                    <td><input type="text" id="EmailName" name="EmailName" width="30px"></td>
                </tr>
                <tr>
                    <td><label for="passName">Password: </label></td>
                    <td><input type="password" id="passName" name="passName" width="30px"></td>
                </tr>
                <tr>
                    <td><label for="">Gender </label></td>
                    <td><input type="radio" id="Gender" name="Gender" value="Male">
                        <label for="Gender" style="width:20px;">Male</label>
                        <input type="radio" id="Gender2" name="Gender" value="Female"   >
                        <label for="Gender2" >Female</label></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number: </label></td>
                    <td><input type="number" id="phone" name="phone" width="30px"></td>
                </tr>
                <tr>
                    <td><label for="address">Address: </label></td>
                    <td><input type="text" id="address" name="address" width="30px"></td>
                </tr>
                <tr>
                    <td><label for="Date">Date of Birthday: </label></td>
                    <td><input type="date" id="date" name="date" width="30px"></td>
                </tr>
                <tr>
                    <td><input type="button" id="logName" name="logName" value="LogIn" class="aseel" onclick="myfun()" ></td>
                    <td><input type="submit" id="signName" name="signName" value="SignUp"class="aseel"></td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!--************************************************************Final part********************************************************************************-->
<!--________________Fianl part_________________-->
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
            <a href="mailto:miramarhotel2002@gmail.com">miramarhotel2002@gmail.com</a>
        </li>
    </ul>

    <!-- <p> Paseo de los Corales 139 Conchas Chinas.<br>
        ​Puerto Vallarta, Jalisco.<br>
        48390 México<br>
        +52 331 493 2744 / +52 338 852 9104.<br><br>
        <a>grandmiramar@rsvteam.com</a>
    </p> -->
    <a href="https://www.facebook.com/GrandMiramarPuertoVallarta/?ref=hl" target="_blank"> <i class="fa fa-facebook"
                                                                                              aria-hidden="true" class="facebook"></i></a>
    <a href="https://www.instagram.com/grandmiramarpv/" target="_blank"> <i id="icon1" id="facebook" class="fa fa-instagram"
                                                                            aria-hidden="true"></i></a>
    <a href="https://www.youtube.com/channel/UC1Poz8zWn4v55zg31bw6U-g" target="_blank"> <i id="icon2" class="fa fa-youtube-play" aria-hidden="true"></i></a>
    <a href="https://twitter.com/GrandMiramarPV" target="_blank"><i id="icon3" class="fa fa-twitter" aria-hidden="true"></i></a>
</div>

</body>
</html>