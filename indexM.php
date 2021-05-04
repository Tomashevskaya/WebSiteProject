<?php require_once('templates/top.php');
if (isset($_GET['url'])){
	
	$url = $_GET['url'];
}else{
	
	$url = 'index';
}
$query = "SELECT * FROM maintexts WHERE url='$url'";
$adr = mysqli_query($db_connect, $query);
if (!$adr){
	exit($query);
}
$tbl_maintext = mysqli_fetch_assoc($adr);
// echo "<pre>";
// print_r($tbl_maintext);
// echo "</pre>";
?>
	<h2><?php echo $tbl_maintext['name']?></h2>
	<?php echo $tbl_maintext['body']?>
<?php
if (isset($_GET['p'])){
	
	echo $_GET['p'];

		if ($_GET['p']==1){include('p1.php');}
		if ($_GET['p']==2){include('p2.php');}
		if ($_GET['p']==3){include('p3.php');}
		if ($_GET['p']==4){include('p4.php');}
}
else {include('p1.php');}

?>
<?php require_once('templates/bottom.php');?>

