<?php
    session_start();
?>
<?php
    if(isset($_SESSION['session_usn']))
    {
        $session_usn = $_SESSION['session_usn'];
        $session_first_name = $_SESSION['session_first_name'];
        $session_last_name = $_SESSION['session_last_name'];
        echo "Logged in as $session_first_name "."$session_last_name!";
        echo
        '<form action = "logout.php" method = "POST">
        <button type = "submit" name = "logout" value = "logout">LOG-OUT</button>
        </form>';
    }
    else
    {
        echo "Logged out!";
    }
?>
<br><br>
<?php

    if(isset($_POST["submit"]))
    {
        include_once 'db_connect.php';


        $usn = mysqli_real_escape_string($conn, $_POST["usn"]);
        $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
        $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
        $hostel = mysqli_real_escape_string($conn, $_POST["hostel"]);
        $room_no = mysqli_real_escape_string($conn, $_POST["room_no"]);

        if(empty($usn))
        {
            echo '<script>alert("Enter Your USN")</script>'; 
            echo '<script>window.location.href = "Original_signup.php";</script>';
        }
        else if ( empty($first_name))
        {
            echo '<script>alert("Enter First Name")</script>'; 
            echo '<script>window.location.href = "Original_signup.php";</script>';
        }
        else if ( empty($last_name))
        {
            echo '<script>alert("Enter Last Name")</script>'; 
            echo '<script>window.location.href = "Original_signup.php";</script>';   
        }
        else if ( empty($email))
        {
            echo '<script>alert("Enter Email-id")</script>'; 
            echo '<script>window.location.href = "Original_signup.php";</script>';
        }
        else if ( empty($password))
        {
            echo '<script>alert("Enter Password")</script>'; 
            echo '<script>window.location.href = "Original_signup.php";</script>';
        }
        else if ( empty($mobile))
        {
            echo '<script>alert("Enter Contact number")</script>'; 
            echo '<script>window.location.href = "Original_signup.php";</script>';   
        }
        else if ( empty($hostel))
        {
            echo '<script>alert("Enter Hostel Name")</script>'; 
            echo '<script>window.location.href = "Original_signup.php";</script>';
        }
        else if ( empty($room_no))
        {
            echo '<script>alert("Enter Your Room Number")</script>'; 
            echo '<script>window.location.href = "Original_signup.php";</script>';
        }
        else
        {
            if(!preg_match("/^[a-zA-Z]*$/", $first_name))
            {
                header("Location: Original_signup.php?signup=fchar&usn=$usn&last_name=$last_name&email=$email&mobile=$mobile&hostel=$hostel&room_no=$room_no");
            }
            else
            {
                if(!preg_match("/^[a-zA-Z]*$/", $last_name))
                {
                    header("Location: Original_signup.php?signup=lchar&usn=$usn&first_name=$first_name&email=$email&mobile=$mobile&hostel=$hostel&room_no=$room_no");
                }
                else
                {
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        header("Location: Original_signup.php?signup=email&usn=$usn&first_name=$first_name&last_name=$last_name&mobile=$mobile&hostel=$hostel&room_no=$room_no");
                    }
                    else
                    {
                        $sql_insert = "INSERT INTO user_info (usn, first_name, last_name, email, password, mobile, hostel, room_no) 
                                    VALUES ('$usn', '$first_name', '$last_name', '$email', '$hashed_password', '$mobile', '$hostel', '$room_no');";
                        mysqli_query($conn, $sql_insert);           
                        header("Location: Original_signup.php?signup=success");
                    }
                }
                
            }
        }
    }
    else
    {
        header("Location: Original_signup.php?signup=error");
    }

?>