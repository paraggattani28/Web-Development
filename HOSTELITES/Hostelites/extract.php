<?php
    include_once 'db_connect.php';
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
<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
    </head>
    <body>

        <?php

            $sql_extract = "SELECT * FROM user_info;";

            $result = mysqli_query($conn, $sql_extract);
            $result_check = mysqli_num_rows($result);


            if($result_check > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo $row['usn']."  ";
                    echo $row['first_name']."   ";
                    echo $row['last_name']."    ";
                    echo $row['email']."    ";
                    echo $row['password']." ";
                    echo $row['mobile']."   ";
                    echo $row['hostel']."   ";
                    echo $row['room_no']."<br><br>";
                }
            }

        ?>

        <form action = "extract.php" method = "POST">
            <button tupe = "submit" name = "back" value = "back">GO BACK</button>
        </form>

        <?php
            if(isset($_POST["back"]))
            {
                header("Location: Original_signup.php");
            }
        ?>

    </body>
</html>