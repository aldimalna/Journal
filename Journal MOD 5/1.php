<?php
// Tidak usah pedulikan line di bawah ini
$action = $_GET['action'] ?? null;


// [HERE] Pedulikan yang ini saja. jangan diganti ya
$arr = ['Aku', 'Adalah', 'Anak', 'Gembala', 'Selalu', 'Riang', 'Serta', 'Gembira'];
switch ($action) {
	case 'show':
		$result = showResult($arr);
		break;
	case 'hide':
		$result = hideResult($arr);
		break;
	case 'odd':
		$result = oddResult($arr);
		break;
	case 'even':
		$result = evenResult($arr);
		break;
	case 'empty':
		$result = emptyResult($arr);
		break;
	default:
		$result = [];
		break;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Soal 1: PHP..</title>
</head>
<body>
	<h1>Operasikan array di bawah ini</h1>
	<ol start="0">
		<li>Aku</li>
		<li>Adalah</li>
		<li>Anak</li>
		<li>Gembala</li>
		<li>Selalu</li>
		<li>Riang</li>
		<li>Serta</li>
		<li>Gembira</li>
	</ol>
	<a href="?action=empty">Kosong</a>
	<a href="?action=hide">Sembunyikan</a>
	<a href="?action=show">Tampilkan</a>
	<a href="?action=odd">Ganjil</a>
	<a href="?action=even">Genap</a>
	<h1>Hasil</h1>
	
	<ol start="0">
		<!-- [HERE] ganti yang di bawah ini -->
		<?php foreach($result as $r) { ?>
		<li><?php echo $r ?></li>
		<?php }?>
	</ol>

</body>
</html>

<?php
// [HERE] Kerjakan bagian ini
function emptyResult($arr) {
	// Function ini mengembalikan string kosong dalam $result sebanyak $arr
	$result = [];
	$cunt = count($arr);
	for($i=0 ; $i < $cunt ; $i++){
		array_push($result, '');
	}
	return $result;
}

function hideResult($arr) {
	// Function ini  $result tanpa elemen
	$result = [];

	return $result;
}

function showResult($arr) {
	// Function ini mengembalikan semua elemen $arr dalam $result
	$result = $arr;
	return $result;
}

function oddResult($arr) {
	// Function ini mengembalikan semua elemen $arr dalam $result jika indexnya ganjil, string kosong jika genap
	$result = [];
	$cunt = count($arr);
	for($i=0; $i < $cunt ; $i++){
		if($i % 2 != 0){
			array_push($result,$arr[$i]);
		}else{
			array_push($result,'');
		}
	}
	return $result;
}

function evenResult($arr) {
	// Function ini mengembalikan semua elemen $arr dalam $result jika indexnya genap, string kosong jika ganjil
	$result = [];
	$cunt = count($arr);
	for($i=0; $i < $cunt ; $i++){
		if($i % 2 == 0){
			array_push($result,$arr[$i]);
		}else{
			array_push($result,'');
		}
	}
	return $result;
}

?>