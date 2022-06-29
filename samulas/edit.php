<?php
include_once("config.php");

if(isset($_POST['update']))
{	


	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$identityNumber = mysqli_real_escape_string($mysqli, $_POST['identityNumber']);
	$firtstName = mysqli_real_escape_string($mysqli, $_POST['firstName']);	
	
	
	if(empty($id) || empty($identityNumber) || empty($firtstName)) {	
			
		if(empty($id)) {
			echo "<font color='red'>Id Alanı Boş Geçilemez!!!</font><br/>";
		}
		
		if(empty($identityNumber)) {
			echo "<font color='red'>NFC Kodu Boş Geçilemez!!!</font><br/>";
		}
		
		if(empty($firtstName)) {
			echo "<font color='red'>Ürün Adı Boş Geçilemez</font><br/>";
		}		
	} else {	
		
		$result = mysqli_query($mysqli, "UPDATE customer SET id='$id',identityNumber='$identityNumber',firstName='$firtstName' WHERE id=$id");
		
		
		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM customer WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$id = $res['id'];
	$identityNumber = $res['identityNumber'];
	$firstName = $res['firstName'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>VERİ GÜNCELLEME SAYFASI</title>
</head>
<body>
	<a class="btn btn-primary mt-5" href="index.php">Anasayfa</a>
	<br/><br/>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">

			<form class="form-group" name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>ID:</td>
				<td><input class="form-control" type="text" name="id" value="<?php echo $id;?>"></td>
			</tr>
			<tr> 
				<td>NFC KODU:</td>
				<td><input class="form-control" type="text" name="identityNumber" value="<?php echo $identityNumber;?>"></td>
			</tr>
			<tr> 
				<td>ÜRÜN ADI:</td>
				<td><input class="form-control" type="text" name="firstName" value="<?php echo $firstName;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td>	
					<div class="d-grid">
  <button type="submit" name="update" class="btn btn-primary btn-block mt-3">GÜNCELLE</button>
</div>
</td>
			
			</tr>
		</table>
	</form>

			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	
</body>
</html>



