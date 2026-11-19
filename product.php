<!DOCTYPE html>
<html> 
    <head>
        <title>  Dispaly all records from DB</title>
    </head> 
    <body>
        <h2> Product Details</h2>
        <table border="2">
            <tr> 
                <td> ID</td>
                <td> Product-Name</td>
                <td> Color</td>
                <td> Price</td>
                <td> Image</td>
            </tr> 
<?php 
include"server1.php";
$recorde=mysqli_query($db,"select * from product");
while($data=mysqli_fetch_array($recorde))
    {
        ?>
        <tr> 
        <td><?php echo $data["id"];?></td>
        <td><?php echo $data["productname"];?></td>
        <td><?php echo $data["color"];?></td>
        <td><?php echo $data["price"];?></td>
        <td><img src= " <?php echo $data["image"];?>"  height="50 px" width="50 px" /></td>
        <td> <a href="edit.php ?id=<?php echo $data["id"];?>" > Edit</a></td>
        <td> <a href="delete.php ?id=<?php echo $data["id"];?>" > Delete</a></td>
    </tr>
    <?php
}
?>
        </table>
    </body>
</html>