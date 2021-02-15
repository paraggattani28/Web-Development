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
    $mobile=$row['mobile'];
    $email=$row['email'];
}
}


?>
<?php
    if(isset($_POST['Submit']))
    {
        include_once 'db_connect.php';

        $name = $_POST["name"];
        $venue=$_POST["venue"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $description = $_POST["description"]; 
        $rating = 0;  

        $file = $_FILES['file'];
        $file_name = $file['name'];
        $file_temp_name = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];

        $file_name_break = explode('.', $file_name);
        $file_extention = strtolower(end($file_name_break));

        $allowed_extentions  = array("jpg", "jpeg", "png", "gif");

        if(in_array($file_extention, $allowed_extentions))
        {
            if($file_error === 0)
            {
                if($file_size < 50000000)
                {
                    $file_new_name = uniqid('', true).".".$file_extention;
                    $file_destinataion = "upload/".$file_new_name;
                    
                    move_uploaded_file($file_temp_name, $file_destinataion);
                }
                else
                {
                    echo"File size exceeded the size limit!";
                }
            }
            else
            {
                echo"There was an error uploading your file!";
            }
        }
        else
        {
            echo"File type not allowed!";
        }

            if($result1_check > 0)
            {
    
                while($row = mysqli_fetch_assoc($result1))
                {
                    $mobile=$row['mobile'];
                    $email=$row['email'];
                }
            }


        $sql_insert = "INSERT INTO host (name, date, time, description, mobile, email, venue, image, rating)
                        values('$name', '$date', '$time', '$description', '$mobile', '$email', '$venue', '$file_new_name', '$rating');";
        mysqli_query($conn, $sql_insert); 
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        header("Location: host.php?Registered");
        
    }

?>
