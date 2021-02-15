<?php
    echo '<script>alert("Dealers Have been notified!")</script>'; 
?>

<html>
<head>

<title>Cart</title>
<style>
p
{
    font-family: Letter Gothic Std;
    font-size:18px;
    text-align:center;
}

</style>
</head>
<body>

<center><p style="font-size:25px; margin-bottom:70px;"><b><u>Total Bill</u></b></p></center>
<?php
    include_once 'db_connect.php';
    session_start();
?>
<?php
    $sum = 0;
    $product = $_POST['product'];
    $count = count($product);
    $name = $_POST['product'];
    for($i = 0; $i<$count; $i++)
    {
        $sql_extract = "SELECT * FROM new WHERE product_id='$product[$i]';";
    
        $result = mysqli_query($conn, $sql_extract);
        $result_check = mysqli_num_rows($result);


        if($result_check > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $product_id = $row['product_id'];
                
                echo '<p>Name : ', $row['product'], '</p>';
                echo '<p>Price : ', $row['price'], '</p>';
                echo '<p>Description : ', $row['description'], '</p>';
                echo '<p>Condition : ', $row['condn'], '</p>';
                echo '<p>Size : ', $row['size'], '</p>';
                $sum = $sum + $row['price'];
            }
        }
    }
    echo '<hr color="black" size="0.5" width="400px" align="center" style="margin-top:60px;">';
    echo '<p style="margin-top:10px;"><b>Total Price :', $sum, '</b></p>';
?>
</body>
</html>