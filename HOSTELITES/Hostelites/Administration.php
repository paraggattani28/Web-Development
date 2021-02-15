<?php
    include_once 'db_connect.php';
    session_start();
?>
<html>
<head>

<style>
body
{
    
}
.cart
{
    margin-top:70px;
    font-size: 35px;
    font-family: Prestige Elite Std;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    text-align: center;
    background-color: white;
    float: left;
    margin-right: 125px;
    margin-left: 150px;
    height: 200px;
    width: 450px;
    color: black;
    padding:2px;
}
.cart p
{
    margin-top:60px;
}
</style>
</head>
<body>

<a href="extract_issues.php">
    <div class="cart">
        <p>Check Issues</p>
    </div>
</a>

<a href="extract_requests.php">
    <div class="cart">
        <p>Check Requests</p>
    </div>
</a>

<a href="extract_host.php">
    <div class="cart">
        <p>Check Event Hostings</p>
    </div>
</a>


<a href="extract_ihfb.php">
    <div class="cart">
        <p>Check IH Mess Feedback</p>
    </div>
</a>


<a href="extract_nhfb.php">
    <div class="cart">
        <p>Check NH Mess Feedback</p>
    </div>
</a>




</body>
</html>