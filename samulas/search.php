<?php  
include "config.php";
if( isset($_POST['ara']) )
{
$word=$_POST["word"];
$result = mysqli_query($mysqli,"SELECT * FROM customer WHERE identityNumber=$word");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>ANASAYFA</title>
</head>
<body>
	<table class="table table-bordered">
		<tr>
			<td>ID</td>
			<td>T.C.KİMLİK NO</td>
			<td>AD</td>
			<td>İŞLEMLER</td>
		</tr>
		<tr>
		<?php
while($res = mysqli_fetch_array($result)) { 	
	echo "<tr>";
	echo "<td>".$res['id']."</td>";
	echo "<td>".$res['identityNumber']."</td>";
	echo "<td>".$res['firstName']."</td>";	
	echo "<td><a class='btn btn-success' href=\"edit.php?id=$res[id]\">DÜZENLE</a> | <a class='btn btn-danger' href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Silmek İstediğinize Emin Misiniz?')\">SİL</a></td>";	
	echo "<br>";	

}

}



  ?>
		</tr>
	</table>
</body>
</html>

 




