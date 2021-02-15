<?php
    include_once 'db_connect.php';
    session_start();
?>


<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


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

.cart2{
        font-size: 18px;
    font-family: Prestige Elite Std;
  text-align: left;
    color: white;
    float: left;
    margin-right: 125px;
    margin-left: 125px;
    height: 550px;;
    width: 500px;
    color: black;
    padding-bottom: 20px;
    margin-bottom: 100px;
    }

    .cart{
    font-size: 18px;
    font-family: Prestige Elite Std;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  text-align: left;
    color: white;
    float: left;
    margin-right: 125px;
    margin-left: 125px;
    height: 480px;
    width: 500px;
    color: black;
    padding-bottom: 20px;
    margin-bottom: 70px;
}
    .cart img{
        height: 140px;
        width: 140px;
        margin-left: 160px;
        margin-top: 50px;
        
    }
.cart p{
    margin-left: 40px;
    color: black;
}    
    .cart button{
        border: 1.5px solid white;
        background-color: black;
        color: white;
        font-family: Letter Gothic Std;
        font-size: 16px;
        margin-left: 25px;
        border-radius: 8px;
        height: 55px;
        width:200px;
        padding: 3px;
    }
    .status{
        height: 15px;
        margin-top: 50px;
        padding-bottom: 50px;
        background-color: black;
  position: fixed;
  width: 100%;
margin-left: -10px;
        
  bottom: 10px;
        margin-bottom: -15px;
  border: 3px solid black;
}
.status input{
        border: 1.5px solid white;
        background-color: white;
        color: black;
       font-family: Palatino Linotype;
        font-size: 18px;
        padding-top: 30px;
        border-radius: 8px;
        height: 35px;
        width: 200px;
        padding: 3px;
        margin-top: 15px;
        margin-bottom: 60px;
    }

</style>

</head>
<body>

<div class = "products">

<center><p style="font-size: 30px; font-face: Courier New; margin-top:30px;">Old Products</p><hr color="#b94c4c" size="0.5" width="400px" align="center" style="margin-bottom:50px;"></center>

    <form action="cart.php" method="post">
    <?php

        $sql_extract = "SELECT * FROM old;";

        $result = mysqli_query($conn, $sql_extract);
        $result_check = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);


if($result_check > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo '<div class="cart">';
        echo '<div class = "details">';
        $image = $row['image'];
        $image_src = "upload/".$image;
        
        echo '<img src="', $image_src , '" alt = "image">';
        echo '<p>Name : ', $row['product'], '</p>';
        echo '<p>Price : ', $row['price'], '</p>';
        echo '<p>Description : ', $row['description'], '</p>';
        echo '<p>Condition : ', $row['condn'], '</p>';
        echo '<p>Size : ', $row['size'], '</p>';
        echo '<center><input type="checkbox" name="product[]" value="'.$row['product_id'].'" style="margin-top:40px;" >ADD TO CART<center>';
        echo '</div>';
        echo '</div';

        echo '<div class="cart2"></div>';

    }
}

?>

<div class="status">
    <center><input  type="submit" value="Cart" class="btn" onclick="contact1.php"></center>
</div>

</form>
</div>

</body>
</html>