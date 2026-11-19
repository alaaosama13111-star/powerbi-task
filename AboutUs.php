
<!DOCTYPE html>
<html>
<head>
    <body> 
        <?php
        $roll=rand(1,6);
        if($roll== 1){$english='one';}
        else if  ($roll== 2){$english= 'two';}
        else if  ($roll== 3){$english= 'three';}
        else if  ($roll== 4){$english= 'four';}
        else if  ($roll== 5){$english= 'five';}
        else if  ($roll== 6){$english= 'six';}
        echo '<p> you rolled a ' . $english. '</p>';
        if ($roll== 6){
            echo '<p> you won!</p>';
        }
        else{ 
            echo '<p> sorry, you didnot win, better luck next time!</p>';
        }
        ?>





    </body>

</html>