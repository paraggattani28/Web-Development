<?php
session_start();
?>
<html>
    <head>

    <style>

    .fill
    {
        margin-top:150px;
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
        .form button{
            border: none;
            
        }

    </style>

<script>
function myFunction() {

  alert("Your Issue has been recorded. We will get back to you soon regarding your issue!");
}
</script> 
    </head>
    <body>
        <div class="fill">
            <center><p> Hello!</p></center>
            <center><p>Enter Your Issues Here!</p></center><br><br>
        </div>
        <div class="form">
            <center><h1>FORM</h1></center>
            <form action="complaint_insert.php" method ="post">
                <center><input type="text" name="subject" placeholder="Enter The Issue" required></center><br>
                <center><input type="text" name="detail" placeholder="Describe Your Issue" required></center><br>
                <center><button><input type="Submit" value="Submit" name="Submit" style="border:none;"></button></center><br>
            </form>
        </div>
        <div class="msg">
            <?php
                if(isset($_POST["Submit"]))
                {
                    echo 'Hello ';
                    echo $_SESSION['name']. " " ;
                    echo $_SESSION['usn'];
                    echo ' Your Issue has been recorded. We will get back to you soon regarding your issue!';
                }   
            ?>
        </div>
    </body>
</html>