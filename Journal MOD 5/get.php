<?php
// [HERE] lengkapi statement berikut
$name = $_GET['name'];
$sid = $_GET['sid'];
$password = $_GET['password'];
$luckyNumber = getLuckyNumber($sid);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Soal 2: Requests GET</title>
</head>
<body>
	<!-- [HERE] Tampilkan pesan di bawah sesuai format -->
	<strong>Halo, <?php echo $name?> (<?php echo $sid?>)</strong> <br>
	<i>Angka keberuntunganmu adalah: <strong><?php echo $luckyNumber ?></strong></i> <br>
	<span>Passwordmu: <strong><?php echo $password ?></strong></span> <br>
	<small><strong style="color: lightgreen">Passwordmu tidak terlihat di address bar :)</strong></small>
</body>
</html>

<?php
// [HERE] buat function getLuckyNumber yang return sebuah angka random dari salah satu NIM
function getLuckyNumber($sid) {
	$raimu = rand(0,$sid);
	return $raimu;
}
?>