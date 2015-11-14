<!DOCTYPE html>

<?php

	// given array of people
	$people = array(
	array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
	);

	// main function which creates the table of $people
	function array2table($arr) {
		foreach ($arr as $array) {
			printRow($array);
		}
	}

	// supporting function to print each row of the table
	function printRow($row) {
		echo "<tr><td>";
		echo implode("</td><td>", $row);
		echo "</td><td>" . "<button>Boom!</button>" . "</td></tr>";
	}

?>

<style type="text/css">

	body {
		font-family: Verdana, Helvetica, Times;
		background: #f0f5f5;
	}

	table {
		border: 1px dotted #3d3d5c;
		margin: auto;
	}

	th {
		background: #334c4d;
		color: #e1eaea;
	}

	tr {
		background: #96b5b5;
		text-align: center;
		color: #c2d5d6;
	}

	td, th {
		padding: 5px 10px;
	}

	p {
		text-align: center;
		font-family: Helvetica;
	}

	#titre {
		color: #2a3c3c;
		font-size: 25px;
	}

	#foot {
		text-align: center;
		font-family: Courier New;
	}

	small:hover {
		color: orange;
	}
</style>





<html>
<head>
	<meta charset="utf-8">
	<title>eBASE | Developer Application</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

	<p id="titre">eBASE Developer Application Test</p>
	<table>
		<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email Address</th><th>Get Email!</th></tr>
		<?php array2table($people) ?>
	</table>

	<script>
	$(document).ready(function(){

    	$("button").click(function(){
    		var fristName = $(this).closest("tr").children("td:eq(1)").text();
			var lastName = $(this).closest("tr").children("td:eq(2)").text();
			var email = $(this).closest("tr").children("td:eq(3)").text();

			alert("Name: " + fristName + " " + lastName + "\nEmail: " + email);
    	});

	});
	</script>

	<footer>
		<p><small id="foot">&copy;2015 eBASE | Ashkan Entezari</small></p>
	</footer>

</body>
</html>