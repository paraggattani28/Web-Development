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
    }
}
?>

<html>
<head>

<style>
.fill p
{
    margin-top:100px;
    font-size: 20px;
    font-family: Courier New;
}
.form
{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding-top:30px;
    padding-bottom:10px;       
    width:700px;
    margin-left: 400px;
}
.form input
{
    font-family: Javanese Text;
}

</style>
</head>

<body>

<div class="fill">
            <center><p> Heyy there! <?php echo $name; ?><br><br>Let's take a minute and rate an event!</p></center><br><br>
</div>

<div class="form">
<form action="" method="post">
    <center><input type="radio" name="fb" value="1">&emsp;1</center><br>
    <center><input type="radio" name="fb" value="2">&emsp;2</center><br>
    <center><input type="radio" name="fb" value="3">&emsp;3</center><br>
    <center><input type="radio" name="fb" value="4">&emsp;4</center><br>
    <center><input type="radio" name="fb" value="5">&emsp;5</center><br><br>
    <center><input type="Submit" name= "Submit" value="Submit" style="width:400px;"></center>
</form>
</div>


<?php


if(isset($_GET['event_id']))
{      
    echo $event_id = $_GET['event_id'];  
    if(isset($_POST['Submit']))
    {
    include_once 'db_connect.php';

    $sql_extract = "SELECT rating FROM host where event_id =$event_id;";

    $result = mysqli_query($conn, $sql_extract);
    $result_check = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    $rating = $row['rating'];

    $fb = $_POST['fb'];
    
            if($fb == '1')
            {
                $feedb = 1;
                if($rating!=0)
                $rating = ($rating+$feedb)/2;
                else
                $rating = $feedb;
            }
            else if($fb == '2')
            {
                $feedb = 2;
                if($rating!=0)
                $rating = ($rating+$feedb)/2;
                else
                $rating = $feedb;
            }
            else if($fb == '3')
            {
                $feedb = 3;
                if($rating!=0)
                $rating = ($rating+$feedb)/2;
                else
                $rating = $feedb;
            }
            else if($fb == '4')
            {
                $feedb = 4;
                if($rating!=0)
                $rating = ($rating+$feedb)/2;
                else
                $rating = $feedb;
            }
            else if($fb == '5')
            {
                $feedb = 5;
                if($rating!=0)
                $rating = ($rating+$feedb)/2;
                else
                $rating = $feedb;
            }


    $sql_insert = "UPDATE host set rating='$rating' where event_id = '$event_id'";
    $new = mysqli_query($conn, $sql_insert);   
    if(!$new)
    {
        die("Error!".mysqli_error($conn));
    }
    echo '<script>alert("Your respond has been submitted")</script>'; 
    echo '<script>window.location.href = "Events.php?submitted";</script>';
    }
}
?>

</body>
</html>