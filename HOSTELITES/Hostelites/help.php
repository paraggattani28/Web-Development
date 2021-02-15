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
    padding-top: 20px;
    background-color: black;
    margin-right: 00px;
    margin-top: -35px;
    margin-bottom: 70px;
    height: 140px;
    text-align: center;
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
        .container{
            text-align: center;
        }
        
        .hos2{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
    color: white;
    margin-top: 30px;
    margin-right: 70px;
    margin-bottom: 30px;
    margin-left: 70px;
    float: left;
    height: 460px;
    width: 570px;
    color: black;
    padding-bottom: 20px;
    margin-bottom: 60px;
}
        .des{
            font-size: 20px;
        }
        .hos2 a{
            text-decoration: none;
            font-family: cursive;
            color: red;
            font-size: 20px;
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
        
    </style>
</head>

<body>
    <div class="container">
<div class="menu">
        <font>Help</font><br>
        <ul list="nav">
        <li class="nav-item active">
        <a class="nav-link" href="Home_page.php"><font>Home</font>
            <span class="sr-only"></span></a>
        </li>
            <li class="nav-item">
                <a class="nav-link" href="food.php"><font>Food</font></a>
        </li>
            <li class="nav-item">
        <a class="nav-link" href="events.php"><font>Events</font></a>
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
    </div>
    
    <div class="container">
    
        <div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+3" align="center"><b>Location</b></font></p><hr color="#b94c4c" size="0.5" width="400px"><br>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.4814935873596!2d77.56333711464484!3d12.941012190875954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae158b11e34d2f%3A0x5f4adbdbab8bd80f!2sBMS%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1573834863590!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
        
    </div><br><br>

    <div class="container">
    
        <div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+3" align="center"><b>BMS College of Engineering</b></font></p><hr color="#b94c4c" size="0.5" width="400px"><br>
            
    <iframe width="660" height="415" src="https://www.youtube.com/embed/abr7P5W9KhE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    </div>
        
    </div><br><br>
    
    <div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+3" align="center"><b>Contact</b></font></p><hr color="#b94c4c" size="0.5" width="400px"><br>
    </div>
    
    <div class="container">
    
        <div class="row">
            <div class="col-md-6">
                <div class="hos2">
                    <p class="name"><font face="Letter Gothic Std" size="+3"><b>International Hostel</b></font></p><hr color="#b94c4c" size="0.5" width="200px"><br>
                    <p class="des"><font face="Adobe Gothic Std">Warden : &nbsp;&nbsp;</font>&nbsp;<a href = "tel:+919980026114"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp;+919980026114</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hos2">
                    <p class="name"><font face="Letter Gothic Std" size="+3"><b>National Hostel</b></font></p><hr color="#b94c4c" size="0.5" width="200px"><br>
                    <p class="des"><font face="Adobe Gothic Std">Warden : &nbsp;&nbsp;</font> &nbsp;<a href = "tel:+919449338300"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;  +919449338300</a></p>
                </div>
            </div>
            
        </div>
        
    </div>
    
</body>
</html>