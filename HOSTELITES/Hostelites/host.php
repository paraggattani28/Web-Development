<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body
{
    height: 100%;
    margin: 0;
}
.background
{
    background-image: url("images/hostimg.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.start p
{
    text-align:center;
    color:white;
    font-family:Courier;
    font-size:25px;
    line-height:40px;
    padding-top:30px;

}
.form1
{
    width:30%;
    padding-left:50px;   
}
.p
{
    font-size:28px;
    color:white;
    margin-top:180px;
    font-family: Javanese Text;
    text-align:center;
}
.form1 input
{
    font-family: Javanese Text;
    height:45px;
    font-size:18px;
    text-align:center;
    width:450px;
}
.form2
{
    margin-top:-300px;
    float:right;
    width:30%;

}
.form2 input
{
    font-family: Javanese Text;
    height:45px;
    font-size:20px;
    text-align:center;
    width:400px;
}

</style>
</head>

<body >
<div class="background">
    <div class="start">
        <p class="">Hey Buddy!<br><font size="40px">Fill me out......</font><br>Pls!!</p>
    </div>

    <?php 
        if(!empty($statusMsg))
        {
            ?>
            <p class="status <?php echo $status; ?>"> <?php echo $statusMsg; ?></p>
        <?php } ?>
        <form action="hostinsert.php" method ="post" enctype = "multipart/form-data">
    <div class="form1">

        
                <p class="p">Upload Your Event Pic Here!</p>
        <input type="file" placeholder="Upload event image" name="file" style="margin-top:80px;border:none;color:white; background-color:black;border: 1.5px solid grey;text-align:center;" accept="image/*"  required ><br><br>
       
    </div>

    <div class="form2">

        
            <input type="text" placeholder="Name Your Event" name="name" required><br><br>
            <input type="text" placeholder="Venue" name="venue" required><br><br>
            <input type="date" placeholder="Date of the Event" name="date" required><br><br>
            <input type="time" placeholder="Time of the Event" name="time" required><br><br>
            <input type="text" placeholder="Description of the event" name="description" style="height:100px;" required><br><br>
            <input type="Submit" value="Submit" name="Submit" style="border:none;color:white; background-color:black;border: 1.5px solid grey;" required>
        </form>
    </div>
</div>

</body>

</html>
