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
            <center><p> Heyy there! <?php echo $name; ?><br><br>Let's take a minute and rate our messy Mess!</p></center><br><br>
</div>

<div class="form">
<form action="fb_nhmess.php" method="post">
    <center><input type="radio" name="fb" value="1">&emsp;1</center><br>
    <center><input type="radio" name="fb" value="2">&emsp;2</center><br>
    <center><input type="radio" name="fb" value="3">&emsp;3</center><br>
    <center><input type="radio" name="fb" value="4">&emsp;4</center><br>
    <center><input type="radio" name="fb" value="5">&emsp;5</center><br><br>
    <center><input type="Submit" name= "Submit" value="Submit" style="width:400px;"></center>
</form>
</div>

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
<?php
        
    if(isset($_POST['Submit']) && !empty($_POST['Submit']))
    {
    include_once 'db_connect.php';

    $fb = $_POST['fb'];
    if($fb == '1')
    {
        $feedb = 1;
    }
    else if($fb == '2')
    {
        $feedb = 2;
    }
    else if($fb == '3')
    {
        $feedb = 3;
    }
    else if($fb == '4')
    {
        $feedb = 4;
    }
    else if($fb == '5')
    {
        $feedb = 5;
    }

    $sql_insert = "INSERT INTO fb_nhmess(usn, name, feedback) values('$usn', '$name', '$feedb');";
    mysqli_query($conn, $sql_insert);   
    echo '<script>alert("Your respond has been submitted")</script>'; 
    echo '<script>window.location.href = "nhmess.php";</script>';
    }
?>

</body>
</html>