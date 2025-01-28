<!--doctype html>

<html>
	<head>
		<!—created by akshaya-->
		<title>simple database</title>
		<style type=”type/css”>
		body{ font-family:sans-serif;
				Background-color:lightgreen;
			Margin:50px;}
		table { background-color: lightyellow;
			   Border-collapse:collapse;
			   Border: 1px solid grey;}
		Td {padding:5px;}
		Tr:nth-child(odd){
					Background-color:white;}
		table,td,th{
				Border:1px solid black;
}
				
		</style>
	</head>
    <body>
            <h1> query</h1>
            <form method=”post” action=”#”>
            <p> select a field to duspaly:
            <!—add a selct box containing options
            <select name=”select”>
            <option value=”make”> car make</option>
            <option value=”*”>all columns from table</option>
            <option value=”model”>car model</option>
            </select></p>
                <p><input type=submit value=”selectquery” name=”selectQuery”></p>
            </form>
            <?php 
               if(isset($_POST['selectQuery'])){
                require_once('database2.php');
               }
                ?>
    </body>
</html>