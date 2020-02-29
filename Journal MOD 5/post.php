<?php
// [HERE] lengkapi statement berikut
$name = ;
$sid = ;
$password = ;
$luckyNumber = getLuckyNumber($sid);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Soal 2: Requests POST</title>
</head>
<body>
	<!-- [HERE] Tampilkan pesan di bawah sesuai format -->
	<strong>Halo, name (sid)</strong> <br>
	<i>Angka keberuntunganmu adalah: <strong>luckyNumber</strong></i> <br>
	<span>Passwordmu: <strong>password</strong></span> <br>
	<small><strong style="color: lightgreen">Passwordmu tidak terlihat di address bar :)</strong></small>
</body>
</html>

<?php
// [HERE] buat function getLuckyNumber yang return sebuah angka random dari salah satu NIM
function getLuckyNumber($sid) {
}
?>