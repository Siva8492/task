<?php
$username = 'root';
$password = '';
$hostname = 'localhost';
$dataname = mysql_connect($hostname,$username,$password) or die("Connection failed: ");
$selected = mysql_select_db('my_vcf',$dataname) or die("Could not select Database");
#$result = mysql_query("SELECT chr,pos,id,qual FROM mutect_1 where qual='0'");
$result = mysql_query("SELECT chr,pos,id,qual FROM mutect_1 where qual>='50' and qual<='500'");#there is no quality data in the given file ("mutect_immediate.vcf")
#echo $result;
echo "<center>";
echo "<title>Result</title>";
	echo"<style>
	table, th, td {
    	border: 1px solid black;
    	border-collapse: collapse;
	}
	th, td {
    	padding: 5px;
	}
	th {
    	text-align: left;
    	background-color: skyblue;
	text-color:white;
	}
</style>
		<table style=width:75%>
		<tr>
		<th>Chr</th>
		<th>Pos</th>
		<th>ID</th>
		<th>Qual</th>
		</tr>";
	while($row = mysql_fetch_array($result))
		
        echo"<tr>
		<td>".$row['0']."</td>
		<td>".$row['1']."</td>
		<td>".$row['2']."</td>
		<td>".$row['3']."</td>
		</tr>";
echo "</table>";
echo "</center>";
echo "<br>";
?>
