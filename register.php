<?php require_once('templates/top.php');
if($_POST){
	//print_r($_POST);
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = "INSERT INTO users VALUES(
	null,
	'$email',
	'$password',
	'$name',
	NOW(),
	'unblock',
	NOW()
	)";
	$adr = mysqli_query($db_connect, $query);
if (!$adr){
	exit($query);
	}
}
?>
<script>
document.location.href="login.php"
</script>
<h2>Регистрация на сайте</h2>
	<form method='post' action='register.php'>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
   <div class="mb-3">
    <label for="email" class="form-label">Email adress</label>
    <input type="email" class="form-control" id="email"  name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Registerr</button>
</form>
<?php require_once('templates/bottom.php');?>

