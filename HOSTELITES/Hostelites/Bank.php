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
    background-color: black;
    margin-right: 00px;
    margin-top: -35px;
    margin-bottom: 70px;
    margin-left: -40px;
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
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .name{
            text-align: center;
            margin-left: 40px;
            margin-top: 50px;
        }
        .name hr{
            margin-left: 30px;
        }
        .img img{
            height: 370px;
            width: 370px;
            
        }
    .allahbad{
        text-align: center;
        font-size: 18px;
    font-family: Prestige Elite Std;
    padding: 20px;
        margin-left: 140px;
    padding: 18px;
    color: black;
        float: right;
}
        .name{
            text-align: center;
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
    <div class="menu">
        <font>Bank</font><br>
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
        <a class="nav-link" href="Help.php"><font>Help</font></a>
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
        
        <div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+3" align="center"><b>Allahbad bank</b></font></p><hr color="#b94c4c" size="0.5" width="400px"><br>
    </div>
        
        <div class="conatiner">            
            <div class="img" align="center">
                <img src="images/Bank.jpg" >
            </div>
        </div>
    
        <div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+2"><b>Address</b></font></p><hr color="#b94c4c" size="0.5" width="250px"><br>
        <p class="name"><font face="Prestige Elite Std" size="+1">&nbsp;&nbsp;BMS ENGG. COLLEGE CAMPUS, HANUMANTHNAGAR, BANGALORE KARNATAKA 560019</font></p>
    </div>
        
        <div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+2"><b>State : </b></font></p><hr color="#b94c4c" size="0.5" width="250px">
        <p class="name"><font face="Prestige Elite Std" size="+1">&nbsp;&nbsp;KARNATAKA</font></p>
    </div>
        
        <div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+2"><b>District</b></font></p><hr color="#b94c4c" size="0.5" width="250px"><br>
        <p class="name"><font face="Prestige Elite Std" size="+1">&nbsp;&nbsp; BANGALORE URBAN (Click here for all the branches of "ALLAHABAD BANK" in "BANGALORE URBAN" District)</font></p>
    </div>
    
        <div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+2"><b>Contact:</b></font></p><hr color="#b94c4c" size="0.5" width="250px"><br>
        <p class="name"><font face="Prestige Elite Std" size="+1">&nbsp;&nbsp;K NAGRENDRA, VENKATESH MURTY,080-26675727</font></p>
    </div>
        
        <div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+2"><b>IFSC Code</b></font></p><hr color="#b94c4c" size="0.5" width="250px"><br>
        <p class="name"><font face="Prestige Elite Std" size="+1">&nbsp;&nbsp; ALLA0212011 (used for RTGS, IMPS and NEFT transactions)</font></p>
    </div>
        
        <div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+2"><b>Branch Code</b></font></p><hr color="#b94c4c" size="0.5" width="250px"><br>
        <p class="name"><font face="Prestige Elite Std" size="+1">&nbsp;&nbsp; Last six characters of IFSC Code represent Branch code.</font></p>
    </div>
        
        <div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+2"><b>MICR Code</b></font></p><hr color="#b94c4c" size="0.5" width="250px"><br>
        <p class="name"><font face="Prestige Elite Std" size="+1">&nbsp;&nbsp; 560010007</font></p>
    </div>
        
        
    </body>

</html>