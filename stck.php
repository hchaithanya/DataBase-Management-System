<?php
   $db_connection = pg_connect(
    "host=localhost 
    dbname=postgres 
    user=postgres      
    password=postgres ") or die('Could not connect:' . pg_last_error());

    $result = pg_query($db_connection, "SELECT * FROM Product_Details");


    if(pg_num_rows($result)>0) {

        while($row = pg_fetch_array(result)) {
?>

            <tr>
                <td><?php echo $row['Id'];?></td>
                <td><?php echo $row['Pname'];?></td>
                <td><?php echo $row['Pcost'];?></td>
                <td><?php echo $row['Pcount'];?></td>
            </tr>
            <?php
        }

    }
 
?>

