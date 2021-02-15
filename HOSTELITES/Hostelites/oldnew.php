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
.move{
    float: right;
    margin-left: 200px;
}
.nav-link a{
    font-size: 40px;
    font-family: Hobo Std;
    color: #b94c4c
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
.old
{
    background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(images/oldbooks.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height:500px;
}
.old p
{
    font-size:50px;
    color: white;
    font-weight:10;
    text-align:center;
    padding-top:230px;
}
.old p:hover
{
    transition:1s;
    transform: scale(1,1) rotate(360deg);
}
.new
{
    background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(images/newbooks.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height:500px;
}
.new p
{
    font-size:50px;
    color: white;
    font-weight:10;
    text-align:center;
    padding-top:230px;
}
.new p:hover
{
    transition:1s;
    transform: scale(1,1) rotate(360deg);
}
.add
{
    background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(images/search.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height:500px;
}
.add p
{
    font-size:50px;
    color: white;
    font-weight:10;
    text-align:center;
    padding-top:230px;
}
.add p:hover
{
    transition:1s;
    transform: scale(1,1) rotate(360deg);
}
.a
{
    text-decoration:none;
    font-family:MV Boli;
}

</style>
</head>

<body>
<div class="menu">
        <font>Sell / Buy</font><br>

        <ul list="nav">
        <li class="nav-item active">
        <a class="nav-link" href="Home_page.php"><font>Home</font>
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
        <a class="nav-link" href="buy.php"><font>Sell / Buy</font></a>
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
<a href="old.php" class="a container-fluid">
    <div class="old">
        <p>Student's Shop</p>
        <p></p>
    </div>
</a>
<a href="new.php" class="a container-fluid">
    <div class="new">
        <p>Vender's Shop</p>
    </div>
</a>
<a href="Shopkeeper.php" class="a container-fluid">
    <div class="add">
        <p>Add an item</p>
    </div>
</a>

</body>

</html>