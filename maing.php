<?php
echo '<h1 class="text-success"> all the data ...</h1>';
$conn=new mysqli('localhost',"root",'','data_maining');

    $sql = "Select * From maing";
    //$stmt = $DB->prepare($sql);
	$sql = $conn->query($sql);
	//$stmt->execute();
    if($sql)
	{ echo "
<table dir='trl' align='center' width='100%' border='1'  >
<tr>
                          	<td><h4>Country</h4></td>
							<td><h4>Jan2020</h4></td>
							<td><h4>Feb2020</h4></td>
                          <td><h4> Mar2020</h4></td>
						  <td><h4>Apr2020</h4></td>
						  <td><h4>Apr2020</h4></td>
							<td><h4>May2020</h4></td>
							<td><h4>Jul2020</h4></td>
							<td><h4>Aug2019</h4></td>
							<td><h4>Sep2019</h4></td>
							<td><h4>Oct2019 </h4></td>
							<td><h4>Nov2019 </h4></td>
							<td><h4>Dec2019</h4></td>
                          
							
						</tr>

";

//$result = $stmt->fetchAll();
while($row=mysqli_fetch_assoc($sql))
{
echo "
<tr>

<td>".$row['Country']."</td>
<td>".$row['Aug2019']."</td>
<td>".$row['Sep2019']."</td>
<td>".$row['Oct2019']."</td>
<td>".$row['Nov2019']."</td>
<td>".$row['Dec2019']."</td>
<td>".$row['Jan2020']."</td>
<td>".$row['Feb2020']."</td>
<td>".$row['Mar2020']."</td>
<td>".$row['Apr2020']."</td>
<td>".$row['May2020']."</td>
<td>".$row['Jun2020']."</td>
<td>".$row['Jul2020']."</td>


</tr>



	";}echo "</table>";}				
				
					
			?>

