<?php
    include_once 'db_connect.php';
    session_start();
?>
<html>
<head>

<style>
table 
{
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 98%;
}

td, th 
{
    border: 2px solid #dddddd;
    text-align: left;
    padding: 8px;
}
.content
{
    margin-top:40px;
    margin-left:25px;
}
.name
{
    text-align: center;
    color:black;
} 
.status
{
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
.status input
{
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

<div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+3" align="center"><b>IH MESS</b></font></p><hr color="#b94c4c" size="1.2" width="400px"><br>
    </div>



<div class="content">
<?php

echo '<table>';
echo '<tr>';
    echo '<th>Day</th>';
    echo '<th>Breakfast</th>';
    echo '<th>Lunch</th>';
    echo '<th>Hi-Tea</th>';
    echo '<th>Dinner</th>';
echo '</tr>';

    $sql_extract = "SELECT * FROM ihmess;";
    $result = mysqli_query($conn, $sql_extract);
    $result_check = mysqli_num_rows($result);
    
    if($result_check > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<tr>'; 
                echo '<td>' ,$row['day'],'</td>';
                echo '<td>' ,$row['breakfast'],'</td>';
                echo '<td>' ,$row['lunch'],'</td>';
                echo '<td>' ,$row['hitea'],'</td>';
                echo '<td>' ,$row['dinner'],'</td>';
            echo '</tr>';
        }
    }
echo '</table>';

?>


</div>

<div class="status">
    <a href="fb_ihmess.php"><center><input  type="submit" value="Rate"></center></a>
</div>

</body>
</html>