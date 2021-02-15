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
        $usn = $row['usn'];
        $contact = $row['mobile'];
        $hostel= $row['hostel'];
    }
}
?>
<?php
    if(isset($_POST['Submit']) && !empty($_POST['Submit']))
    {
    include_once 'db_connect.php';
    
    $subject =  $_POST["subject"];
    $need = $_POST["need"];
    $necessity = $_POST["necessity"];

    $sql_insert = "INSERT INTO requests(usn, name, contact, hostel, subject, need, necessity)
                            values('$usn', '$name', '$contact', '$hostel', '$subject', '$need', '$necessity');";
    mysqli_query($conn, $sql_insert);   
    echo '<script>alert("Your Request has been sent to the Administration")</script>'; 
    echo '<script>window.location.href = "request.php";</script>';
    }
?>
