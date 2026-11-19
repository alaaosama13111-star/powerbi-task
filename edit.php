<html>
    <head>
        <title> Update all records from Database</title>
    </head>
    <body>
        <?php
        include"server1.php";
        $id = $_GET["id"];
        $qry1 = mysqli_query($db," select * from product where id='$id'");
        $data=mysqli_fetch_array($qry1);
        if(isset($_POST['update']))
        {
            $productname = $_POST['productname'];
            $color = $_POST['color'];
            $price = $_POST['price'];

            $sql1 =" update prosql1duct set productname='$productname' , color='$color', price='$price' where id='$id'";
            $edit=mysqli_query($db, $sql1);

            if ($edit)
            {
                mysqli_close( $db );
                header("location:product.php");
            }
            else{
                echo mysqli_error($db);
            }
        }
?>
<h2>Update Data</h2>
<form method="post">
<input type="text" name="productname" value="<?php echo $data ['productname'] ?> " placeholder="Enter Product Name" required>
<input type="text" name="color" value="<?php echo $data ['color'] ?> ">
<input type="text" name="price" value="<?php echo $data ['price'] ?> ">
<input type="submit" name="update" value="Update">
</form>
    </body>
</html>