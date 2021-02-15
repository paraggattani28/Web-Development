<?php
    include_once 'db_connect.php';
    session_start();
?>
<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
    margin-left:35px;
}

</style>
</head>
<body>

<div class="content">
<?php

echo '<table>';
echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Venue</th>';
    echo '<th>Date</th>';
    echo '<th>Time</th>';   
    echo '<th>Description</th>';
    echo '<th>Contact Number</th>';
    echo '<th>E-mail Id</th>';
    echo '<th>Rating</th>'; 
    echo '<th>Delete</th>';
echo '</tr>';

    $sql_extract = "SELECT * FROM host;";

    $result = mysqli_query($conn, $sql_extract);
    $result_check = mysqli_num_rows($result);


    

    if($result_check > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<tr>'; 
                echo '<td>' ,$row['name'],'</td>';
                echo '<td>', $row['venue'], '</td>';
                echo '<td>' ,$row['date'],'</td>';
                echo '<td>' ,$row['time'],'</td>';
                echo '<td>' ,$row['description'],'</td>';
                echo '<td>' ,$row['mobile'],'</td>';
                echo '<td>' ,$row['email'],'</td>';
                echo '<td>' ,$row['rating'],'</td>';
                echo '<td> <a href="extract_host.php?delete='.$row['event_id'].'"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>';
            echo '</tr>';
        }
    }
echo '</table>';
?>
</div>
<?php
    
    if(isset($_GET['delete']))
    {
        $new_delete = $_GET['delete'];
        $sql_insert = "delete from host where event_id=$new_delete";
        mysqli_query($conn, $sql_insert); 
        header("Location: extract_host.php?event_deleted");
    }
?>
</body>
</html>