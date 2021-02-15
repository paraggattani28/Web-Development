<?php
    include_once 'db_connect.php';
    session_start();
?>
<?php
$usn= $_SESSION['session_usn'];
$sql_extract_user = "SELECT * FROM user_info WHERE usn='$usn';";
$result1 = mysqli_query($conn, $sql_extract_user);
$result1_check = mysqli_num_rows($result1);
if($result1_check > 0)
{
    
    while($row = mysqli_fetch_assoc($result1))
    {
        $name=$row['first_name'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .menu{
    position: sticky;
    top:0;
            width: 100%;
    background-color: black;
    margin-right: 00px;
    margin-top: -35px;
    height: 140px;
    text-align: center;
            margin-bottom: 50px;
}
.menu font{
    font-size: 45px;
    color: white;
    text-align: center;
    font-family: Adobe Gothic Std;
    font-weight: bolder;
    text-decoration: none;
}
.menu ul{
    margin-left: 300px;
}
.menu li{
    margin-left: 50px;
    list-style-type: none;
    float: left;
    display: inline;
}
.menu li font{
    font-size: 20px;
    font-family: Courier New;
}
.menu li a{
    font-family: Javanese Text;
    text-decoration: none;
}
        .heading
        {
            height: 95px;
            margin-top: -25px;
            padding-top: 5px;
            padding-bottom: 25px;
            font-family: Segoe Script;
            text-align: center;
            background-color: black;
            color: white;
            font-size: 27px;
        }
    
       
            
       .subheading
        {
           font-family: Ink Free;
            font-size: 25px; 
        }
        .check{
        margin-top: 20px;
        border: 1.5px solid white;
        background-color: black;
        color: white;
        font-family: Letter Gothic Std;
        font-size: 16px;
        border-radius: 8px;
        height: 30px;
        width: 150px;
        padding: 3px;
    }
        .fac{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
    color: white;
            margin-top: 50px;
    margin: 400px;
    float: left;
    height: 450px;;
    width: 380px;
    margin: 20px;
            margin-left: 60px;
    color: black;
    padding-bottom: 20px; 
}
          .fac1{
  padding: 16px;
  text-align: center;
    color: white;
    margin: 400px;
    float: left;
    height: 190px;;
    width: 380px;
    margin: 20px;
            margin-left: 60px;
    color: black;
    padding-bottom: 20px; 
}
        .check{
        border: 1.5px solid white;
        background-color: black;
        color: white;
        font-family: Letter Gothic Std;
        font-size: 16px;
        border-radius: 8px;
        height: 35px;
        width: 150px;
        padding: 3px;
    }
        .fac img{
            height: 250px;
            width: 250px;
        }
          /* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
.dropdown {
position: relative;
display: inline-block;
color: white;
margin-left: 130px;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f1f1f1;
min-width: 110px;
font-size: 15px;;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}
.dropdown fa{
    margin-left: 30px;
}

.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn
{
    background-color: #ddd;
color: black;
}
.complaint{
    width: 100%;
    margin-bottom: 50px;
    color: black;
    height: 75px;
}
.complaintbtn{
        border: 1.5px solid grey;
        background-color: black;
        color: white;
        margin-top: 10px;
        font-family: Letter Gothic Std;
        font-size: 16px;
        margin-left: 330px;
        border-radius: 8px;
        height: 55px;
        padding: 5px;
    }
      
        


    </style>
    </head>
    <body>
        <div class="menu">
        <font>Facilities</font><br>
        <ul list="nav">
        <li class="nav-item active">
        <a class="nav-link" href="Home_page.php"><font>Home</font>
            <span class="sr-only"></span></a>
        </li>
            <li class="nav-item">
                <a class="nav-link" href="food.php"><font>Food</font></a>
        </li>
            <li class="nav-item">
        <a class="nav-link" href="Events.php"><font>Events</font></a>
        </li>
            <li class="nav-item">
        <a class="nav-link" href="facilities.php"><font>Facilities</font></a>
        </li>
            <li class="nav-item">
        <a class="nav-link" href="help.php"><font>Help</font></a>
        </li>
            <li class="nav-item">
        <a class="nav-link" href="Bank.php"><font>Bank</font></a>
        </li>
            <li class="nav-item">
        <a class="nav-link" href="oldnew.php"><font>Sell / Buy</font></a>
        </li>
        </ul>
        <div class="dropdown">
            <i class="fa fa-user-o fa-2x" aria-hidden="true"></i><br>
            <div class="dropdown-content">
                <a href="account.php"><?php echo 'Hi ', $name; ?></a>
                <a href="newlogin.php">Sign-out</a>
            </div>
      </div>
    </div>
                    <div class="complaint">
                        <a href="Facilitycomplaint.php"><button class="complaintbtn" type="submit"><b>&nbsp;&nbsp;Register a complaint&nbsp;&nbsp;</b></button></a>
                        <a href="request.php"><button class="complaintbtn" type="submit"><b>&nbsp;&nbsp;Request for a new facility&nbsp;&nbsp;</b></button></a>
                    </div>
    <div class="container">
        
            <div class="row">
            <div class="col-md-4">
                <div class="fac">
                    <p class="can1"><font face="Letter Gothic Std" size ="+2"><b>1 fridge on a floor</b></font></p><hr color="#b94c4c" size="1.5" width="200px"><br>
                    <img src="images/Fridge.jpg">
                <p class="des">Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. </p><br>
                </div>
            </div>
           <div class="col-md-4">
                <div class="fac">
                    <p class="can1"><font face="Letter Gothic Std" size ="+2"><b>3 washing machines on a floor</b></font></p><hr color="#b94c4c" size="1.5" width="200px"><br>
                    <img src="images/washing%20machine.jpg">
                <p class="des">Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. </p><br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fac">
                   <p class="can1"><font face="Letter Gothic Std" size ="+2"><b>1 Water Cooler on a floor</b></font></p><hr color="#b94c4c" size="1.5" width="200px"><br>
                    <img src="images/water%20cooler2.jpg">
                <p class="des">Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. </p><br>
                </div>
            </div>
        </div>
            
            <div class="row">
            <div class="col-md-4">
                <div class="fac">
                    <p class="can1"><font face="Letter Gothic Std" size ="+2"><b>Lifts</b></font></p><hr color="#b94c4c" size="1.5" width="200px"><br>
                    <img src="images/lift.jpg">
                <p class="des">Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. </p><br>
                </div>
            </div>
           <div class="col-md-4">
                <div class="fac">
                    <p class="can1"><font face="Letter Gothic Std" size ="+2"><b>A Tt table</b></font></p><hr color="#b94c4c" size="1.5" width="200px"><br>
                    <img src="images/tt%20table.jpg">
                <p class="des">Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. </p><br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fac">
                   <p class="can1"><font face="Letter Gothic Std" size ="+2"><b>Carom</b></font></p><hr color="#b94c4c" size="1.5" width="200px"><br>
                    <img src="images/carom.jpg">
                <p class="des">Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. </p><br>
                </div>
            </div>
        </div>
            <div class="row">
            <div class="col-md-4">
                <div class="fac">
                    <p class="can1"><font face="Letter Gothic Std" size ="+2"><b>Multiple study rooms</b></font></p><hr color="#b94c4c" size="1.5" width="200px"><br>
                    <img src="images/Study%20Room.jpg">
                <p class="des">Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. </p><br>
                </div>
            </div>
           <div class="col-md-4">
                <div class="fac">
                    <p class="can1"><font face="Letter Gothic Std" size ="+2"><b>Multiple TV rooms</b></font></p><hr color="#b94c4c" size="1.5" width="200px"><br>
                    <img src="images/TV.jpg">
                <p class="des">Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. </p><br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fac">
                   <p class="can1"><font face="Letter Gothic Std" size ="+2"><b>One microwave in the mess</b></font></p><hr color="#b94c4c" size="1.5" width="200px"><br>
                    <img src="images/microwave.jpg">
                <p class="des">Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. </p><br>
                </div>
            </div>
        </div>
            
            <div class="row">
            <div class="col-md-4">
                <div class="fac1">
                    <p></p>
                </div>
            </div>
           <div class="col-md-4">
                <div class="fac">
                    <p class="can1"><font face="Letter Gothic Std" size ="+2"><b>Water Geyser in every washroom</b></font></p><hr color="#b94c4c" size="1.5" width="200px"><br>
                    <img src="images/geyser.jpg">
                <p class="des">Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. </p><br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fac1">
                    <p></p>
                </div>
            </div>
        </div>
            
            
        </div>
        
        
         </body>
</html>

        