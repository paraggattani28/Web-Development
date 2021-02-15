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
        $usn = $row['usn'];
        $fname=$row['first_name'];
        $lname = $row['last_name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $hostel = $row['hostel'];
        $roomno = $row['room_no'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body, html
{
    background-color:black;
}
.form
{
    border: 1.5px solid grey;
    color:white;
    font-size:30px;
    padding:40px;
    margin-top:130px;
    margin-left:380px;
    width:45%;
    text-align:center;
    line-height:45px;
    font-family:Lucida Sans Unicode;
    

}
.form input
{
    font-family: Javanese Text;
    height:35px;
    width:400px;
    font-size:19px;
    text-align:center;
}
</style>
</head>
<body>

<?php

    if(isset($_POST['submit']))
    {
        $newemail = $_POST['email'];
        $newmobile = $_POST['mobile'];
        $newhostel = $_POST['hostel'];
        $newroom = $_POST['room_no'];

        $sql_insert = "UPDATE user_info set email = '$newemail', mobile='$newmobile', hostel='$newhostel', room_no='$newroom' where usn ='$usn'";
        $new_query = mysqli_query($conn, $sql_insert); 
        header("Location: account.php?Updated");
        if(!$new_query)
        {
            die('error!'.mysqli_error($conn));

        }
    }

?>

    <div class="form">
        <?php 
        echo 'USN : ' , $usn, '<br>';
        echo 'Name : ' , $fname, ' ', $lname, '<br>';?>

        <form action='' method="POST">

        <input type="text" name="email" value="<?php echo $email; ?>" ><br>
        <input type="text" name="mobile" value="<?php echo $mobile; ?>" ><br>
        <input type="text" name="hostel" value="<?php echo $hostel; ?>" ><br>
        <input type="text" name="room_no" value="<?php echo $roomno; ?>" ><br>
        <input type="submit" name="submit" style="width:130px;margin-top:20px;">
        </form>
    </div>

</body>
</html>