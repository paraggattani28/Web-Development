<?php
session_start();
?>
<html>
    <head>
    <title>Shopkeeper</title>
    <style>
        .fill p
        {
            font-size: 15px;
            font-family: Courier New;
            margin-top:50px;
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
            text-align:center;
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
            
            <center><p></p></center><br><br>
        </div>
        <div class="form">
        <center><p style="font-size: 28px; font-family: Courier New; margin-top:70px;">Add Your Product Details Here</p></center><br><br>
            <form action="buy.php" method ="post"  enctype = "multipart/form-data" align="center">
                <input type="file" placeholder="Upload event image" name="file" accept="image/*" required >
                <input type="text" placeholder="Product Name" name="product" required><br><br>
                <input type="number" placeholder="Price" name="price" required><br><br>
                <input type="text" placeholder="Write Description of the product" name="description" required><br><br>
                Condition: &emsp;&emsp;<input type="radio" name="condition" value="old" style="height:12px;width:12px;">OLD&emsp;&emsp;
                <input type="radio" name="condition" value="new" style="height:12px;width:12px;">NEW<br><br>
                <input type="text" placeholder="Size" name="size" required><br><br>
                <input type="submit" value="Submit" name="Submit" required><br><br>
            </form>
        </div>

        <div class="msg">
            <?php
                if(isset($_POST["Submit"]))
                {
                    
                }   
            ?>
        </div>
    </body>
</html>