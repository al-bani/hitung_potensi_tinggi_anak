<html>
<head>
	<title>Menghitung Potensi Tinggi Anak</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<?php 

   if(isset($_POST['hitung'])){
	$bil1 = $_POST['bil1'];
	$bil2 = $_POST['bil2'];
	$operasi = $_POST['operasi'];
	switch ($operasi) {
		case 'tambah':
			$hasil = floatval($bil1+$bil2)+13;
		break;
		case 'kurang': 
			$hasil = floatval($bil1+$bil2)-13;
	}
}

	?>
	<div class="form">
		<h1>KALKULATOR</h1>
		<h3>Menghitung Potensi Tinggi Anak</h3>
		<form method="post" action="index.php">			
			<input id="tba" name="bil1" class="bil" autocomplete="off"  placeholder="Tinggi Badan Ayah" type="number" required>
			<input id="tbi" name="bil2" class="bil" autocomplete="off" placeholder="Tinggi Badan Ibu" type="number" required>
			<select class="opsi" id="op" name="operasi">
				<option value="tambah">Jika Anak Cowo</option>
				<option value="kurang">Jika Anak Cewe</option>
				
			</select>


    <input type="submit" name="hitung" value="Hitung" class="tombol">	<?php
$bil1err = $bil2err = "";
$bil1 = $bil2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["bil1"])) {
    $bil1err = ($_POST["index.php"]);
  } else {
    $bil1 = ($_POST["bil1"]);
  }

  if (empty($_POST["bil2"])) {
    $bil1err = ($_POST["index.php"]);
  } else {
    $bil2 = ($_POST["bil2"]);
  }
}
?>
	
											
		</form>

		
	<h2>Hasil :</h2>
		<?php 
		$cm = " cm";
		if(isset($_POST['hitung'])){ ?>
			<input type="text" disabled="true" value="<?php echo $hasil/2+8,5 . $cm;  ?>" class="bil">
			<input type="text" disabled="true" value="<?php echo $hasil/2-8,5 . $cm; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" disabled="true" placeholder="Tinggi Badan Maksimal Anak" class="bil">
			<input type="text" disabled="true" placeholder="Tinggi Badan Minimal Anak" class="bil">
		<?php } ?>	
	</div>
	
</body>
</html>
