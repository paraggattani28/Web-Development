<?php
    include_once 'db_connect.php';
    session_start();
?>

<?php
if(isset($_POST['Submit']) && !empty($_POST['Submit']))
{
    include_once 'db_connect.php';

    $product =  $_POST["product"];
    $price = $_POST["price"];
    $description =$_POST["description"];
    $condition = $_POST["condition"];
    $size = $_POST["size"];

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

    if($condition == 'old')
    {
        $sql_insert = "INSERT INTO old(product, price, description, condn, size, image)
                        values('$product', '$price', '$description', '$condition', '$size',  '$file_new_name');";
        mysqli_query($conn, $sql_insert);
    }
    if($condition == 'new')
    {
        $sql_insert = "INSERT INTO new(product, price, description, condn, size, image)
                        values('$product', '$price', '$description', '$condition', '$size', '$file_new_name');";
        mysqli_query($conn, $sql_insert);
    }
}
echo '';
echo '<script>window.location.href = "Shopkeeper.php";</script>';
?>  