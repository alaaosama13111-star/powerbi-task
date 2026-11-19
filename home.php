<?php 
include 'server1.php'; 

$query = "SELECT * FROM product";
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Ecommerce website
    </title>
</head>
<body style="background-color: lightpink;">
    <?php if (isset($_SESSION['success'])) : ?>

       <div style="text-align: right; padding: 10px;">
        <span>User: <strong><?php echo $_SESSION['username']; ?></strong></span> | 
        <a href="home.php?logout='1'" style="color: red; font-weight: bold; text-decoration: none;">Logout</a>
    </div> 
        
    <div id="logo">
            <img src="logo1.png" width="200px">
            <strong><?php echo $_SESSION['success']; ?></strong>
            <?php unset($_SESSION['success']);?>
        </div>
        <?php endif ?>
    <h1>welcome, <?php echo $_SESSION['username']; ?> to our Ecommerce website</h1>
    <p> we offering and selling products and services <br>such as clothes , electronics , tools , and makeup 
    </p>
<h3> our categories are </h3>
<hr>
<p><b> this is a bold text</b> and <i> this is an italic text</i> and <u> this is an underlined text</u>
<strong> strong text</strong> <em> emphasized text</em></p>

<img   src="ecommerce.jpg" height="600"  width="500">
<table> 
<tr> <th> product name</th> <th>price</th> <th>color </th></tr>
<tr> <td> samsong tv</td> <td> 40000</td> <td> Blue</td></tr>
<tr> <td> LG</td> <td> 50000</td><td> Black</td></tr>
<tr> <td> sharp </td><td> 70000</td> <td> Gray</td></tr>
</table>
<a href="https://www.facebook.com/?locale=ar_AR" target="_blank">  our facebook page</a>
<br>
<a href="About us.html" target="_blank"> About us </a>
</body>
</html>