<!DOCTYPE html>
<html>
    <body>
        <!--//Starting the session to get the session variable from the last page-->
        <?php
        session_start();
        $totalValue = $_POST['txtTotal'];
        
        echo "The total value is".$totalValue.".";
        ?>
    </body>
</html>
