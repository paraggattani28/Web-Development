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
        .mess{
            margin-top: 50px;
            padding-bottom: 20px;
            margin-bottom: 70px;
        }
        .messmenu img{
            height: 250px;
            width: 250px;
        }
        .messmenu{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            font-size: 50px;
            font-family: Impact;
            color: white;
            margin-left: 170px;
            margin-right: 70px;
            float: left;
            height: 460px;;
            width: 400px;
            color: black;
            padding-bottom: 20px; 
        }
        .messmenu button{
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
        .messmenu2 img{
            height: 250px;
            width: 250px;
        }
        .messmenu2{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            font-size: 50px;
            font-family: Impact;
            color: white;
            margin-left: 170px;
            margin-right: 70px;
            float: left;
            height: 460px;;
            width: 400px;
            color: black;
            padding-bottom: 20px; 
        }
        .messmenu2 button{
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
        .mess1{
            font-size: 25px;
        }
        .canteen{
            margin-top: 50px;
        }
        .can{
            margin-top: 180px;
        }
        .canteen1{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            color: white;
            margin-top: 30px;
            margin-right: 70px;
            margin-bottom: 30px;
            margin-left: 170px;
            float: left;
            height: 460px;
            width: 400px;
            color: black;
            padding-bottom: 40px;
            margin-bottom: 60px;
        }
        .canteen1 img{
            height: 250px;
            width: 250px;
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
        .can1{
            font-size: 19px;
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
    margin-left: 300px;
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
        <font>Hostelites</font><br>
        <ul list="nav">
        <li class="nav-item active">
        <a class="nav-link" href="Home_page.php"><font>Home</font></a>
        </li>
            <li class="nav-item">
                <a class="nav-link" href="food.php"><font>Food</font><span class="sr-only"></span></a>
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

    <div class="mess">
    <p><center><font size="+4">Mess</font></center></p><hr color="#b94c4c" size="1.5" width="200px"><br><br>
        
        <div class="row">
            <div class="col-md-6">
                <div class="messmenu">
                    <p class="mess1"><font face="Letter Gothic Std"><b>IH</b></font></p><hr color="#b94c4c" size="1.5" width="200px">
                    <img src="images/IH.jpg"><br><br>
                    <a href = "ihmess.php"><button type="submit" align="center"><b>Check Menu >></b></button></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="messmenu2">
                    <p class="mess1"><font face="Letter Gothic Std"><b>NH</b></font></p><hr color="#b94c4c" size="1.5" width="200px">
                    <img src="images/NH.jpg"><br><br>
                    <a href="nhmess.php"><button type="submit" align="center"><b>Check Menu >></b></button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="canteen">
        <p class="can"><font size="+4"><br><br><br><center>Canteens</center></font></p><hr color="#b94c4c" size="1.5" width="200px">
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="canteen1">
                    <p class="can1"><font face="Letter Gothic Std"><b>Day Canteen</b></font></p><hr color="#b94c4c" size="1.5" width="200px"><br>
                    <img src="images/Day%20Canteen.jpg">
                <p class="des">Indian Main Hostel for male students was built in the year of 1977 with a plinth area of 39,000 sq. ft. </p><br>
                    <a href="daycanteen.php"><button class ="check" type="submit" align="center"><b>Check Menu >></b></button></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="canteen1">
                    <p class="can1"><font face="Letter Gothic Std"><b>Night Canteen</b></font></p><hr color="#b94c4c" size="1.5" width="200px"><br>
                    <img src="images/Day Canteen.jpg">
                <p class="des">This unit constructed in 2003 to accommodate 288 boys has a plinth area of 5,611.29sq meters (60,377.48 sq. ft.)</p><br>
                    <a href="nightcanteen.php"><button class="check" type="submit" align="center"><b>Check Menu >></b></button></a>
                </div>
            </div>
            
        </div>
    </div>

</body>
</html>
