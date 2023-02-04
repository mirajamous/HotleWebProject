<?php
session_start();
if(isset($_REQUEST['r1'])) {
    $db = new mysqli('localhost', 'root', '', 'hotel');
    $qrystr = "select * from room";
    $res = $db->query($qrystr);

    for ($i = 0; $i < $res->num_rows; $i++) {
        $row = $res->fetch_object();
        if ($row->roomid == 1) {

            $_SESSION['roomidd'] = $row->roomid;
            $_SESSION['roomprice'] = $row->price;
            header('location:form.php');
            break;
        }
    }

}
else if (isset($_REQUEST['r2'])){
    $db = new mysqli('localhost', 'root', '', 'hotel');
    $qrystr = "select * from room";
    $res = $db->query($qrystr);

    for ($i = 0; $i < $res->num_rows; $i++) {
        $row = $res->fetch_object();
        if ($row->roomid == 2) {

            $_SESSION['roomidd'] = $row->roomid;
            $_SESSION['roomprice'] = $row->price;
            header('location:form.php');
            break;
        }
    }

}
else if (isset($_REQUEST['r3'])){
    $db = new mysqli('localhost', 'root', '', 'hotel');
    $qrystr = "select * from room";
    $res = $db->query($qrystr);

    for ($i = 0; $i < $res->num_rows; $i++) {
        $row = $res->fetch_object();
        if ($row->roomid == 3) {

            $_SESSION['roomidd'] = $row->roomid;
            $_SESSION['roomprice'] = $row->price;
            header('location:form.php');
            break;
        }
    }

}
else if (isset($_REQUEST['r4'])){
    $db = new mysqli('localhost', 'root', '', 'hotel');
    $qrystr = "select * from room";
    $res = $db->query($qrystr);

    for ($i = 0; $i < $res->num_rows; $i++) {
        $row = $res->fetch_object();
        if ($row->roomid == 4) {

            $_SESSION['roomidd'] = $row->roomid;
            $_SESSION['roomprice'] = $row->price;
            header('location:form.php');
            break;
        }
    }

}
else if (isset($_REQUEST['r5'])){
    $db = new mysqli('localhost', 'root', '', 'hotel');
    $qrystr = "select * from room";
    $res = $db->query($qrystr);

    for ($i = 0; $i < $res->num_rows; $i++) {
        $row = $res->fetch_object();
        if ($row->roomid == 5) {

            $_SESSION['roomidd'] = $row->roomid;
            $_SESSION['roomprice'] = $row->price;
            header('location:form.php');
            break;
        }
    }

}
else if (isset($_REQUEST['r6'])){
    $db = new mysqli('localhost', 'root', '', 'hotel');
    $qrystr = "select * from room";
    $res = $db->query($qrystr);

    for ($i = 0; $i < $res->num_rows; $i++) {
        $row = $res->fetch_object();
        if ($row->roomid == 6) {

            $_SESSION['roomidd'] = $row->roomid;
            $_SESSION['roomprice'] = $row->price;
            header('location:form.php');
            break;
        }
    }

}
else if (isset($_REQUEST['r7'])){
    $db = new mysqli('localhost', 'root', '', 'hotel');
    $qrystr = "select * from room";
    $res = $db->query($qrystr);

    for ($i = 0; $i < $res->num_rows; $i++) {
        $row = $res->fetch_object();
        if ($row->roomid == 7) {

            $_SESSION['roomidd'] = $row->roomid;
            $_SESSION['roomprice'] = $row->price;
            header('location:form.php');
            break;
        }
    }

}
else if (isset($_REQUEST['r8'])){
    $db = new mysqli('localhost', 'root', '', 'hotel');
    $qrystr = "select * from room";
    $res = $db->query($qrystr);

    for ($i = 0; $i < $res->num_rows; $i++) {
        $row = $res->fetch_object();
        if ($row->roomid == 8) {

            $_SESSION['roomidd'] = $row->roomid;
            $_SESSION['roomprice'] = $row->price;
            header('location:form.php');
            break;
        }
    }

}
else if (isset($_REQUEST['r9'])){
    $db = new mysqli('localhost', 'root', '', 'hotel');
    $qrystr = "select * from room";
    $res = $db->query($qrystr);

    for ($i = 0; $i < $res->num_rows; $i++) {
        $row = $res->fetch_object();
        if ($row->roomid == 9) {

            $_SESSION['roomidd'] = $row->roomid;
            $_SESSION['roomprice'] = $row->price;
            header('location:form.php');
            break;
        }
    }

}
?>
<!DOCTYPE html>
<html>

<head>




    <!-- /******************************************************************3***************************************/ -->
    <script>
        var slideIndex1 = 1;
        showSlides1(slideIndex1);

        function plusSlides1(n1) {
            showSlides1(slideIndex1 += n1);
        }

        function currentSlide1(n1) {
            showSlides1(slideIndex1 = n1);
        }

        function showSlides1(n1) {

            var i1;
            var slides1 = document.getElementsByClassName("mySlides1");
            var dots1 = document.getElementsByClassName("dot1");
            if (n1 > slides1.length) { slideIndex1 = 1 }
            if (n1 < 1) { slideIndex1 = slides1.length }
            for (i1 = 0; i1 < slides1.length; i1++) {
                slides1[i1].style.display = "none";
            }
            for (i1 = 0; i1 < dots1.length; i1++) {
                dots1[i1].className = dots1[i1].className.replace(" active", "");
            }
            slides1[slideIndex1 - 1].style.display = "block";
            dots1[slideIndex1 - 1].className += " active";
        }
    </script>




    <!-- /******************************************************************5**************************************/ -->
    <script>
        var slideIndex11 = 1;
        showSlides11(slideIndex11);

        function plusSlides11(n11) {
            showSlides11(slideIndex11 += n11);
        }

        function currentSlide11(n11) {
            showSlides11(slideIndex11 = n11);
        }

        function showSlides11(n11) {

            var i11;
            var slides11 = document.getElementsByClassName("mySlides11");
            var dots11 = document.getElementsByClassName("dot11");
            if (n11 > slides11.length) { slideIndex11 = 1 }
            if (n11 < 1) { slideIndex11 = slides11.length }
            for (i11 = 0; i11 < slides11.length; i11++) {
                slides11[i11].style.display = "none";
            }
            for (i11 = 0; i11 < dots11.length; i11++) {
                dots11[i11].className = dots11[i11].className.replace(" active", "");
            }
            slides11[slideIndex11 - 1].style.display = "block";
            dots11[slideIndex11 - 1].className += " active";
        }
    </script>








    <!-- /******************************************************************6***************************************/ -->
    <script>
        var slideIndex2 = 1;
        showSlides2(slideIndex2);

        function plusSlides2(n2) {
            showSlides2(slideIndex2 += n2);
        }

        function currentSlide2(n2) {
            showSlides2(slideIndex2 = n2);
        }

        function showSlides2(n2) {

            var i2;
            var slides2 = document.getElementsByClassName("mySlides2");
            var dots2 = document.getElementsByClassName("dot2");
            if (n2 > slides2.length) { slideIndex2 = 1 }
            if (n2 < 1) { slideIndex2 = slides2.length }
            for (i2 = 0; i2 < slides2.length; i2++) {
                slides2[i2].style.display = "none";
            }
            for (i2 = 0; i2 < dots2.length; i2++) {
                dots2[i2].className = dots2[i2].className.replace(" active", "");
            }
            slides2[slideIndex2 - 1].style.display = "block";
            dots2[slideIndex2 - 1].className += " active";
        }
    </script>


    <!-- /******************************************************************7***************************************/ -->
    <script>
        var slideIndex3 = 1;
        showSlides3(slideIndex3);

        function plusSlides3(n3) {
            showSlides3(slideIndex3 += n3);
        }

        function currentSlide3(n3) {
            showSlides3(slideIndex3 = n3);
        }

        function showSlides3(n3) {

            var i3;
            var slides3 = document.getElementsByClassName("mySlides3");
            var dots3 = document.getElementsByClassName("dot3");
            if (n3 > slides3.length) { slideIndex3 = 1 }
            if (n3 < 1) { slideIndex3 = slides3.length }
            for (i3 = 0; i3 < slides3.length; i3++) {
                slides3[i3].style.display = "none";
            }
            for (i3 = 0; i3 < dots3.length; i3++) {
                dots3[i3].className = dots3[i3].className.replace(" active", "");
            }
            slides3[slideIndex3 - 1].style.display = "block";
            dots3[slideIndex3 - 1].className += " active";
        }
    </script>






    <!-- /******************************************************************8***************************************/ -->
    <script>
        var slideIndex4 = 1;
        showSlides4(slideIndex4);

        function plusSlides4(n4) {
            showSlides4(slideIndex4 += n4);
        }

        function currentSlide4(n4) {
            showSlides4(slideIndex4 = n4);
        }

        function showSlides4(n4) {

            var i4;
            var slides4 = document.getElementsByClassName("mySlides4");
            var dots4 = document.getElementsByClassName("dot4");
            if (n4 > slides4.length) { slideIndex4 = 1 }
            if (n4 < 1) { slideIndex4 = slides4.length }
            for (i4 = 0; i4 < slides4.length; i4++) {
                slides4[i4].style.display = "none";
            }
            for (i4 = 0; i4 < dots4.length; i4++) {
                dots4[i4].className = dots4[i4].className.replace(" active", "");
            }
            slides4[slideIndex4 - 1].style.display = "block";
            dots4[slideIndex4 - 1].className += " active";
        }
    </script>

<!--/*****************************************************9****************************************/-->

    <script>
        var slideIndex5 = 1;
        showSlides5(slideIndex5);

        function plusSlides5(n5) {
            showSlides5(slideIndex5 += n5);
        }

        function currentSlide5(n5) {
            showSlides5(slideIndex5 = n5);
        }

        function showSlides5(n5) {

            var i5;
            var slides5 = document.getElementsByClassName("mySlides5");
            var dots5 = document.getElementsByClassName("dot5");
            if (n5 > slides5.length) { slideIndex5 = 1 }
            if (n5 < 1) { slideIndex5 = slides5.length }
            for (i5 = 0; i5 < slides5.length; i5++) {
                slides5[i5].style.display = "none";
            }
            for (i5 = 0; i5 < dots5.length; i5++) {
                dots5[i5].className = dots5[i5].className.replace(" active", "");
            }
            slides5[slideIndex5 - 1].style.display = "block";
            dots5[slideIndex5 - 1].className += " active";
        }
    </script>



    <!-- /******************************************************************9**************************************/ -->
    <script>
        var slideIndex6 = 1;
        showSlides6(slideIndex6);

        function plusSlides6(n6) {
            showSlides6(slideIndex6 += n6);
        }

        function currentSlide6(n6) {
            showSlides6(slideIndex6 = n6);
        }

        function showSlides6(n6) {

            var i6;
            var slides6 = document.getElementsByClassName("mySlides6");
            var dots6= document.getElementsByClassName("dot6");
            if (n6 > slides6.length) { slideIndex6 = 1 }
            if (n6 < 1) { slideIndex6 = slides6.length }
            for (i6= 0; i6 < slides6.length; i6++) {
                slides6[i6].style.display = "none";
            }
            for (i6 = 0; i6 < dots6.length; i6++) {
                dots6[i6].className = dots6[i6].className.replace(" active", "");
            }
            slides6[slideIndex6 - 1].style.display = "block";
            dots6[slideIndex6 - 1].className += " active";
        }
    </script>
    <title> Grand Miramar</title>
    <link rel="stylesheet" href="css/room.css">
    <link rel="icon" type="image/x-icon" href="img/logoImg.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

    <style>
        .mySlides {display:none}
    </style>
    <!-- slider function -->
    <script>


//function for change the images


        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

           // function for room 1
        function myFunction() {
            var x = document.getElementById("divhude");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        // function for room 2

        function myFunction2() {
            var x = document.getElementById("divhude2");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        // function for room 3   
        function myFunction3() {
            var x = document.getElementById("divhude3");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        // function for room 4  

        function myFunction4() {
            var x = document.getElementById("divhude4");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        // function for room 5 

        function myFunction5() {
            var x = document.getElementById("divhude5");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        //function for room6
        function myFunction6() {
            var x = document.getElementById("divhude6");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        //function for room 7
        function myFunction7() {
            var x = document.getElementById("divhude7");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        //function for room 8
        function myFunction8() {
            var x = document.getElementById("divhude8");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

         //function for room 9
         function myFunction9() {
            var x = document.getElementById("divhude9");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }






    </script>
<!-- ********************************************************************************************** -->
  

</head>

<body>


    <div class="body2">

        <div class="nav">
            <div class="container">
                <div class="logo">
                <img src="img/logo2.png"> 

                </div>
                <div class="navbar">
                   
                         <img src="img/logo3.png">  
                     
                </div>
                <div class="navbar2">
                      <img src="img/logo4.png"> 
                </div>
            </div>

        </div>
        <div class="roomnav">
            <ul>
                <li id="im"> <a href='index.php'><img src="/img/logoImg.png"></a></li>
                <li><a href='index.php'>
                        <p>Home</p>
                    </a></li>
                <li> <a href='gallery.php'>
                        <p>Gallery</p>
                    </a> </li>
                <li> <a href='Event.php'>
                        <p>Event</p>
                    </a> </li>
                    <li><a href='resturant.html'>
                        <p>Resturant</p>
                    </a> </li>
                <li><a href='contact.php'>
                        <p>Contact</p>
                    </a> </li>
            </ul>
        </div>

        <div class="mother">
            <br>
<!--            <form method="post" action="room.php">-->
            <div class="rooms-part1">
                <div class="room1">
                    <img src="img/ROOMS1.jpg">
                    <div class="caption">
                        <h1>Junior Suite Corner Balcony</h1>
                        <p class="p1">4 personas (max. 2 minors)<br>
                            1 Queen size bed</p>
                        <p class="p2">Our beautiful Grand Corner Suite combine spaces designed exclusively for your
                            comfort. Each features a terrace with a privileged view of the sea. </p>
<form>
                            <input type="submit" Name="r1" value="Book Now" class="book">
</form>
                        <button onclick="myFunction()"> details</button>

                    </div>
                </div>
                <div class="room1">
                    <img src="img/ROOMS2.jpg">
                    <div class="caption">
                        <h1>Grand Junior Suite Corner Balcony</h1>
                        <p class="p1">4 personas (max. 2 minors)<br>
                            1 King size bed</p>
                        <p class="p2">Our beautiful Grand Corner Suite combine spaces designed exclusively for your
                            comfort. Each features a terrace with a privileged view of the sea. 1 …
                        </p>
                        <form>
                        <input type="submit" Name="r2" value="Book Now">
                        </form>
                        <button onclick="myFunction2()"> details</button>
                    </div>
                </div>
                <div class="room1">
                    <img src="img/ROOMS3.jpg">
                    <div class="caption">
                        <h1>Junior Suite</h1>
                        <p class="p1">4 personas (max. 2 minors)<br>
                            1 Queen size bed</p>
                        <p class="p2">The maximum capacity of our suites should be the sum of the adult occupants and
                            children over 3 years old. This suite accepts a third person with …</p>
                        <form>
                        <input type="submit" Name="r3" value="Book Now">
                        </form>
                       <button onclick="myFunction3()"> details</button>
                    </div>
                </div>
            </div>
            <div class="rooms-part1">
                <div class="room1">
                    <img src="img/ROOMS444.jpg">
                    <div class="caption">
                        <h1>Grand Junior Suite</h1>
                        <p class="p1">4 personas (max. 2 minors)<br>
                            1 King size bed or 2 Double beds</p>
                        <p class="p2"> The maximum capacity of our suites should be the sum of the adult occupants and
                            children over 3 years old. This suite accepts a third person with …</p>
                        <form>
                        <input type="submit" Name="r4" value="Book Now">
                        </form>
                        <button  onclick="myFunction4()"> details</button>
                    </div>
                </div>
                <div class="room1">
                    <img src="img/ROOMS55.jpg">
                    <div class="caption">
                        <h1>Master Suite</h1>
                        <p class="p1">3 personas<br>
                            1 King size bed</p>
                        <p class="p2">The maximum capacity of our suites should be the sum of the adult occupants and
                            children over 3 years old. 1 King Size bed & 1 Chaise-lounge queen …</p>
                        <form>
                        <input type="submit" Name="r5" value="Book Now"></form>
                        <button onclick="myFunction5()"> details</button>

                    </div>
                </div>
                <div class="room1">
                    <img src="img/ROOMS6.jpg">
                    <div class="caption">
                        <h1>2 Bedroom Suite</h1>
                        <p class="p1">6 personas (max. 2 minors)<br>
                            1 King size bed and 2 Double beds</p>
                        <p class="p2">1 King Size bed & 2 Double beds. One bedroom with King Bed and 32-inch LCD screen
                            One bedroom with two Double size beds and 32-inch LCD screen Your ….</p>
                        <form>
                        <input type="submit" Name="r6" value="Book Now"></form>
                        <button onclick="myFunction6()"> details</button>

                    </div>
                </div>
            </div>
            <div class="rooms-part1">
                <div class="room1">
                    <img src="img/ROOMS7.jpg">
                    <div class="caption">
                        <h1>3 Bedroom Suite</h1>
                        <p class="p1">8 personas (max. 2 minors)<br>
                            1 King size bed and 1 Queen size bed and 2 Double beds</p>
                        <p class="p2">1 King Size bed & 2 Double beds & 1 Queen bed. Master bedroom King Bed, 32-inch
                            LCD screen, bathroom, dressing room and terrace Bedroom with queen …</p>
                        <form>
                        <input type="submit" Name="r7" value="Book Now">
                        </form>
                        <button onclick="myFunction7()"> details</button>

                    </div>
                </div>
                <div class="room1">
                    <img src="img/ROOMS8.jpg">
                    <div class="caption">
                        <h1>Governor Suite PH</h1>
                        <p class="p1">8 personas (max. 4 minors)<br>
                            2 King size beds and 4 Queen size beds</p>
                        <p class="p2">This is a luxurious penthouse spread over three floors. Terraces on each level
                            feature a fabulous view of the ocean. The first floor houses the living …</p>
                        <form>
                        <input type="submit" Name="r8" value="Book Now"> </form><button onclick="myFunction8()"> details</button>

                    </div>
                </div>
                <div class="room1">
                    <img src="img/ROOMS9.jpg">
                    <div class="caption">
                        <h1>Presidential Suite PH</h1>
                        <p class="p1">8 personas (max. 4 minors)<br>
                            3 King size beds and 2 Queen size beds</p>
                        <p class="p2">Suite offers breathtaking beauty, luxury and exclusivity. It covers 9,225 square
                            feet on three floors. The beautifully decorated open concept living …</p>
                        <form>
                        <input type="submit" Name="r9" value="Book Now"> </form>
                        <button onclick="myFunction9()"> details</button>

                    </div>
                </div>
            </div>
<!--            </form>-->




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
    </div>


    <!-- /*********************************************************part tow**************************/ -->

    <!-- /*******************************************describe first room**********************************/ -->

    <div class="chiled" id="divhude">

        <table>
            <tr>

                <th colspan="2" > Amenities</th>
               <th> <button onclick="myFunction()" class="btn" style="text-align: right"><i class="fa fa-close"></i> Close</button></th>
            </tr>
            <tr>
                <td> Cable TV </td>
                <td>Terrace </td>
                <td> In-room safe</td>
            </tr>
            <tr>
                <td> Bath amenities</td>
                <td> Direct dial telephone</td>
                <td> Private bathroom</td>
            </tr>
            <tr>
                <td> Wireless Internetaccess</td>
                <td> Air conditioner</td>
                <td>Clock Radio </td>
            </tr>
            <tr>
                <td>Queen bed </td>
                <td> Air conditioner</td>
                <td> Clock Radio</td>
            </tr>
            <tr>
                <td> Full size chaise lounge</td>
                <td>
                </td>
                <td></td>

            </tr>

        </table>
        <br>


        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/room1/1.jpg" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/room1/2.jpg" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/room1/3.jpg" style="width:100%">
                <div class="text"></div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

    </div>


    <!-- /*******************************************describe secound room**********************************/ -->

    <div class="chiled2" id="divhude2">
        <table>
            <tr>

                <th colspan="2"> Amenities</th>
                <th><button onclick="myFunction2()" class="btn" style="text-align: right"><i class="fa fa-close"></i> Close</button></th>
            </tr>
            <tr>
                <td> Cable TV </td>
                <td>Terrace </td>
                <td> In-room safe</td>
            </tr>
            <tr>
                <td> Bath amenities</td>
                <td> Direct dial telephone</td>
                <td> Private bathroom</td>
            </tr>
            <tr>
                <td> Wireless Internetaccess</td>
                <td> Air conditioner</td>
                <td>Clock Radio </td>
            </tr>
            <tr>
                <td>Queen bed </td>
                <td> Air conditioner</td>
                <td> Clock Radio</td>
            </tr>
            <tr>
                <td> Full size chaise lounge</td>
                <td>
                </td>
                <td></td>

            </tr>
        </table><br>
        <br>
<!--        /*******************************************************/-->
        <div class="w3-container">

        </div>

        <div class="w3-content" style="max-width:400px; margin-left: 120px;">
            <img class="mySlide" src="img/room2/1.jpg" style="width:100%">
            <img class="mySlide" src="img/room2/2.jpg" style="width:100%">
            <img class="mySlide" src="img/room2/3.jpg" style="width:100%">
            <img class="mySlide" src="img/room2/4.jpg" style="width:100%">
        </div>

        <div class="w3-center" style="margin-bottom: 20px;margin-left: 290px">
            <div class="w3-section">
                <button class="w3-button w3-light-grey" onclick="plusDivs(-1)" style="background-color: #b30086;border-radius: 20px;text-align: center;padding: 5px 10px 5px 10px;color: white"><b>❮</b> </button>
                <button class="w3-button w3-light-grey" onclick="plusDivs(1)"style="background-color: #b30086;border-radius: 20px;text-align: center;padding: 5px 10px 5px 10px;color: white"><b>❯</b></button>
            </div>

        </div>

    </div>





    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlide");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-red", "");
            }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " w3-red";
        }
    </script>



















    <!-- /****************room 3******************************/ -->

    <div class="chiled3" id="divhude3">
        
        <table>
            <tr>

                <th colspan="2"> Amenities</th>
                <th><button onclick="myFunction3()" class="btn" style="text-align: right"><i class="fa fa-close"></i> Close</button></th>
            </tr>
            <tr>
                <td> Wireless Internet access </td>
                <td>Cable TV </td>
                <td> Air conditioner</td>
            </tr>
            <tr>
                <td> In-room safe</td>
                <td> Direct dial telephone</td>
                <td> Clock Radio</td>
            </tr>
            <tr>
                <td> Queen bed</td>
                <td> 32-inch-LCD TV</td>
                <td>42-inch-LCD TV </td>
            </tr>
            <tr>
                <td>Full size chaise lounge</td>
                <td> APrivate bathroom</td>
                <td> Bath amenities</td>
            </tr>
            <tr>
                <td>  Terrace</td>
                <td>Bank fees may apply in case of cancellation
                </td>
                <td></td>

            </tr>
        </table><br>


        <div class="slideshow1" >

            <div class="mySlides1 ">
                <div class="numbertext1">1 / 5</div>
                <img src="img/room3/1.jpg" style="width:100%">
                <div class="text1"></div>
            </div>

            <div class="mySlides1 ">
                <div class="numbertext1">2 / 5</div>
                <img src="img/room3/2.jpg" style="width:100%">
                <div class="text1"></div>
            </div>

            <div class="mySlides1 ">
                <div class="numbertext1">3 / 5</div>
                <img src="img/room3/3.jpg" style="width:100%">
                <div class="text1"></div>
            </div>
            <div class="mySlides1 ">
                <div class="numbertext1">4 / 5</div>
                <img src="img/room3/4.jpg" style="width:100%">
                <div class="text1"></div>
            </div>
            <div class="mySlides1 ">
                <div class="numbertext1">5 / 5</div>
                <img src="img/room3/5.jpg" style="width:100%">
                <div class="text1"></div>
            </div>

            <a class="prev1" onclick="plusSlides1(-1)">&#10094;</a>
            <a class="next1" onclick="plusSlides1(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot1" onclick="currentSlide1(1)"></span>
            <span class="dot1" onclick="currentSlide1(2)"></span>
            <span class="dot1" onclick="currentSlide1(3)"></span>
            <span class="dot1" onclick="currentSlide1(4)"></span>
            <span class="dot1" onclick="currentSlide1(5)"></span>
        </div>

    </div>

    <!-- /********************************room4******************************************/ -->


    <div class="chiled4" id="divhude4">
        <table>
            <tr>

                <th colspan="2"> Amenities</th>
                <th><button onclick="myFunction4()" class="btn" style="text-align: right"><i class="fa fa-close"></i> Close</button></th>
            </tr>
            <tr>
                <td> Wireless Internet access </td>
                <td> Air conditioner</td>
                <td>  In-room safe</td>
            </tr>
            <tr>
                <td> Direct dial telephone</td>
                <td> Clock Radio</td>
                <td> 32-inch-LCD TV</td>
            </tr>
            <tr>
                <td>42-inch-LCD TV</td>
                <td> Full size chaise lounge</td>
                <td>Work desk </td>
            </tr>
            <tr>
                <td>Bathroom with double sinks</td>
                <td> Whirlpool bathtub</td>
                <td> Bath amenities</td>
            </tr>
            <tr>
                <td>  Terrace</td>
                <td>Bank fees may apply in case of cancellation
                </td>
                <td></td>

            </tr>
        </table><br>


        <div class="slideshow11">

            <div class="mySlides11 ">
                <div class="numbertext11">1 / 10</div>
                <img src="img/room4/1.jpg" style="width:100%">
                <div class="text11"></div>
            </div>

            <div class="mySlides11 ">
                <div class="numbertext11">2 / 10</div>
                <img src="img/room4/2.jpg" style="width:100%">
                <div class="text11"></div>
            </div>

            <div class="mySlides11 ">
                <div class="numbertext11">3 / 10</div>
                <img src="img/room4/3.jpg" style="width:100%">
                <div class="text11"></div>
            </div>
            <div class="mySlides11 ">
                <div class="numbertext11">4 / 10</div>
                <img src="img/room4/4.jpg" style="width:100%">
                <div class="text11"></div>
            </div>
            <div class="mySlides11 ">
                <div class="numbertext11">5 / 10</div>
                <img src="img/room4/5.jpg" style="width:100%">
                <div class="text11"></div>
            </div>
            <div class="mySlides11 ">
                <div class="numbertext11">6 / 10</div>
                <img src="img/room4/6.jpg" style="width:100%">
                <div class="text11"></div>
            </div>
            <div class="mySlides11 ">
                <div class="numbertext11">7 / 10</div>
                <img src="img/room4/7.jpg" style="width:100%">
                <div class="text11"></div>
            </div>
            <div class="mySlides11 ">
                <div class="numbertext11">8 / 10</div>
                <img src="img/room4/8.jpg" style="width:100%">
                <div class="text11"></div>
            </div>
            <div class="mySlides11 ">
                <div class="numbertext11">9 / 10</div>
                <img src="img/room4/9.jpg" style="width:100%">
                <div class="text11"></div>
            </div>
            <div class="mySlides11 ">
                <div class="numbertext11">10 / 10</div>
                <img src="img/room4/10.jpg" style="width:100%">
                <div class="text11"></div>
            </div>

            <a class="prev11" onclick="plusSlides11(-1)">&#10094;</a>
            <a class="next11" onclick="plusSlides11(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot11" onclick="currentSlide11(1)"></span>
            <span class="dot11" onclick="currentSlide11(2)"></span>
            <span class="dot11" onclick="currentSlide11(3)"></span>
            <span class="dot11" onclick="currentSlide11(4)"></span>
            <span class="dot11" onclick="currentSlide11(5)"></span>
            <span class="dot11" onclick="currentSlide11(6)"></span>
            <span class="dot11" onclick="currentSlide11(7)"></span>
            <span class="dot11" onclick="currentSlide11(8)"></span>
            <span class="dot11" onclick="currentSlide11(9)"></span>
            <span class="dot11" onclick="currentSlide11(10)"></span>
        </div>



    </div>

    <!-- /********************************************************room5************************/ -->

    <div class="chiled5" id="divhude5">
        <table>
            <tr>

                <th colspan="2"> Amenities</th>
                <th><button onclick="myFunction5()" class="btn" style="text-align: right"><i class="fa fa-close"></i> Close</button></th>
            </tr>
            <tr>
                <td> Wireless Internet access </td>
                <td> Cable TV</td>
                <td> Air conditioner</td>
            </tr>
            <tr>
                <td>  In-room safe</td>
                <td> Direct dial telephone</td>
                <td> Clock Radio</td>
            </tr>
            <tr>
                <td>32-inch-LCD TV</td>
                <td> 42-inch-LCD TV</td>
                <td>Full size chaise lounge </td>
            </tr>
            <tr>
                <td>Work desk</td>
                <td> Private bathroom</td>
                <td> Bath amenities</td>
            </tr>
            <tr>
                <td>  Terrace</td>
                <td> Jacuzzi on the balcony </td>
                <td> </td>

            </tr>
        </table><br>


        <div class="slideshow2">

            <div class="mySlides2 ">
                <div class="numbertext2">1 / 9</div>
                <img src="img/room5/1.jpg" style="width:100%">
                <div class="text2"></div>
            </div>

            <div class="mySlides2 ">
                <div class="numbertext2">2 / 9</div>
                <img src="img/room5/2.jpg" style="width:100%">
                <div class="text2"></div>
            </div>

            <div class="mySlides2 ">
                <div class="numbertext2">3 / 9</div>
                <img src="img/room5/3.jpg" style="width:100%">
                <div class="text2"></div>
            </div>

            <div class="mySlides2 ">
                <div class="numbertext2">4 / 9</div>
                <img src="img/room5/4.jpg" style="width:100%">
                <div class="text2"></div>
            </div>

            <div class="mySlides2 ">
                <div class="numbertext2">5 / 9</div>
                <img src="img/room5/5.jpg" style="width:100%">
                <div class="text2"></div>
            </div>

            <div class="mySlides2 ">
                <div class="numbertext2">6 / 9</div>
                <img src="img/room5/6.jpg" style="width:100%">
                <div class="text2"></div>
            </div>
            <div class="mySlides2 ">
                <div class="numbertext2">7 / 9</div>
                <img src="img/room5/7.jpg" style="width:100%">
                <div class="text2"></div>
            </div>

            <div class="mySlides2 ">
                <div class="numbertext2">8 / 9</div>
                <img src="img/room5/8.jpg" style="width:100%">
                <div class="text2"></div>
            </div>

            <div class="mySlides2 ">
                <div class="numbertext2">9 / 9</div>
                <img src="img/room5/9.jpg" style="width:100%">
                <div class="text2"></div>
            </div>

            <a class="prev2" onclick="plusSlides2(-1)">&#10094;</a>
            <a class="next2" onclick="plusSlides2(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot2" onclick="currentSlide2(1)"></span>
            <span class="dot2" onclick="currentSlide2(2)"></span>
            <span class="dot2" onclick="currentSlide2(3)"></span>
            <span class="dot2" onclick="currentSlide2(4)"></span>
            <span class="dot2" onclick="currentSlide2(5)"></span>
            <span class="dot2" onclick="currentSlide2(6)"></span>
            <span class="dot2" onclick="currentSlide2(7)"></span>
            <span class="dot2" onclick="currentSlide2(8)"></span>
            <span class="dot2" onclick="currentSlide2(9)"></span>
        </div>



    </div>

    <!-- /******************room 6 *****************************/ -->

    <div class="chiled6" id="divhude6">
        <table style="margin-left: 40px">
            <tr>

                <th colspan="2" style="padding-left: 20px"> Amenities</th>
             <th>  <button onclick="myFunction6()" class="btn" style="text-align: right;"><i class="fa fa-close"></i> Close</button></th>
            </tr>
            <tr>
                <td> Wireless Internet access </td>
                <td> Cable TV</td>
                <td> Air conditioner</td>
            </tr>
            <tr>
                <td>  Ceiling fan</td>
                <td> In-room safe</td>
                <td> Direct dial telephone</td>
            </tr>
            <tr>
                <td> Clock Radio</td>
                <td> Kitchenette</td>
                <td>Dinning room </td>
            </tr>
            <tr>
                <td>42-inch-LCD TV</td>
                <td> Living room</td>
                <td> Two bathrooms</td>
            </tr>
            <tr>
                <td>  Bath amenities</td>
                <td> </td>
                <td> </td>

            </tr>
        </table><br>





        <div class="slideshow3">

            <div class="mySlides3 ">
                <div class="numbertext3">1 / 5</div>
                <img src="img/room6/1.jpg" style="width:100%">
                <div class="text3"></div>
            </div>

            <div class="mySlides3 ">
                <div class="numbertext3">2 / 5</div>
                <img src="img/room6/2.jpg" style="width:100%">
                <div class="text3"></div>
            </div>

            <div class="mySlides3 ">
                <div class="numbertext3">3 / 5</div>
                <img src="img/room6/3.jpg" style="width:100%">
                <div class="text3"></div>
            </div>

            <div class="mySlides3 ">
                <div class="numbertext3">4 / 5</div>
                <img src="img/room6/4.jpg" style="width:100%; height: 300px">
                <div class="text3"></div>
            </div>

            <div class="mySlides3 ">
                <div class="numbertext3">5 / 5</div>
                <img src="img/room6/5.jpg" style="width:100%">
                <div class="text3"></div>
            </div>

            <a class="prev3" onclick="plusSlides3(-1)">&#10094;</a>
            <a class="next3" onclick="plusSlides3(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot3" onclick="currentSlide3(1)"></span>
            <span class="dot3" onclick="currentSlide3(2)"></span>
            <span class="dot3" onclick="currentSlide3(3)"></span>
            <span class="dot3" onclick="currentSlide3(4)"></span>
            <span class="dot3" onclick="currentSlide3(5)"></span>
        </div>





    </div>


     <!-- /******************room 7 *****************************/ -->

     <div class="chiled7" id="divhude7">
        <table>
            <tr>

                <th colspan="2" style="padding-left: 20px"> Amenities</th>
                <th><button onclick="myFunction7()" class="btn" style="text-align: right"><i class="fa fa-close"></i> Close</button></th>
            </tr>
            <tr>
                <td> Wireless Internet access </td>
                <td> Cable TV</td>
                <td> Air conditioner</td>
            </tr>
            <tr>
                <td>  Ceiling fan</td>
                <td> In-room safe</td>
                <td> Direct dial telephone</td>
            </tr>
            <tr>
                <td> Clock Radio</td>
                <td> Kitchenette</td>
                <td>Dinning room </td>
            </tr>
            <tr>
                <td>42-inch-LCD TV</td>
                <td> Living room</td>
                <td> Guest bathroom</td>
            </tr>
            <tr>
               
                <td>Three bathrooms </td> 
                <td>  Bath amenities</td>
                <td> </td>

            </tr>
        </table><br>


         <div class="slideshow4">

             <div class="mySlides4 ">
                 <div class="numbertext4">1 / 8</div>
                 <img src="img/room7/1.jpg" style="width:100%">
                 <div class="text4"></div>
             </div>

             <div class="mySlides4 ">
                 <div class="numbertext4">2 / 8</div>
                 <img src="img/room7/2.jpg" style="width:100%">
                 <div class="text4"></div>
             </div>

             <div class="mySlides4 ">
                 <div class="numbertext4">3 / 8</div>
                 <img src="img/room7/3.jpg" style="width:100%">
                 <div class="text4"></div>
             </div>

             <div class="mySlides4 ">
                 <div class="numbertext4">4 / 8</div>
                 <img src="img/room7/4.jpg" style="width:100%">
                 <div class="text4"></div>
             </div>

             <div class="mySlides4 ">
                 <div class="numbertext4">5 / 8</div>
                 <img src="img/room7/5.jpg" style="width:100%">
                 <div class="text4"></div>
             </div>

             <div class="mySlides4 ">
                 <div class="numbertext4">6 / 8</div>
                 <img src="img/room7/6.jpg" style="width:100%">
                 <div class="text4"></div>
             </div>

             <div class="mySlides4 ">
                 <div class="numbertext4">7 / 8</div>
                 <img src="img/room7/7.jpg" style="width:100%">
                 <div class="text4"></div>
             </div>

             <div class="mySlides4 ">
                 <div class="numbertext4">8 / 8</div>
                 <img src="img/room7/8.jpg" style="width:100%">
                 <div class="text4"></div>
             </div>

             <a class="prev4" onclick="plusSlides4(-1)">&#10094;</a>
             <a class="next4" onclick="plusSlides4(1)">&#10095;</a>

         </div>
         <br>

         <div style="text-align:center">
             <span class="dot4" onclick="currentSlide4(1)"></span>
             <span class="dot4" onclick="currentSlide4(2)"></span>
             <span class="dot4" onclick="currentSlide4(3)"></span>
             <span class="dot4" onclick="currentSlide4(4)"></span>
             <span class="dot4" onclick="currentSlide4(5)"></span>
             <span class="dot4" onclick="currentSlide4(6)"></span>
             <span class="dot4" onclick="currentSlide4(7)"></span>
             <span class="dot4" onclick="currentSlide4(8)"></span>

         </div>



    </div>

     <!-- /******************room 8 *****************************/ -->

     <div class="chiled8" id="divhude8">
        <table>
            <tr>

                <th colspan="2"> Amenities</th>
                <th><button onclick="myFunction8()" class="btn" style="text-align: right"><i class="fa fa-close"></i> Close</button></th>
            </tr>
            <tr> 
                <td> Three floors</td>
                <td> Wireless Internet access </td>
                <td> Cable TV</td>
               
            </tr>
            <tr>
                <td>Air conditioner
                </td>
                <td>  Ceiling fan</td>
                <td> In-room safe</td>
                
            </tr>
            <tr>
                <td> Direct dial telephone</td>
                <td> Clock Radio</td>
                <td> Fully equipped kitchen with breakfast bar</td>
                
            </tr>
            <tr><td>Dinning room </td>
                <td>Four bedrooms, each with its own bathroom and walk-in closet</td>
                <td> LCD screens</td>
              
            </tr>
            <tr>
               
                <td>Living room </td> 
                <td> Guest bathroom</td>
                <td>Bath amenities </td>

            </tr>

            <tr>
               
                <td>Three terraces with ocean view</td> 
                <td> Palapa on rooftop entertainment area and Jacuzzi</td>
                <td> </td>

            </tr>
        </table><br>


         <div class="slideshow5">

             <div class="mySlides5 ">
                 <div class="numbertext5">1 / 11</div>
                 <img src="img/room8/1.jpg" style="width:100%; height: 230px">
                 <div class="text5"></div>
             </div>

             <div class="mySlides5 ">
                 <div class="numbertext5">2 / 11</div>
                 <img src="img/room8/2.jpg" style="width:100% ; height: 230px">
                 <div class="text5"></div>
             </div>

             <div class="mySlides5 ">
                 <div class="numbertext5">3 / 11</div>
                 <img src="img/room8/3.jpg" style="width:100% ; height: 230px">
                 <div class="text5"></div>
             </div>
             <div class="mySlides5 ">
                 <div class="numbertext5">4 / 11</div>
                 <img src="img/room8/4.jpg" style="width:100% ; height: 230px">
                 <div class="text5"></div>
             </div>

             <div class="mySlides5 ">
                 <div class="numbertext5">5 / 11</div>
                 <img src="img/room8/5.jpg" style="width:100% ; height: 230px">
                 <div class="text5"></div>
             </div>

             <div class="mySlides5 ">
                 <div class="numbertext5">6 / 11</div>
                 <img src="img/room8/6.jpg" style="width:100% ; height: 230px">
                 <div class="text5"></div>
             </div>
             <div class="mySlides5 ">
                 <div class="numbertext5">7 / 11</div>
                 <img src="img/room8/7.jpg" style="width:100% ; height: 230px">
                 <div class="text5"></div>
             </div>

             <div class="mySlides5 ">
                 <div class="numbertext5">8 / 11</div>
                 <img src="img/room8/8.jpg" style="width:100% ; height: 230px">
                 <div class="text5"></div>
             </div>

             <div class="mySlides5 ">
                 <div class="numbertext5">9 / 11</div>
                 <img src="img/room8/9.jpg" style="width:100% ; height: 230px">
                 <div class="text5"></div>
             </div>
             <div class="mySlides5 ">
                 <div class="numbertext5">10 / 11</div>
                 <img src="img/room8/10.jpg" style="width:100% ; height: 230px">
                 <div class="text5"></div>
             </div>

             <div class="mySlides5 ">
                 <div class="numbertext5">11 / 11</div>
                 <img src="img/room8/11.jpg" style="width:100%; height: 230px">
                 <div class="text5"></div>
             </div>

             <a class="prev5" onclick="plusSlides5(-1)">&#10094;</a>
             <a class="next5" onclick="plusSlides5(1)">&#10095;</a>

         </div>
         <br>

         <div style="text-align:center">
             <span class="dot5" onclick="currentSlide5(1)"></span>
             <span class="dot5" onclick="currentSlide5(2)"></span>
             <span class="dot5" onclick="currentSlide5(3)"></span>
             <span class="dot5" onclick="currentSlide5(4)"></span>
             <span class="dot5" onclick="currentSlide5(5)"></span>
             <span class="dot5" onclick="currentSlide5(6)"></span>
             <span class="dot5" onclick="currentSlide5(7)"></span>
             <span class="dot5" onclick="currentSlide5(8)"></span>
             <span class="dot5" onclick="currentSlide5(9)"></span>
             <span class="dot5" onclick="currentSlide5(10)"></span>
             <span class="dot5" onclick="currentSlide5(11)"></span>
         </div>



    </div>

     <!-- /******************room 9 *****************************/ -->

     <div class="chiled9" id="divhude9">
        <table>
            <tr>

                <th colspan="3"> Amenities<button onclick="myFunction9()" class="btn" style="text-align: right"><i class="fa fa-close"></i> Close</button></th>
            </tr>
            <tr> 
                <td> Three floors</td>
                <td> Wireless Internet access </td>
                <td> Cable TV</td>
               
            </tr>
            <tr>
                <td>Air conditioner
                </td>
                <td>  Ceiling fan</td>
                <td> In-room safe</td>
                
            </tr>
            <tr>
                <td> Direct dial telephone</td>
                <td> Clock Radio</td>
                <td> Fully equipped kitchen with breakfast bar</td>
                
            </tr>
            <tr><td>Dinning room </td>
                <td>Four bedrooms, each with its own bathroom and walk-in closet</td>
                <td>Wine Cellar </td>
              
            </tr>
            <tr>
               
                <td>LCD screens </td> 
                <td> Living room</td>
                <td>Game room </td>

            </tr>

            <tr>
               
                <td>Guest bathroom</td> 
                <td> Bath amenities</td>
                <td>Terrace </td>

            </tr>
            <tr>
               
                <td>Palapa on rooftop entertainment area and Jacuzzi </td> 
                <td> </td>
                <td> </td>

            </tr>
        </table><br>



         <div class="slideshow6">

             <div class="mySlides6 ">
                 <div class="numbertext6">1 / 13</div>
                 <img src="img/room9/1.jpg" style="width:100%; height: 200px">
                 <div class="text6"></div>
             </div>

             <div class="mySlides6 ">
                 <div class="numbertext6">2 / 13</div>
                 <img src="img/room9/2.jpg" style="width:100%; height: 200px">
                 <div class="text6"></div>
             </div>

             <div class="mySlides6 ">
                 <div class="numbertext6">3 / 13</div>
                 <img src="img/room9/3.jpg" style="width:100%; height: 200px">
                 <div class="text6"></div>
             </div>
             <div class="mySlides6 ">
                 <div class="numbertext6">4 / 13</div>
                 <img src="img/room9/4.jpg" style="width:100%; height: 200px">
                 <div class="text6"></div>
             </div>

             <div class="mySlides6 ">
                 <div class="numbertext6">5 / 13</div>
                 <img src="img/room9/5.jpg" style="width:100%; height: 200px">
                 <div class="text6"></div>
             </div>

             <div class="mySlides6 ">
                 <div class="numbertext6">6 / 13</div>
                 <img src="img/room9/6.jpg" style="width:100%; height: 200px">
                 <div class="text6"></div>
             </div>
             <div class="mySlides6 ">
                 <div class="numbertext6">7 / 13</div>
                 <img src="img/room9/7.jpg" style="width:100%; height: 200px">
                 <div class="text6"></div>
             </div>

             <div class="mySlides6 ">
                 <div class="numbertext6">8 / 13</div>
                 <img src="img/room9/8.jpg" style="width:100%; height: 200px">
                 <div class="text6"></div>
             </div>

             <div class="mySlides6 ">
                 <div class="numbertext6">9 / 13</div>
                 <img src="img/room9/9.jpg" style="width:100%; height: 200px">
                 <div class="text6"></div>
             </div>
             <div class="mySlides6 ">
                 <div class="numbertext6">10 / 13</div>
                 <img src="img/room9/10.jpg" style="width:100%; height: 200px">
                 <div class="text6"></div>
             </div>

             <div class="mySlides6 ">
                 <div class="numbertext6">11 / 13</div>
                 <img src="img/room9/11.jpg" style="width:100%; height: 200px">
                 <div class="text6"></div>
             </div>
             <div class="mySlides6 ">
                 <div class="numbertext6">12 / 13</div>
                 <img src="img/room9/12.jpg" style="width:100%; height: 200px">
                 <div class="text6"></div>
             </div>

             <div class="mySlides6 ">
                 <div class="numbertext6">13 / 13</div>
                 <img src="img/room9/13.jpg" style="width:100%; height:200px">
                 <div class="text6"></div>
             </div>



             <a class="prev6" onclick="plusSlides6(-1)">&#10094;</a>
             <a class="next6" onclick="plusSlides6(1)">&#10095;</a>

         </div>
         <br>

         <div style="text-align:center">
             <span class="dot6" onclick="currentSlide6(1)"></span>
             <span class="dot6" onclick="currentSlide6(2)"></span>
             <span class="dot6" onclick="currentSlide6(3)"></span>
             <span class="dot6" onclick="currentSlide6(4)"></span>
             <span class="dot6" onclick="currentSlide6(5)"></span>
             <span class="dot6" onclick="currentSlide6(6)"></span>
             <span class="dot6" onclick="currentSlide6(7)"></span>
             <span class="dot6" onclick="currentSlide6(8)"></span>
             <span class="dot6" onclick="currentSlide6(9)"></span>
             <span class="dot6" onclick="currentSlide6(10)"></span>
             <span class="dot6" onclick="currentSlide6(11)"></span>
             <span class="dot6" onclick="currentSlide6(12)"></span>
             <span class="dot6" onclick="currentSlide6(13)"></span>
         </div>

    </div>

<!-- /*************************************final block*******************************/ -->





</body>

</html>