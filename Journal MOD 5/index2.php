<!DOCTYPE html>
<html>
<head>
	<title>Soal 2: Requests</title>
</head>
<body>
	<!-- [HERE] buat agar form ini mengarah ke get.php dengan method GET -->
	<h2>GET</h2>
	<form action="get.php" method="GET">
		<label for="name">Nama</label> <input type="text" name="name" id="name" placeholder="Nama" required> <br>
		<label for="sid">NIM</label> <input type="text" name="sid" id="sid" pattern="[0-9]{10}" placeholder="Sesuai format NIM :)"> <br>
		<label for="password">Password</label> <input type="password" name="password" id="password" placeholder="Jangan password asli"> <br>
		<input type="submit" name="">
	</form>
	<!-- [HERE] buat agar form ini mengarah ke post.php dengan method POST -->
	<h2>POST</h2>
	<form action="post.php" method="POST">
		<label for="name">Nama</label> <input type="text" name="name" id="name" placeholder="Nama" required> <br>
		<label for="sid">NIM</label> <input type="text" name="sid" id="sid" pattern="[0-9]{10}" placeholder="Sesuai format NIM :)"> <br>
		<label for="password">Password</label> <input type="password" name="password" id="password" placeholder="Jangan password asli"> <br>
		<input type="submit" name="">
	</form>
</body>
</html>