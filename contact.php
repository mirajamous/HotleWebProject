<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmeilar/Exception.php';
require_once 'phpmeilar/PHPMailer.php';
require_once 'phpmeilar/SMTP.php';
$mail = new PHPMailer(true);
$alert='';
if(isset($_POST['submit'])){
    $name=$_POST['namee'];
    $email=$_POST['emaill'];
    $message=$_POST['con'];
    $subject=$_POST['subj'];
    try{
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='miramarhotel2002@gmail.com';
        $mail->Password='aseelmira123';
        $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port='587';

        $mail->setFrom('miramarhotel2002@gmail.com');
        $mail->addAddress('miramarhotel2002@gmail.com');

        $mail->isHTML(true);
        $mail->Subject ="$subject";
        $mail->Body =" <h3>Name : $name <br> Email: $email <br> Message:$message </h3>";
        $mail->send();
//        ?>
<!--        <script>-->
<!--            alert("Thank you, your email has been sent");-->
<!--        </script>-->
<!--        --><?php
        $alert="<p><b>Thank you, your email has been sent</b></p>";

    }catch (Exception $e){

       echo "erroorrr";



    }



}






?>

<!DOCTYPE html>
<html>
<head>
    <title> Grand Miramar</title>
    <link rel="icon" type="image/x-icon" href="img/logoImg.png">
    <link rel="stylesheet" href="css/contact.css">

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
        function testText(){
            var x=document.getElementById("p-con");
            x.style.display="block";
        }
    </script>
</head>
<body>

<!--<div class="success">-->
<!--    <span>message send success</span></div>-->
<!--<div class="alert-error" > <span>-->
<!--            error message </span></div>-->

<div class="header">

    <div class="nav">
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src="img/logoImg.png"></a>

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
        <form method="post" action="contact.php">
            <div class="container">
                <h1>Contacts</h1>
                <div class="ff">
                    <div class="wrap1">
                        <label for="namee">Name <span>*</span></label><br>
                        <input type="text" id="namee" name="namee" require>

                    </div>
                    <div class="wrap2">
                        <label for="subj">Subject <span>*</span></label><br>
                        <input type="text" id="subj" name="subj" require>

                    </div>

                </div>
                <div class="ff">
                    <div class="wrap1">
                        <label for="emaill">Email <span>*</span></label><br>
                        <input type="text" id="emaill" name="emaill" require>

                    </div>
                    <div class="wrap2">
                        <label for="phonee">Phone</label><br>
                        <input  type="number" id="phonee" name="phonee">

                    </div>

                </div>
                <div class="ff">
                    <div class="wrap3">
                        <label for="con">Coments <span>*</span></label><br>
                        <textarea id="con" name="con">

                        </textarea>
                    </div>
                    <div class="wrap4">
                        <input type="submit" name="submit" value="Contact us"><br><br>
                        <div> <?php echo $alert;?></div>
                    </div>
                </div>
            </div>
    </div>
    </form>
</div>

</div>

<!-- part3 -->
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


    <a href="https://www.facebook.com/GrandMiramarPuertoVallarta/?ref=hl" target="_blank"> <i class="fa fa-facebook"
                                                                                              aria-hidden="true" class="facebook"></i></a>
    <a href="https://www.instagram.com/grandmiramarpv/" target="_blank"> <i id="icon1" id="facebook" class="fa fa-instagram"
                                                                            aria-hidden="true"></i></a>
    <a href="https://www.youtube.com/channel/UC1Poz8zWn4v55zg31bw6U-g" target="_blank"> <i id="icon2" class="fa fa-youtube-play" aria-hidden="true"></i></a>
    <a href="https://twitter.com/GrandMiramarPV" target="_blank"><i id="icon3" class="fa fa-twitter" aria-hidden="true"></i></a>
</div>
<script type="text/javascript">
    if(window.history.replaceState()){
        window.history.replaceState(null,null,window.location.href);
    }

</script>
</body>
</html>