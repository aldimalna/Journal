<!DOCTYPE html>
<html>
<head>
	<title>Soal 3: More PHP</title>
</head>
<body>
	<!-- [HERE] buat agar form ini mengarah ke result.php dengan method GET -->
	<h1>Template</h1>
	<form method="GET" action="result.php">
		<!-- [HERE] buat agar input ini bernama name -->
		<label for="name">Nama</label> <input type="text" name = "name"id="name" placeholder="Nama" required> <br>
		<!-- [HERE] buat agar input ini bernama sid -->
		<label for="sid">NIM</label> <input type="text" id="sid" name = "password" pattern="[0-9]{10}" placeholder="Sesuai format NIM :)"> <br>
		<input type="submit" name="">
	</form>

	<!-- [HERE] buat agar form ini mengarah ke result_beauty.php dengan method GET -->
	<h1>Template - Beautified</h1>
	<form method="GET" action="result_beauty.php">
		<!-- [HERE] buat agar input ini bernama name -->
		<label for="name">Nama</label> <input type="text" name = "name"id="name" placeholder="Nama" required> <br>
		<!-- [HERE] buat agar input ini bernama sid -->
		<label for="sid">NIM</label> <input type="text" id="sid" name = "password" pattern="[0-9]{10}" placeholder="Sesuai format NIM :)"> <br>
		<input type="submit" name="">
	</form>
</body>
</html>