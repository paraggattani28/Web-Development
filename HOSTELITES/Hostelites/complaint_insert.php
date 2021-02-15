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
        $usn = $row['usn'];
        $contact = $row['mobile'];
        $hostel= $row['hostel'];
    }
}
?>
<?php

if(isset($_POST['Submit']))
{
    include_once 'db_connect.php';
    $subject = $_POST["subject"];
    $detail =$_POST["detail"];

    $sql_insert = "INSERT INTO complaint (usn, name, contact, hostel, subject, detail)
                    values('$usn', '$name', '$contact', '$hostel', '$subject', '$detail');";
    mysqli_query($conn, $sql_insert); 
    echo '<script>alert("Your complaint has been registered")</script>'; 
    echo '<script>window.location.href = "Facilitycomplaint.php";</script>';
    
}
?>