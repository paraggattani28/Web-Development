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
    echo '<th>USN</th>';
    echo '<th>Name</th>';
    echo '<th>Contact</th>';
    echo '<th>Hostel</th>';
    echo '<th>Subject</th>';
    echo '<th>Need</th>';
    echo '<th>Necessity</th>';
    echo '<th>ID</th>';
    echo '<th>Delete</th>';
echo '</tr>';

    $sql_extract = "SELECT * FROM requests;";

    $result = mysqli_query($conn, $sql_extract);
    $result_check = mysqli_num_rows($result);


    

    if($result_check > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<tr>'; 
                echo '<td>' ,$row['usn'],'</td>';
                echo '<td>' ,$row['name'],'</td>';
                echo '<td>' ,$row['contact'],'</td>';
                echo '<td>' ,$row['hostel'],'</td>';
                echo '<td>' ,$row['subject'],'</td>';
                echo '<td>' ,$row['need'],'</td>';
                echo '<td>' ,$row['necessity'],'</td>';
                echo '<td>' ,$row['request_id'],'</td>';
                echo '<td> <a href="extract_requests.php?delete='.$row['request_id'].'"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>';
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
        $sql_insert = "delete from requests where request_id=$new_delete";
        mysqli_query($conn, $sql_insert); 
        header("Location: extract_requests.php?Request_deleted");
    }
?>
</body>
</html>