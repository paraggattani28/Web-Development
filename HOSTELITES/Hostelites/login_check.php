<?php
    if(isset($_SESSION['session_usn']))
    {
        $session_usn = $_SESSION['session_usn'];
        $session_first_name = $_SESSION['session_first_name'];
        $session_last_name = $_SESSION['session_last_name'];
        echo "Logged in as $session_first_name "."$session_last_name!";
        echo
        '<form action = "logout.php" method = "POST">
        <button type = "submit" name = "logout" value = "logout">Sign OUT</button>
        </form>';
    }
    else
    {
        echo "Logged out!";
    }
?>
<br><br>
<?php

            include_once 'db_connect.php';
            session_start();


            if(isset($_POST['login']))
            {
                $usn_in = mysqli_real_escape_string($conn, $_POST["usn"]);
                $password_in = mysqli_real_escape_string($conn, $_POST["password"]);

                $sql_check = "SELECT * FROM user_info WHERE usn = '$usn_in';";
                $hashed_password = mysqli_query($conn, $sql_check);
                $row = mysqli_fetch_assoc($hashed_password);
                $result_check = mysqli_num_rows($hashed_password);
                
                if(empty($usn_in))
                {
                    echo '<script>alert("Enter Your USN")</script>'; 
                    echo '<script>window.location.href = "newlogin.php";</script>';
                }
                else if(empty($password_in))
                {
                    echo '<script>alert("Enter Your Password")</script>'; 
                    echo '<script>window.location.href = "newlogin.php";</script>';
                }
                else if(($usn_in == 'administration@bmsce') && ($password_in == 'admin'))
                {
                    echo '<script>alert("Logging in as Administration")</script>'; 
                    echo '<script>window.location.href = "Administration.php";</script>';
                }
                else if(($usn_in == 'shopkeeper') && ($password_in == 'buysell'))
                {
                    echo '<script>alert("Logging in as Shopkeeper")</script>'; 
                    echo '<script>window.location.href = "Shopkeeper.php";</script>';
                }
                else if(($usn_in == 'canteen@day') && ($password_in == 'daycanteen'))
                {
                    echo '<script>alert("Logging in as Day Canteen")</script>'; 
                    echo '<script>window.location.href = "daycanteen.php";</script>';
                }
                else if(($usn_in == 'canteen@night') && ($password_in == 'nightcanteen'))
                {
                    echo '<script>alert("Logging in as Night Canteen")</script>'; 
                    echo '<script>window.location.href = "nightcanteen.php";</script>';
                }
                else if(($usn_in == 'nhmess') && ($password_in == 'nhmess'))
                {
                    echo '<script>alert("Logging in as NH Mess")</script>'; 
                    echo '<script>window.location.href = "nhmess.php";</script>';
                }
                else if(($usn_in == 'ihmess') && ($password_in == 'ihmess'))
                {
                    echo '<script>alert("Logging in as IH Mess")</script>'; 
                    echo '<script>window.location.href = "ihmess.php";</script>';
                }


                else
                {
                    if($result_check == 0)
                    {
                        echo '<script>alert("Enter Correct USN")</script>'; 
                        echo '<script>window.location.href = "newlogin.php";</script>';
                    }
                    else
                    {
                        if(password_verify($password_in, $row['password']) == false)
                        {
                            echo '<script>alert("Wrong Password")</script>'; 
                            echo '<script>window.location.href = "newlogin.php";</script>';
                        }
                        else
                        {
                            session_start();
                            $_SESSION['session_usn'] = $row['usn'];
                            $_SESSION['session_first_name'] = $row['first_name'];
                            $_SESSION['session_last_name'] = $row['last_name'];

                            header("Location: Home_page.php?login=successful");
                        }
                    }
                }
            }
            else
            {
                exit();
            }
?>