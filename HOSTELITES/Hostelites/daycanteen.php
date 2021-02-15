<?php
    include_once 'db_connect.php';
    session_start();
?>

<html>
<head>

<style>
body, html
    {
        background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(images/blur-blurry-bokeh-close-up-347139.jpg);
        background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
        .heading
        {
            height: 75px;
            margin-top: -25px;
            padding-top: 5px;
            padding-bottom: 25px;
            font-family: Segoe Script;
            text-align: center;
            background-color: black;
            color: white;
            font-size: 27px;
        }
        .contact{
            margin-top: 50px;
            margin-bottom: 50px;
            color:white;
        }
        table 
{
    
    border-collapse: collapse;
    width: 98%;
}

td, th 
{
    text-align: left;
    padding: 8px;
    font-family: Ink Free;
    font-size:23px;
    color:white;
}
.content
{
    margin-top:40px;
    margin-left:25px;
}
.name{
            text-align: center;
            color:white;
        }     
    </style>

</head>

<body>
<div class="container-fluid">
        <div class="menu col-md-12 col-sm-12 narrow text-center">
    <div class="heading col-md-12 col-sm-12 narrow text-center">
        <h2>Day Canteen<br></h2>
     </div>
               </div>
        </div>
    
    
    <div class="container">
    
        <div class="contact"  align="center"><font face="Constantia" size="+3">Conatct : +91 9663134652</font><hr size="+1" color="white"></div>
        
    </div>

    <div class="container">
    <p class="name"><font face="Letter Gothic Std" size="+3" align="center"><b>Menu</b></font></p><hr color="#b94c4c" size="0.5" width="400px"><br>
    </div>

    <div class="content">
<?php

echo '<table>';
echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Price</th>';
    echo '<th>Name</th>';
    echo '<th>Price</th>';
echo '</tr>';

    $sql_extract = "SELECT * FROM daycanteen;";

    $result = mysqli_query($conn, $sql_extract);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<tr>'; 
                echo '<td>' ,$row['name1'],'</td>';
                echo '<td>' ,$row['price1'],'</td>';
                echo '<td>' ,$row['name2'],'</td>';
                echo '<td>' ,$row['price2'],'</td>';
            echo '</tr>';
        }
    }
echo '</table>';

?>
</div>




</body>
</html>