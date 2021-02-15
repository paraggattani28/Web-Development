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
.container
{
    width:100%;
}
    .menu{
    position: sticky;
    top:0;
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
.container
{
    margin-top: 30px;
    margin-bottom: 30px;
    width:100%;
    height:470px;
}
.name
{
    text-align: center;
    margin-left: 40px;
    margin-top: 50px;
}
.name hr
{
    margin-left: 30px;
}
.img img
{
    height: 370px;
    width: 370px;
}
.name
{
    text-align: center;
}
.event
{
    margin-left: 40px;
}
.even hr
{
    float: left;
    margin-left: 20px;
}
.details
{
    margin-top: 30px;
    margin-left: 40px;
    text-align: center;
    font-family: Prestige Elite Std;
    font-size: 20px;
}
.image
{
    
}
.image img
{
    float: left;
    height: 280px;
    width: 280px;
    margin-left: 50px;
    margin-bottom: 50px;
}
        
.dropdown 
{
    position: relative;
    display: inline-block;
    color: white;
    margin-left: 130px;
}

.dropdown-content 
{
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 110px;
    font-size: 15px;;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown fa
{
    margin-left: 300px;
}

.dropdown-content a 
{
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover 
{
    background-color: #ddd;
}

.dropdown:hover .dropdown-content 
{
    display: block;
}

.dropdown:hover .dropbtn
{
    background-color: #ddd;
    color: black;
}
.complaint
{
    width: 100%;
    color: black;
    height: 75px;
}
.complaintbtn
{
        border: 1.5px solid grey;
        background-color: black;
        color: white;
        font-family: Letter Gothic Std;
        font-size: 20px;
        border-radius: 6px;
        padding: 18px;
}
.complaintbutton
{
        border: 1.5px solid black;
        background-color: white;
        color: black;
        margin-top: 10px;
        font-size: 14px;
        height: 35px;
        padding: 5px;
        float:left;
        margin-left:-250px;
        margin-bottom:30px;
}
.complaintbutton a
{
    text-decoration:none;
    color:black;
}
.container2
{
    padding-top:10px;
}



</style>
</head>

<body>

    <div class="container2">
      <div class="menu">
        <font>Upcoming Events</font><br>
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
    </div>
                    <div class="complaint" align="center">
                        <a href="host.php"><button class="complaintbtn" type="submit"><b> &nbsp;&nbsp;Host an Event&nbsp;&nbsp;</b></button></a>
                    </div>
        
        <div class="container2">
    <p class="name"><font face="Letter Gothic Std" size="+3" align="center"><b>Upcoming Events</b></font></p><hr color="#b94c4c" size="0.5" width="400px"><br>
    </div>
    

    <?php

        $sql_extract = "SELECT * FROM host;";

        $result = mysqli_query($conn, $sql_extract);
        $result_check = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);

        if($result_check > 0)
        {

            while($row = mysqli_fetch_assoc($result))
            {

                echo '<div class="container">';
                echo '<div class="even">';
                echo '<p class="event"><font face="Gabriola" size="+4" align="center">', $row['name'] ,'</font></p><hr color="#b94c4c" size="0.5" width="400px" align="left"></div><br><br>';
                echo '<div class="row">';

                $image = $row['image'];
                $image_src = "upload/".$image;
                $rating = $row['rating'];
                $event_id = $row['event_id'];
                
                echo '<div class="image col-md-4 col-sm-6"><img src ="' , $image_src , '"alt = "image"></div><br>';
                echo '<div class="details col-md-8 col-sm-6"><i>Date :', $row['date'],'</i><br><br><i>Time :', $row['time'],'</i><br><br><i>Venue :', $row['venue'],'</i><br><br>',$row['description'] , '<br><br>','<i>Average Rating :', $row['rating'],'</i><br><br></div>';
                echo '</div>';
                echo '<button class="complaintbutton"><a href="fb_event.php?event_id='.$event_id.'"><b>Rate This Event</b></a></button>';        
                echo '</div>';

            }

            
        }
        
        
?>

</body>
</html>