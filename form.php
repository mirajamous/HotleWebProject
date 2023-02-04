<?php
session_start();

if(isset($_POST['logout'])){
    session_destroy();
    header('location:login.php');}


if(isset($_SESSION['roomidd'])&&isset($_SESSION['useridd'])){
    $username="";
    $userphone="";
    $useraddress="";
    $usergender="";
    $useremail="";
    $dobuser="";
    $userid =$_SESSION['useridd'];
    try {
    $flagroom=0;
    $db=new mysqli('localhost','root','','hotel');
    // fill text field
    $qfill="select * from users";
    $rs3=$db->query($qfill);
    for($i=0;$i<$rs3->num_rows;$i++){
        $row=$rs3->fetch_object();
        if($row->userid==$userid){

            $username=$row->username;
            $userphone=$row->phone;
            $useraddress=$row->address;
            $usergender=$row->gender;
            $useremail=$row->email;
            $dobuser=$row->dob;
            break;
        }
    }}
    catch (Exception $e){}

if(isset($_POST['save']) && isset($_POST['checkin'])&&isset($_POST['checkout'])) {
    $rommid = $_SESSION['roomidd'];
    $price=0;
    $priceperday= $_SESSION['roomprice'];
    $st_date=$_POST['checkin'];
    $ed_date=$_POST['checkout'];
    // get all date

    $dateMonthYearArr = array();
    $st_dateTS = strtotime($st_date);
    $ed_dateTS = strtotime($ed_date);
    $numberofday=0;
    for ($currentDateTS = $st_dateTS; $currentDateTS <= $ed_dateTS; $currentDateTS += (60 * 60 * 24)) {
        $currentDateStr = date("Y-m-d",$currentDateTS);
        $dateMonthYearArr[] = $currentDateStr;
        $numberofday++;
    }


    // $dateMonthYearArr contain all date
    try {



        for($i=0;$i<$numberofday;$i++){
        $qrystr="select * from bookingroom where bookingdate ='$dateMonthYearArr[$i]' and roomid ='$rommid'";
        $res=$db->query($qrystr);
       if($res->num_rows!=1){ // if room is empty in this day
         $price=$priceperday*$numberofday;
           $flagroom=1;
           break;

       }

    } // end for loop
        // if room is not empty
        if($flagroom==0){
                       ?>
                       <script>
                           alert("this room was booked in this date");
                       </script>
                       <?php
        }
        // else if room is empty
        else {
            $qr1 = "INSERT INTO `roomreservations` (`rrid`, `userid`, `roomid`, `checkin`, `checkout`, `priceperday`)
 VALUES (NULL, '$userid', '$rommid', '$st_date', '$ed_date', '$price')";

            $rs1 = $db->query($qr1);
            for ($i = 0; $i < $numberofday; $i++) {

                $qr2 = "INSERT INTO `bookingroom` (`bookingdate`, `b_id`, `userid`, `roomid`) 
          VALUES ('$dateMonthYearArr[$i]', NULL, '$userid', '$rommid')";
                $rs2 = $db->query($qr2);
            }

        }

        ?>
<!--        <script>-->
<!--        document.getElementById("totalid").value=$price;-->
<!--        </script>-->
<?php
        $db->commit();
        $db->close();
    }catch (Exception $e){

    }
}}
//else{header('location:login.php');}

elseif (isset($_SESSION['useridd']))
{header('location:room.php');}
else{
    header('location:login.php');
}



?>
<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="css/form.css">

         <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>


</script>

    </head>
    <body>

        <div class="nav">
            <div class="container">
                <div class="logo">
                    <a href="index.php"><img src="img/logoImg.png"></a>
                </div>
                <div class="navbar">
                    <ul>
                        <li><a href='index.php'>home</a></li>
                        <li><a href='room.php'>rooms</a></li>
                        <li><a href='resturant.html'>Resturant</a></li>
                        <li><a href='gallery.php'>gallery</a></li>
                        <li><a href='Event.php'>event</a></li>
                        <li><a href='contact.php'>contact</a></li>
    
                    </ul>
    
                </div>
            </div>
    
        </div>

        <!-- /************************information****************************************/ -->
        <div class="all">
          
            <form  action="form.php" method="post">
                <div class="big-class">
                    <div class="small" id="labell"> <i class='far'>Room reservations &#xf004; </i> </div>
                    <div class="small">  </div>
                    <div class="small">  </div>
                    
                    <div class="small">
                        <label><b>Name:</b></label><br>
                        <input type="text" autocomplete="on" value=<?php echo isset($username) ? $username: ""?>>

                    </div>
                    <div class="small">
                        <label><b>ID:</b></label><br>
                        <input type="number" value=<?php echo isset($userid) ? $userid: ""?>>
                    </div>
                    <div class="small">
                        <label><b>Price per day:</b></label><br>
                        <input type="number" readonly="true"
                               value="<?php echo isset($priceperday) ? $priceperday: 0?>"
                               style="background-color: #f3f3f3;">

                    </div>




                    <div class="small">
                        <label><b>Phone:</b></label><br>
                        <input type="number" value=<?php echo isset($userphone) ? $userphone: "" ?>>
                    </div>
                    <div class="small">
                        <label><b>Address:</b></label><br>
                        <input type="text" autocomplete="on" id="ad"value=<?php echo isset($useraddress) ? $useraddress: "" ?>>
                    </div>
                    <div class="small">
                        <label><b> Total price:</b></label><br>

                        <input type="text" id="totalid" readonly="true" style="background-color: #f3f3f3"
                               value="<?php echo isset($price) ? $price: 0?>">
                        <p></p>

                    </div>


                    <div class="small">
                        <label><b>Gender:</b></label><br><br>

                        <input type="text" name="gender" class="radio1" value=<?php echo isset($usergender) ? $usergender: ""?> >
<!--                        <label>male</label>-->
<!--                        <input type="radio" value="female" name="gender" class="radio1"><label> female</label>-->

                    </div>
                    <div class="small">
                        <label><b>Check in date:</b></label><br><br>
                        <input type="date" name="checkin" id="checkin"
                               value=<?php echo isset($st_date) ? $st_date: ""?>>
                    </div>
                    <div class="small">

                    </div>
                    <div class="small">
                        <label><b>Credit card number:</b></label><br>
                        <input type="number"> 
                    </div>
                    <div class="small">
                        <label><b>Check out date:</b></label><br>
                        <input type="date" name="checkout" id="checkout" value=<?php echo isset($ed_date) ? $ed_date: ""?>>

                    </div>
                    <div class="small">
                        <input type="submit" name="logout" value="Logout" id="butt2">
                    </div>
                    <div class="small">
                        <label><b>Email:</b></label><br>
                        <input type="text" autocomplete="on"value=<?php echo isset($useremail) ? $useremail:"" ?>>
                    </div>
                    <div class="small">
                        <label><b>Date of Birthday:</b></label><br>
                        <input type="date"value=<?php echo isset($dobuser) ? $dobuser: "" ?>>
                    </div>

                    <div class="small">

                        <input type="submit" value="Save" id="butt" name="save" >

                    </div>


                </div>
            </form>

        </div>

    </body>
</html>