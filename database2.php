<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="mycars";
	
	$select=$_POST["select"];//cretaes variable $select for query
	$result;//stores
	$sql="SELECT" .$select. "FROM cars";//CREATE QUERY
	//ESTABLISH CONNECTION
	$connection= new mysqli($servername,$username,$password,$dbanme);
	if($connection->errno){//CHECK FOR CONNECTION
	("connection nfail:" .$connection->CONEECTION.ERRROR);//DISPLAY MESSAGE
	echo"DBMS connection failed_errno:" .$connection->errno.PHP_EOL;
	die("DBMS connection failed_errno:" .$connection->errno.PHP_EOL);
	}
	try{
	if(!($result=$connection->query($sql))){
	throw new Exception("select Query failed".$connection->error);
	}
}catch(Exception $e){
	die("error:" .$e->getmessage());
	}
	connection->close();
	?>
    <h3> query:"select <?php print("$select") ?>FROM cars</h3>
    <table>
		<caption><b>results</b></caption>
			<tr>
                <?php
                    Switch($select){
                    case “*”:
                        echo"";
                        break;
                        case “make”:
                        echo "<th>Make</th>";
                        break;
                       case “model”:
                        echo"<th>Model</th>";
                        break;
                    }
                ?>
			</tr>
                <?php 
                    while($row=$result-> fetch_assoc()){
                        print("<tr>");
                    foreach($row as $value){
                        print("<td>$value</td>");

                    }
                    print("</tr>");
                    }
                ?>
    </table>
    <p>your search
        <?php print($result -> num_rows);?> row(s).

    </p>
