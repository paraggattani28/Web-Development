<?php
session_start();
?>
<html>
    <head>

    <style>
    .fill
    {
        margin-top:90px;
    }
        .fill p
        {
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
            margin-top:40px;
        }
        .form input
        {
            font-family: Javanese Text;
            height:35px;
            width:400px;
        }
        .long
        {
            height:80px;
        }
        .msg
        {
            margin-top:40px;
            font-size:20px;
            margin-bottom:40px;
        }

    </style>
    
    </head>
    <body>
        <div class="fill">
            <center><p> Hello!</p></center>
            <center><p>Write about Your need and necessity for a new item!</p></center><br><br>
        </div>
        <div class="form" atyle="margin-top:150px;">
            <center><h1>FORM</h1></center>
            <form action="request_insert.php" method ="post">
                <center><input type="text" name="subject" placeholder="Your Request" required></center><br>
                <center><input type="text" name="need" placeholder="Need for the request" required></center><br>
                <center><input type="text" name="necessity" placeholder="Necessity" required></center><br>
                <center><button><input type="Submit" value="Submit" name="Submit" style="border:none;"></button></center><br>
            </form>
        </div>
        <div class="msg">
            <?php
                if(isset($_POST["Submit"]))
                {
                    echo 'Hello ';
                    echo $_SESSION['name'], ' ' ;
                    echo $_SESSION['usn'];
                    echo ' Your Request for ', $_SESSION['subject'] ,  ' has been recorded. Administration will be informed for the request made!';
                }   
            ?>
        </div>
    </body>
</html>