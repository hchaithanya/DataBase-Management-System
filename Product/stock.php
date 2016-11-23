<html> 
    <body> 
        <table border="0" cellspacing="0" cellpadding="0"> 
            <tr> 
                <td> 
                    ID 
                </td> 
                <td> 
                    Pname
                </td> 
                <td> 
                    Pcost 
                </td> 
                <td> 
                    Pcount 
                </td> 
            </tr> 

<?php
	
	$db_connection = pg_connect(
    "host=localhost 
    dbname=postgres 
    user=postgres      
    password=postgres ") or die('Could not connect:' . pg_last_error());

	$query = "SELECT * FROM Product_Details";

	$result = pg_query($query);
	if(! $result) {
		echo "Problem with query" . $query . "<br/>";
		echo pg_last_error();
		exit();
	}
	 while($myrow = pg_fetch_assoc($result)) { 
            printf ("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $myrow['Id'], htmlspecialchars($myrow['Pname']), htmlspecialchars($myrow['Pcost']), htmlspecialchars($myrow['Pcount']));
        }
?>
</table> 
    </body> 
</html> 
